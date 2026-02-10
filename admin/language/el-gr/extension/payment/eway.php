<?php
// Heading
$_['heading_title']             = 'Πληρωμή με eWAY';

// Text
$_['text_extension']            = 'Επεκτάσεις';
$_['text_success']              = 'Επιτυχία: Έχετε επεξεργαστεί τις πληροφορίες eWAY!';
$_['text_edit']                 = 'Επεξεργασία eWAY';
$_['text_eway']                 = '<a target="_BLANK" href="http://www.eway.com.au/"><img src="view/image/payment/eway.png" alt="eWAY" title="eWAY" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_authorisation']        = 'Έγκριση (Authorisation)';
$_['text_sale']                 = 'Πώληση (Sale)';
$_['text_transparent']          = 'Διαφανής Ανακατεύθυνση(φόρμα πληρωμής στην ιστοσελίδα)';
$_['text_iframe']               = 'Πλαίσιο IFrame (φόρμα πληρωμής σε παράθυρο)';
$_['text_connect_eway']	        = 'Η eWAY βοηθά τις επιχειρήσεις να επεξεργάζονται με ασφάλεια όλες τις κύριες πιστωτικές κάρτες, παρέχοντας ενσωματωμένη προστασία κατά της απάτης, τεχνική υποστήριξη 24/7 κι ακόμη περισσότερα. <a target="_blank" href="https://myeway.force.com/success/accelerator-signup?pid=4382&pa=0012000000ivcWf">Click Here</a>';
$_['text_eway_image']	        = '<a target="_blank" href="https://myeway.force.com/success/accelerator-signup?pid=4382&pa=0012000000ivcWf"><img src="view/image/payment/eway_connect.png" alt="eWAY" title="eWAY" class="img-fluid" /></a>';

// Entry
$_['entry_paymode']             = 'Κατάσταση Πληρωμής';
$_['entry_test']                = 'Δοκιμαστική λειτουργία';
$_['entry_order_status']        = 'Κατάσταση Παραγγελίας';
$_['entry_order_status_refund'] = 'Κατάσταση παραγγελίας επιστροφής χρημάτων';
$_['entry_order_status_auth']   = 'Εγκεκριμένη κατάσταση παραγγελίας';
$_['entry_order_status_fraud']  = 'Κατάσταση παραγγελίας πιθανής απάτης';
$_['entry_status']              = 'Κατάσταση';
$_['entry_username']            = 'Κλειδί API eWAY';
$_['entry_password']            = 'Κωδικός eWAY';
$_['entry_payment_type']        = 'Τύπος Πληρωμής';
$_['entry_geo_zone']            = 'Γεωγραφική Ζώνη';
$_['entry_sort_order']          = 'Σειρά Ταξινόμησης';
$_['entry_transaction_method']  = 'Μέθοδος Συναλλαγής';

// Error
$_['error_permission']          = 'Ειδοποίηση: Δεν έχετε άδεια να επεξεργαστείτε την πληρωμή eWAY';
$_['error_username']            = 'Απαιτείται το κλειδί eWAY API!';
$_['error_password']            = 'Απαιτείται ο κωδικός eWAY!';
$_['error_payment_type']        = 'Απαιτείται τουλάχιστον ένα είδος πληρωμής!';

// Help hints
$_['help_testmode']             = 'Επιλέξτε Ναι (YES) για να χρησιμοποιήσετε τη δοκιμαστική λειτουργία (Sandbox) eWAY.';
$_['help_username']             = 'Το κλειδί του eWAY API από τον λογαριασμό σας στο MYeWAY.';
$_['help_password']             = 'Ο κωδικός του eWAY API από τον λογαριασμό σας στο MYeWAY.';
$_['help_transaction_method']   = 'Η έγκριση είναι μόνο διαθέσιμη για τις τράπεζες της Αυστραλίας.';

// Order page - payment tab
$_['text_payment_info']         = 'Πληροφορίες πληρωμής';
$_['text_order_total']          = 'Σύνολο εγκεκριμένων';
$_['text_transactions']         = 'Συναλλαγές';
$_['text_column_transactionid'] = 'Αριθμος(ID) συναλλαγής eWAY';
$_['text_column_amount']        = 'Ποσό';
$_['text_column_type']          = 'Τύπος';
$_['text_column_created']       = 'Δημιουργήθηκε';
$_['text_total_captured']       = 'Δεσμευμένο σύνολο';
$_['text_capture_status']       = 'Δεσμευμένη πληρωμή';
$_['text_void_status']          = 'Ακυρωμένη πληρωμή';
$_['text_refund_status']        = 'Επιστραμμένη πληρωμή';
$_['text_total_refunded']       = 'Σύνολο επιστραμμένων';
$_['text_refund_success']       = 'Η επιστροφή ολοκληρώθηκε!';
$_['text_capture_success']      = 'Η δέσμευση ολοκληρώθηκε!';
$_['text_refund_failed']        = 'Η επιστροφή απέτυχε: ';
$_['text_capture_failed']       = 'Η δέσμευση απέτυχε: ';
$_['text_unknown_failure']      = 'Άκυρη παραγγελία ή άκυρο ποσό';
$_['text_refund']               = 'Επιστροφή';

$_['text_confirm_capture']      = 'Είστε βέβαιοι οτι θέλετε να δεσμεύσετε την πληρωμή;';
$_['text_confirm_release']      = 'Είστε βέβαιοι οτι θέλετε να αποδεσμεύσετε την πληρωμή;';
$_['text_confirm_refund']       = 'Είστε βέβαιοι οτι θέλετε να επιστραφεί η πληρωμή;';

$_['text_empty_refund']         = 'Παρακαλώ εισάγετε το ποσό που θέλετε να επιστραφεί';
$_['text_empty_capture']        = 'Παρακαλώ εισάγετε το ποσό που θέλετε να δεσμεύσετε';

$_['btn_refund']                = 'Επιστροφή Χρημάτων';
$_['btn_capture']               = 'Δέσμευση Χρημάτων';

// Validation Error codes
$_['text_card_message_V6000']   = 'Άγνωστο σφάλμα επικύρωσης';
$_['text_card_message_V6001']   = 'Μη έγκυρη IP πελάτη';
$_['text_card_message_V6002']   = 'Μη έγκυρο DeviceID';
$_['text_card_message_V6011']   = 'Μη έγκυρο ποσό';
$_['text_card_message_V6012']   = 'Μη έγκυρη περιγραφή τιμολογίου';
$_['text_card_message_V6013']   = 'Μη έγκυρος αριθμός τιμολογίου';
$_['text_card_message_V6014']   = 'Μη έγκυρος αριθμός αναφοράς τιμολόγιου';
$_['text_card_message_V6015']   = 'Μη έγκυρος κωδικός νομίσματος';
$_['text_card_message_V6016']   = 'Απαιτείται πληρωμή';
$_['text_card_message_V6017']   = 'Απαιτείται ο κωδικός πληρωμής νομίσματος';
$_['text_card_message_V6018']   = 'Άγνωστος κωδικός πληρωμής νομίσματος';
$_['text_card_message_V6021']   = 'Απαιτείται το όνομα του κατόχου της κάρτας';
$_['text_card_message_V6022']   = 'Απαιτείται ο αριθμός κάρτας';
$_['text_card_message_V6023']   = 'Απαιτείται ο αριθμός CVN';
$_['text_card_message_V6031']   = 'Μη έγκυρος αριθμός κάρτας';
$_['text_card_message_V6032']   = 'Μη έγκυρος αριθμός CVN';
$_['text_card_message_V6033']   = 'Μη έγκυρη ημερομηνία λήξης';
$_['text_card_message_V6034']   = 'Μη έγκυρος αριθμός έκδοσης';
$_['text_card_message_V6035']   = 'Μη έγκυρη ημερομηνία έναρξης';
$_['text_card_message_V6036']   = 'Μη έγκυρος μήνας';
$_['text_card_message_V6037']   = 'Μη έγκυρο έτος';
$_['text_card_message_V6040']   = 'Μη έγκυρο αναγνωριστικό Token Πελατών';
$_['text_card_message_V6041']   = 'Απαιτείται πελάτης';
$_['text_card_message_V6042']   = 'Απαιτείται το όνομα πελάτη';
$_['text_card_message_V6043']   = 'Απαιτείται το επώνυμο του πελάτη';
$_['text_card_message_V6044']   = 'Απαιτείται ο κωδικός χώρας του πελάτη';
$_['text_card_message_V6045']   = 'Απαιτείται ο τίτλος του πελάτη';
$_['text_card_message_V6046']   = 'Απαιτείται ο αριθμός(ID) Token του πελάτη';
$_['text_card_message_V6047']   = 'Απαιτείται η ανακατεύθυνση URL';
$_['text_card_message_V6051']   = 'Μη έγκυρο όνομα';
$_['text_card_message_V6052']   = 'Μη έγκυρο επώνυμο';
$_['text_card_message_V6053']   = 'Μη έγκυρος κωδικός χώρας';
$_['text_card_message_V6054']   = 'Μη έγκυρο e-mail';
$_['text_card_message_V6055']   = 'Μη έγκυρο τηλέφωνο';
$_['text_card_message_V6056']   = 'Μη έγκυρο κινητό';
$_['text_card_message_V6057']   = 'Μη έγκυρο Fax';
$_['text_card_message_V6058']   = 'Μη έγκυρος τίτλος';
$_['text_card_message_V6059']   = 'Μη έγκυρη διεύθυνση URL ανακατεύθυνσης';
$_['text_card_message_V6060']   = 'Μη έγκυρη διεύθυνση URL ανακατεύθυνσης';
$_['text_card_message_V6061']   = 'Μη έγκυρη αναφορά';
$_['text_card_message_V6062']   = 'Μη έγκυρο όνομα εταιρείας';
$_['text_card_message_V6063']   = 'Μη έγκυρη περιγραφή θέσης εργασίας';
$_['text_card_message_V6064']   = 'Μη έγκυρη διεύθυνση 1';
$_['text_card_message_V6065']   = 'Μη έγκυρη διεύθυνση 2';
$_['text_card_message_V6066']   = 'Μη έγκυρη πόλη';
$_['text_card_message_V6067']   = 'Μη έγκυρη περιφέρεια';
$_['text_card_message_V6068']   = 'Μη έγκυρος Τ.Κ.';
$_['text_card_message_V6069']   = 'Μη έγκυρο e-mail';
$_['text_card_message_V6070']   = 'Μη έγκυρο τηλέφωνο';
$_['text_card_message_V6071']   = 'Μη έγκυρο κινητό';
$_['text_card_message_V6072']   = 'Μή έγκυρα σχόλια';
$_['text_card_message_V6073']   = 'Μη έγκυρο Fax';
$_['text_card_message_V6074']   = 'Μη έγκυρη Url';
$_['text_card_message_V6075']   = 'Μη έγκυρο όνομα διεύθυνσης αποστολής';
$_['text_card_message_V6076']   = 'Μη έγκυρο επώνυμο διεύθυνσης αποστολής';
$_['text_card_message_V6077']   = 'Μη έγκυρη διεύθυνση 1 αποστολής';
$_['text_card_message_V6078']   = 'Μη έγκυρη διεύθυνση 2 αποστολής';
$_['text_card_message_V6079']   = 'Μη έγκυρη πόλη διεύθυνσης αποστολής';
$_['text_card_message_V6080']   = 'Μη έγκυρη περιφέρεια διεύθυνσης αποστολής';
$_['text_card_message_V6081']   = 'Μη έγκυρος Τ.Κ διεύθυνσης αποστολής';
$_['text_card_message_V6082']   = 'Μη έγκυρο Email διεύθυνσης αποστολής';
$_['text_card_message_V6083']   = 'Μη έγκυρο τηλεφώνο διεύθυνσης αποστολής';
$_['text_card_message_V6084']   = 'Μη έγκυρη χώρα διεύθυνσης αποστολής';
$_['text_card_message_V6091']   = 'Άγνωστος κωδικός χώρας';
$_['text_card_message_V6100']   = 'Μη έγκυρο όνομα κάρτας';
$_['text_card_message_V6101']   = 'Μη έγκυρος μήνας λήξης της κάρτας';
$_['text_card_message_V6102']   = 'Μη έγκυρο έτος λήξης της κάρτας';
$_['text_card_message_V6103']   = 'Μη έγκυρος μήνας έναρξης της κάρτας';
$_['text_card_message_V6104']   = 'Μη έγκυρος χρόνος έναρξης της κάρτας';
$_['text_card_message_V6105']   = 'Μη έγκυρο έτος έκδοσης της κάρτας';
$_['text_card_message_V6106']   = 'Μη έγκυρος αριθμός CVN';
$_['text_card_message_V6107']   = 'Μη έγκυρος κωδικός πρόσβασης';
$_['text_card_message_V6108']   = 'Μη έγκυρη διεύθυνση πελάτη CustomerHostAddress';
$_['text_card_message_V6109']   = 'Μη έγκυρος UserAgent';
$_['text_card_message_V6110']   = 'Μη έγκυρος αριθμός κάρτας';
$_['text_card_message_V6111']   = 'Μη εξουσιοδοτημένη πρόσβαση API, ο λογαριασμός δεν είναι PCI πιστοποιημένος';
$_['text_card_message_V6112']   = 'Επιπλέον στοιχεία της κάρτας, εκτός από το έτος λήξης και μήνα';
$_['text_card_message_V6113']   = 'Μη έγκυρη συναλλαγή για επιστροφή';
$_['text_card_message_V6114']   = 'Σφάλμα επαλήθευσης Gateway';
$_['text_card_message_V6115']   = 'Μη έγκυρο αίτημα άμεσης επιστροφής χρημάτων (DirectRefundRequest), αριθμός(ID) συναλλαγής';
$_['text_card_message_V6116']   = 'Μη έγκυρα δεδομένα κάρτας στο αρχικό αναγνωριστικό συναλλαγής (TransactionID)';
$_['text_card_message_V6124']   = 'Μη έγκυρα στοιχεία γραμμών. Τα στοιχεία έχουν δοθεί αλλά τα σύνολα δεν ταιριάζουν στο πεδίο συνολικό ποσό';
$_['text_card_message_V6125']   = 'Δεν έχει ενεργοποιηθεί ο επιλεγμένος τύπος πληρωμής';
$_['text_card_message_V6126']   = 'Λάθος κρυπτογράφησης του αριθμού της κάρτας, η αποκρυπτογράφηση απέτυχε';
$_['text_card_message_V6127']   = 'Μη έγκυρο κρυπτογραφημένο CVN, η αποκρυπτογράφηση απέτυχε';
$_['text_card_message_V6128']   = 'Μη έγκυρη μέθοδος τύπου πληρωμής';
$_['text_card_message_V6129']   = 'Η συναλλαγή δεν έχει εγκριθεί για δέσμευση/ακύρωση';
$_['text_card_message_V6130']   = 'Γενικό σφάλμα πληροφορίας πελάτη';
$_['text_card_message_V6131']   = 'Γενικό σφάλμα πληροφορίας διεύθυνσης αποστολής πελάτη';
$_['text_card_message_V6132']   = 'Η συναλλαγή έχει ήδη ολοκληρωθεί ή ακυρωθεί, η ενέργεια δεν επιτρέπεται';
$_['text_card_message_V6133']   = 'Η ολοκλήρωση αγοράς δεν είναι διαθέσιμη για τον τύπο πληρωμής';
$_['text_card_message_V6134']   = 'Μη έγκυρη άδεια συναλλαγής για δέσμευση/ακύρωση';
$_['text_card_message_V6135']   = 'Λάθος επεξεργασία επιστροφής χρημάτων PayPal';
$_['text_card_message_V6140']   = 'Ο λογαριασμός εμπόρου έχει ανασταλεί';
$_['text_card_message_V6141']   = 'Μη έγκυρα στοιχεία λογαριασμού PayPal ή υπογραφής API (signature)';
$_['text_card_message_V6142']   = 'Η έγκριση δεν είναι διαθέσιμη για τράπεζα/υποκατάστημα';
$_['text_card_message_V6150']   = 'Μη έγκυρο ποσό επιστροφής';
$_['text_card_message_V6151']   = 'Η επιστροφή χρημάτων είναι μεγαλύτερη από την αρχική συναλλαγή';
$_['text_card_message_D4406']   = 'Άγνωστο σφάλμα';
$_['text_card_message_S5010']   = 'Άγνωστο σφάλμα';
