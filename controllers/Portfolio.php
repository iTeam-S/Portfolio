<?php
	require("./core/Data.php");

	require("./views/post.php");

	if(!empty($_POST)):
		require "./models/mail_model.php";
	endif;
?>

