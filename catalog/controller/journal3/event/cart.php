<?php

class ControllerJournal3EventCart extends Controller {

	public function view_common_cart_before(&$route, &$args) {
		$this->load->model('journal3/cart');

		$totals = $this->model_journal3_cart->totals();

		$args['items_count'] = $this->cart->countProducts() + (isset($this->session->data['vouchers']) ? count($this->session->data['vouchers']) : 0);
		$args['items_price'] = $this->currency->format($totals['total'], $this->session->data['currency']);

		if (!empty($args['products'])) {
			$products = array_values($this->cart->getProducts());

			foreach ($products as $index => $product) {
				if ($product['image']) {
					$image = $this->journal3_image->resize($product['image'], $this->journal3->get('image_dimensions_cart.width'), $this->journal3->get('image_dimensions_cart.height'), $this->journal3->get('image_dimensions_cart.resize'));
					$image2x = $this->journal3_image->resize($product['image'], $this->journal3->get('image_dimensions_cart.width') * 2, $this->journal3->get('image_dimensions_cart.height') * 2, $this->journal3->get('image_dimensions_cart.resize'));
				} else {
					$image = $this->journal3_image->resize('placeholder.png', $this->journal3->get('image_dimensions_cart.width'), $this->journal3->get('image_dimensions_cart.height'));
					$image2x = $this->journal3_image->resize('placeholder.png', $this->journal3->get('image_dimensions_cart.width') * 2, $this->journal3->get('image_dimensions_cart.height') * 2);
				}

				$args['products'][$index]['thumb'] = $image;
				$args['products'][$index]['thumb2x'] = $image2x;
			}
		}
	}

	public function view_checkout_cart_before(&$route, &$args) {
		if (!empty($args['products'])) {
			$this->load->model('journal3/product');

			$products = array_values($this->cart->getProducts());
			$product_info = $this->model_journal3_product->getProduct($products);

			foreach ($products as $index => $product) {
				$result = $product_info[$product['product_id']] ?? null;

				if ($result) {
					// product extras
					$classes = $this->journal3_product_extras->exclude_button($result);

					// classes
					$classes['out-of-stock'] = $result['quantity'] <= 0;
					$classes['has-zero-price'] = ($result['special'] ?: $result['price']) <= 0;
				} else {
					$classes = [];
				}

				if ($product['image']) {
					$image = $this->journal3_image->resize($product['image'], $this->journal3->get('image_dimensions_cart.width'), $this->journal3->get('image_dimensions_cart.height'), $this->journal3->get('image_dimensions_cart.resize'));
					$image2x = $this->journal3_image->resize($product['image'], $this->journal3->get('image_dimensions_cart.width') * 2, $this->journal3->get('image_dimensions_cart.height') * 2, $this->journal3->get('image_dimensions_cart.resize'));
				} else {
					$image = $this->journal3_image->resize('placeholder.png', $this->journal3->get('image_dimensions_cart.width'), $this->journal3->get('image_dimensions_cart.height'));
					$image2x = $this->journal3_image->resize('placeholder.png', $this->journal3->get('image_dimensions_cart.width') * 2, $this->journal3->get('image_dimensions_cart.height') * 2);
				}

				$args['products'][$index]['thumb'] = $image;
				$args['products'][$index]['thumb2x'] = $image2x;
				$args['products'][$index]['classes'] = $classes;
			}
		}
	}

}

class_alias('ControllerJournal3EventCart', '\Opencart\Catalog\Controller\Journal3\Event\Cart');
