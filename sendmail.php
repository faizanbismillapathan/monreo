<?php
if($_REQUEST['xAction'] == "sendMail"){
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: <info@rocairporttaxi.com>' . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    
    $to = "riz1.ahamed@gmail.com";
    $subject = "Enquiry from website";
    $message = '
    <p><b>Your Name: </b>'.$_REQUEST['fullName'].'</p>
    <p><b>Your Email: </b>'.$_REQUEST['emailID'].'</p>
    <p><b>Mobile No.: </b>'.$_REQUEST['mobileNo'].'</p>
    <p><b>Date of Service: </b>'.$_REQUEST['flightDate'].'</p>
    <p><b>Piclup Time: </b>'.$_REQUEST['flightTime'].'</p>
    <p><b>Pickup Address: </b>'.$_REQUEST['pickupAddress'].'</p>
    <p><b>Special Request: </b>'.$_REQUEST['specialRequest'].'</p>
    ';
    
    if(mail($to,$subject,$message,$headers)){
        echo "OK";
    }else{
        echo "ERR";
    }
}else{
    echo "ERR";
}

?>
