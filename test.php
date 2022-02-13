<?php

 
if(isset($_POST ['Submit'])){
    $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $address=$_POST['address'];
   $refferal=$_POST['refferal'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   $lice=$_POST['lice'];
   $date=$_POST['date'];
   $ninnumber=$_POST['ninnumber'];
   $lasdri=$_POST['lasdri'];
   $bname=$_POST['bname'];
   $accnumber=$_POST['accnumber'];
   $accname=$_POST['accname']; 

    $to='frankolayemi@gmail.com';
    $subject='Booking Submission';
    $message="firstname: ".$firstname. "\n"
	. "lastname: ".$lastname. "\n"
	. "address: ".$address. "\n"
	. "phone: ".$phone. "\n"
	. "lice: ".$lice. "\n"
	. "date: ".$date. "\n"
	. "ninnumber: ".$ninnumber. "\n"
	. "lasdri: ".$lasdri. "\n"
    . "bname: ".$bname. "\n"
    . "accnumber: ".$accnumber. "\n"
	."wrote the following: " ."\n\n" .$accname;
    $headers= "From: ".$email_from;



	if(!mail($to, $subject, $message, $headers)) {
		print "error";
    }else {
		print  "Registration Successful! for".$firstname;
    }
    


} // if submit redirect
    header("Location:index.html");





?>