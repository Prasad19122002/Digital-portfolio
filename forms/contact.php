<?php

    $receiving_email_address = 'prasadc1912@gmail.com';
    
      if( file_exists($php_email_form = '/assets/vendor/php-email-form/php-email-form.php' )) {
        include( $php_email_form );
      } else {
        die( 'Coming Soon!');
      }
    
      $contact = new PHP_Email_Form;
      $contact->ajax = true;
      
      $contact->to = $receiving_email_address;
      $contact->from_name = $_POST['name'];
      $contact->from_email = $_POST['email'];
      $contact->subject = $_POST['subject'];

      $contact->smtp = array(
        'host' => 'prasadc1912@gmail.com',
        'username' => 'prasadc1912@gmail.com',
        'password' => 'empe sefr lpug swga',
        'port' => '587'
      );
      */
    
      $contact->add_message( $_POST['name'], 'From');
      $contact->add_message( $_POST['email'], 'Email');
      $contact->add_message( $_POST['message'], 'Message', 10);
    
      echo $contact->send();
    ?>
