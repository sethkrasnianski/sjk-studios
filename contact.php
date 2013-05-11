<section id="contact" style="margin-top:0px;">
	<img src="images/contact_head.png" alt="SJK | Contact"/><br/>
	<?php echo nl2br($errors_required); ?>
	<?php echo nl2br($errors_email); ?>
	<form action="validate.php" method="post">
		<label>Name:</label> <input type="text" name="name"><br/>
		<label>E-mail:</label> <input type="text" name="email"><br/>
		<label>Company:</label> <input type="text" name="company"><br/>
		<div id="message">
			<label>Your Message:</label><textarea name="message" rows="5" cols="30"></textarea><br/>
		</div>
		<input type="submit" name="submit" value="Submit">
	</form>
</section>