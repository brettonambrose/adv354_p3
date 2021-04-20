<?php
// Brett wrote this mailer
header('refresh: 5; url=../contact.html');
echo "<link href='../css/master.css' rel='stylesheet'>";
    $sender = $_POST['yourname'];
    $reply = $_POST['youremail'];
    $refer = $_POST['refertype'];
    $message = $_POST['yourmessage'];

    $recipient = "adv354@brettonfry.com";
    $subject = "A new contact on adv354.brettonfry.com from $sender";
    $mailhead = "From: $reply \r\n";

    mail($recipient, $subject, $message, $mailhead)
        or die("Failed.");
    echo "<span class='heading'>Thank you for contacting us!</span>
        <p class='info'>You will be redirected back to the contact page in 5 seconds.<br>
        If redirection does not work, click <a href='../contact.html'>here</a>.</p>";
?>

