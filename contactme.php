<?php include 'includes/header.php';?>


     
       
	<?php

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "dchiles@netiquette.news";  //place your/your client's email address here
        $toName = "David Chiles"; //place your client's name here
        $website = "Netiquette News";  //place NAME of your client's website

         loadContact('includes/simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
 
<?php include 'includes/footer.php';?>
