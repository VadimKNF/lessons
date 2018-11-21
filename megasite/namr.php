<form action="" method="GET">
    <input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
    <textarea name="message">
		<?php if (isset($_GET['message'])) echo $_GET['message']; ?>
	</textarea>
    <input type="submit">
</form>