<?php
// Text
$_['text_new_card']                     = '+ Προσθήκη νέας κάρτας';
$_['text_loading']                      = 'Φόρτωση... Παρακαλώ περιμένετε...';
$_['text_card_details']                 = 'Στοιχεία Κάρτας';
$_['text_saved_card']                   = 'Χρήση Αποθηκευμένης Κάρτας:';
$_['text_card_ends_in']                 = 'Πληρωμή με την υπάρχουσα κάρτα %s που λήγει σε XXXX XXXX XXXX %s';
$_['text_card_number']                  = 'Αριθμός Κάρτας:';
$_['text_card_expiry']                  = 'Λήξη κάρτας (ΜΜ/ΕΕ):';
$_['text_card_cvc']                     = 'Κωδικός Ασφαλείας Κάρτας (CVC):';
$_['text_card_zip']                     = 'Ταχυδρομικός Κώδικας Κάρτας:';
$_['text_card_save']                    = 'Αποθήκευση κάρτας για μελλοντική χρήση;';
$_['text_trial']                        = '%s κάθε %s %s για %s πληρωμές και στη συνέχεια ';
$_['text_recurring']                    = '%s κάθε %s %s';
$_['text_length']                       = ' για %s πληρωμές';
$_['text_cron_subject']                 = 'Σύνοψη Square CRON job';
$_['text_cron_message']                 = 'Ακολουθεί λίστα με όλες τις εργασίες CRON που εκτελούνται από την επέκταση Square:';
$_['text_squareup_profile_suspended']   = ' Οι επαναλαμβανόμενες πληρωμές σας έχουν ανασταλεί. Παρακαλούμε επικοινωνήστε μαζί μας για περισσότερες λεπτομέρειες.';
$_['text_squareup_trial_expired']       = ' Η δοκιμαστική σας περίοδος έχει λήξει.';
$_['text_squareup_recurring_expired']   = ' Οι επαναλαμβανόμενες πληρωμές σας έχουν λήξει. Αυτή ήταν η τελευταία σας πληρωμή.';
$_['text_cron_summary_token_heading']   = 'Ανανέωση του αναγνωριστικού πρόσβασης (token):';
$_['text_cron_summary_token_updated']   = 'Το αναγνωριστικό πρόσβασης (token) έχει ενημερωθεί με επιτυχία!';
$_['text_cron_summary_error_heading']   = 'Σφάλματα Συναλλαγών:';
$_['text_cron_summary_fail_heading']    = 'Αποτυχημένες συναλλαγές (προφίλ που έχουν ανασταλεί):';
$_['text_cron_summary_success_heading'] = 'Επιτυχείς συναλλαγές:';
$_['text_cron_fail_charge']             = 'Το προφίλ <strong>#%s</strong> δεν μπορεί να χρεωθεί με <strong>%s</strong>';
$_['text_cron_success_charge']          = 'Το προφίλ <strong>#%s</strong> χρεώθηκε με <strong>%s</strong>';
$_['text_card_placeholder']             = 'XXXX XXXX XXXX XXXX';
$_['text_cvv']                          = 'CVV';
$_['text_expiry']                       = 'ΜΜ/ΕΕ';
$_['text_default_squareup_name']        = 'Πιστωτική / Χρεωστική Κάρτα';
$_['text_token_issue_customer_error']   = 'Αντιμετωπίζουμε τεχνικό πρόβλημα στο σύστημα πληρωμών μας. Παρακαλώ δοκιμάστε ξανά αργότερα.';
$_['text_token_revoked_subject']        = 'Το αναγνωριστικό πρόσβασης (token) Square έχει ανακληθεί!';
$_['text_token_revoked_message']        = "Η πρόσβαση της επέκτασης πληρωμής Square στον Square λογαριασμό σας έχει ανακληθεί μέσω του πίνακα ελέγχου Square Dashboard. Πρέπει να επαληθεύσετε τα στοιχεία πρόσβασης της επέκτασης σας στις ρυθμίσεις της επέκτασης και να συνδεθείτε ξανά.";
$_['text_token_expired_subject']        = 'Το αναγνωριστικό πρόσβασης (token) στο Square έχει λήξει!';
$_['text_token_expired_message']        = "Το αναγνωριστικό πρόσβασης (token) της επέκτασης πληρωμής  Square με το οποίο συνδέεται στον λογαριασμό σας στο Square έχει λήξει. Πρέπει να επαληθεύσετε τα στοιχεία σύνδεσης της επέκτασης σας και την εργασία CRON στις ρυθμίσεις της επέκτασης και να συνδεθείτε ξανά.";

// Error
$_['error_browser_not_supported']       = 'Σφάλμα: Το σύστημα πληρωμών δεν υποστηρίζει πλέον τον browser σας. Παρακαλώ ενημερώστε ή χρησιμοποιήστε διαφορετικό.';
$_['error_card_invalid']                = 'Σφάλμα: Η κάρτα δεν είναι έγκυρη!';
$_['error_squareup_cron_token']         = 'Σφάλμα: Δεν ήταν δυνατή η ανανέωση του αναγνωριστικού πρόσβασης (token). Παρακαλώ συνδέστε την επέκταση πληρωμής Square μέσω του πίνακα διαχείρισης του OpenCart.';

// Warning
$_['warning_test_mode']                 = 'Ειδοποίηση: Η λειτουργία Sandbox είναι ενεργοποιημένη! Οι συναλλαγές θα εμφανίζονται, αλλά δε θα πραγματοποιούνται χρεώσεις.';

// Statuses
$_['squareup_status_comment_authorized']    = 'Η συναλλαγή με κάρτα έχει εξουσιοδοτηθεί αλλά δεν έχει ακόμα δεσμευτεί.';
$_['squareup_status_comment_captured']      = 'Η συναλλαγή στην κάρτα εγκρίθηκε και στη συνέχεια δεσμεύτηκε (δηλ. ολοκληρώθηκε).';
$_['squareup_status_comment_voided']        = 'Η συναλλαγή με κάρτα εγκρίθηκε και στη συνέχεια ακυρώθηκε (δηλ. ακυρώθηκε).   ';
$_['squareup_status_comment_failed']        = 'Η συναλλαγή στην κάρτα απέτυχε.';

// Override errors
$_['squareup_override_error_billing_address.country']       = 'Η χώρα διεύθυνσης πληρωμής δεν είναι έγκυρη. Παρακαλώ τροποποιήστε την και δοκιμάστε ξανά.';
$_['squareup_override_error_shipping_address.country']      = 'Η χώρα διεύθυνσης αποστολής δεν είναι έγκυρη. Παρακαλώ τροποποιήστε την και δοκιμάστε ξανά.';
$_['squareup_override_error_email_address']                 = 'Η διεύθυνση e-mail πελάτη δεν είναι έγκυρη. Παρακαλώ τροποποιήστε την και δοκιμάστε ξανά.';
$_['squareup_override_error_phone_number']                  = 'Ο αριθμός τηλεφώνου πελάτη δεν είναι έγκυρος. Παρακαλώ τροποποιήστε τον και δοκιμάστε ξανά.';
$_['squareup_error_field']                                  = ' Πεδίο: %s';
