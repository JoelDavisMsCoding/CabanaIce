		<?php
			include("nav.php");
		?>
	
  
<hr>


<h1>Contact</h1>
<div id="block">
<h2 class="email">Email Us</h2>

<div id="par2">
<p>We love hearing from our customers! If you have any questions, concerns, or if you'd just like to say hi, fill out the form below.</p>
</div>

<div id="form">
<form action="contact.php" method="POST">
	
	<div id="message"><label>Email</label>:</div><div id="text"><input type="text" name="email" placeholder="example@example.com"></input></div> <br>
	<div id="message"><label>Message</label>:</div><div id="text"><textarea name="comments" columns="20" rows="10" placeholder="Type comments here"></textarea></div></br>
    	<div id="submit"><input name="submit" type="submit"></input></div>
</form>
</div>
        
        <?php

$email = $_POST['email'];
$message = $_POST['comments'];
 
$to = 'jdavis76@dmail.dixie.edu';
$subject = 'Comment Form';
 
$body = "From: \n E-mail: $email\n Message: $message";
 
if ($_POST['submit']) {
	mail($to, $subject, $body);
	if (mail ($to,$subject,$body))
	{
		echo "Your Message has been sent";
	}
	else
	{
		echo "Please try again.";
	}
}
		?>

		

</div>
<h2 class="fright" >Visit Us</h2>
<div id="map">

<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
 src="https://maps.google.com/?ie=UTF8&amp;ll=37.106413,-113.583409&amp;spn=0.003414,0.003449&amp;t=m&amp;z=18&amp;layer=c&amp;cbll=37.106516,-113.584412&amp;cbp=12,358.0800365559549,,0,0&amp;source=embed&amp;output=svembed"></iframe><br /><small> <h2><a href="https://maps.google.com/?ie=UTF8&amp;ll=37.106413,-113.583409&amp;spn=0.003414,0.003449&amp;t=m&amp;z=18&amp;layer=c&amp;cbll=37.106516,-113.584412&amp;cbp=12,358.0800365559549,,0,0&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>

</div>

<br>
		<?php
			include("footer.php");
		?>