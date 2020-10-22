<?php
$to = 'andnov24@yahoo.com';
$subject = 'Hello';
$message = 'Hi';
$from = 'acnoviello23@lawrenceville.org';

 Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>