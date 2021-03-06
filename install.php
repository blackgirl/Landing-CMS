<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getPerms($path)
{
	return substr( sprintf( '%o', fileperms($path) ), -3 );
}

$db = array(
	'cms/_db/password.php',
	'cms/_db/private.php',
	'cms/_db/public.php'
);

$upload = array(
	'web/_cms/uploads/tinymce/source',
	'web/_cms/uploads/tinymce/thumbs'
);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Landing CMS</title>
	<meta charset="utf-8">
	<meta name='HandheldFriendly' content='True'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/web/_cms/css/main.css">
	<link rel="stylesheet" href="/web/_cms/css/bootstrap.min.css">
	<script src="/web/_cms/js/main.js"></script>
	<meta name='copyright' content='Landing CMS'>
	<meta name="description" content="Free CMS for Landing">
	<meta name="keywords" content="CMS, Landing, Free">
	<meta name="author" content="Ilia Chernykh">
	<meta name="generator" content="Landing CMS 0.0.1" />
</head>
<body>

<!-- HEADER begin -->
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="collapsed navbar-toggle" onclick="collapseMenu();">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="/cms/" class="navbar-brand">Landing CMS</a>
			</div>
			<div class="collapse navbar-collapse" id="js_collapse">
				<ul class="right nav navbar-nav">
					<li>
						<a href="/" target="_blank">Website</a>
					</li>
					<li>
						<a href="https://github.com/Elias-Black/Landing-CMS" target="_blank">About CMS</a>
					</li>
					<li>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" class="donate-btn">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="hosted_button_id" value="QGKZW29YXRDCL">
							<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online! | Press the button to donate for Landing CMS">
						</form>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<!-- HEADER end -->

<!-- MAIN begin -->
	<div class="container">
		<div class="row">
			<h2>Database permissions</h2>

			<p>You need to set 666 permissions for this files:</p>

			<?php foreach ($db as $file): ?>

				<h5>

					<?php if(getPerms($file) == 666): ?>

						<span class="label label-success">YES</span>

					<?php else: ?>

						<span class="label label-danger">NO</span>

					<?php endif; ?>

					<?php echo $file; ?>

				</h5>

			<?php endforeach; ?>

			<h2>Uploads permissions</h2>

			<p>You need to set 777 permissions for this folders:</p>

			<?php foreach ($upload as $folder): ?>

				<h5>

					<?php if(getPerms($folder) == 777): ?>

						<span class="label label-success">YES</span>

					<?php else: ?>

						<span class="label label-danger">NO</span>

					<?php endif; ?>

					<?php echo $folder; ?>

				</h5>

			<?php endforeach; ?>

		</div>
	</div>
<!-- MAIN end -->

<!-- FOOTER begin -->
	<footer class="navbar navbar-default navbar-fixed-bottom">
		<div class="container">
			<div class="col-sm-12 text-center navbar-text">
				2017 &copy; Landing CMS
			</div>
		</div>
	</footer>
<!-- FOOTER end -->

</body>
</html>