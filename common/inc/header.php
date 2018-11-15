<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $metaDesc; ?>" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#000000">
		<link rel="stylesheet" href="/common/css/main.css"/>

		<script src="/common/js/vendor/jquery.min.js"></script>
        <script src="/common/js/main.min.js"></script>
	</head>

<body <?php echo ($bodyClass) ? ' class="' . $bodyClass . '"' : ''; ?>>	
		
		<div class="main">

			<?php include($_SERVER['DOCUMENT_ROOT'] . '/common/inc/navigation.php'); ?>
	
			<div class="content">
