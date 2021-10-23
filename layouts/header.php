<?php include('env.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?php echo($short_name); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php
		include('includes/styles.php');
	?>
</head>

<body>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous"
		src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=2000489156634975&autoLogAppEvents=1"
        nonce="hcpdBnxc"></script>
        
    <?php
        include('layouts/nav.php');
    ?>