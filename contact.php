<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/php/functions.php'; ?>

<?php getHeader('Bellhouse Joseph - Lorem Ipsum', 'Lorm ipsum', 'page-home'); ?>
<form action="mail.php" method="POST">
<p>Name</p> <input type="text" name="name">
<p>Email</p> <input type="text" name="email">
<p>Message</p><textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>
<?php getFooter(); ?>