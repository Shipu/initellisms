<?php

// Shipu Ahamed
// Fb/DeesheharaShipu
// shipuahamed.com

include 'IntelliSMS.php';

//Required php.ini settings:
// allow_url_fopen = On
// track_errors = On

$objIntelliSMS = new IntelliSMS();

//Set the Username and Password properties with your account details
$objIntelliSMS->Username = 'your_username';
$objIntelliSMS->Password = 'your_password';

$to_number = '8801616022666';
$msg ='hello';
$sender_id = '8801616022000';

// For Example $objIntelliSMS->SendMessage ( '8801616022000', 'Hello iNiLABS', '8801616022666' );
// For Multiple Numbers Send Sms: $objIntelliSMS->SendMessage ( '8801676661234,8801684761598,8801616022222', 'Hello iNiLABS', '8801616022666' );
// +88 is Bangladesh Country Code.
$objIntelliSMS->SendMessage ( '$to_number', '$msg', '$sender_id' );

?>
