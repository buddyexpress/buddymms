<?php
$message = new BMMS_APISTATS;
$message = $message->message($_GET['message']);
echo $message[0]['message'];