<?php include("includes/header.php"); ?>
<div class="content">
<div class="jumbo">
<h3>Looking for something for your project or business? Drop me a line!</h3>
<br>
<form action="mailer.php" method="POST">
<div class="left">
  <input id="name" name="user[first" size="30" type="text" placeholder="First Name" />
</div>
<div class="left">
  <input id="email" name="user[email]" size="30" type="email" placeholder="Email Address" />
</div>
<br>
<div class="left">
 <textarea name="message" placeholder="How can I help you?"></textarea>
 </div>
<br>
<input type="submit" value="Submit">
</form>
<?php include("includes/footer.php"); ?>
</div>
</div>