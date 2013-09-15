<?php

mailgun_init('key-757-cudz0w3c807fkvys81tlwsmnm1x3');

// Plain text message
/*MailgunMessage::send_text("user@matchbox10.mailgun.org", 
                          "'John Doe' <mark.simpson78@hotmail.co.uk>",
                          "Hello text PHP API!",
                          "Hi!\nI am sending a message using Mailgun PHP API");*/

// Plain text message + tag
/*MailgunMessage::send_text("user@matchbox10.mailgun.org", 
                          "'John Doe' <mark.simpson78@hotmail.co.uk>",
                          "Hello text PHP API + tag!",
                          "Hi!\nI am sending a message using Mailgun PHP API",
                          "",
                          array("headers" => array(MAILGUN_TAG => "sample_text_php")));*/

// MIME message
$rawMime = 
    "X-Priority: 1 (Highest)\n".
    "X-Mailgun-Tag: sample_raw_php\n".
    "Content-Type: text/plain;charset=UTF-8\n".    
    "From: user@matchbox10.mailgun.org\n".
    "To: mark.simpson78@hotmail.co.uk\n".
    "Subject: Hello raw PHP API!\n".
    "\n".
    "This message is sent by Mailgun PHP API";
MailgunMessage::send_raw("user@matchbox10.mailgun.org", "mark.simpson78@hotmail.co.uk", $rawMime); 

echo "Messages sent\n";

?>
