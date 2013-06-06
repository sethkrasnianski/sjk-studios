<section id="contact" style="margin-top:0px;">
	<div class="textCenter">
		<h1 class="georgia">Contact<span class="p">.</span></h1>
	</div>
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