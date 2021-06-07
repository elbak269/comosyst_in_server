<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php getTitle();   ?></title>
	<link rel="stylesheet" type="text/css" href="theme/./slick/slick.css">
	<link rel="stylesheet" type="text/css" href="theme/./slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="theme/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="theme/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="theme/css/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="theme/css/main.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
	<link rel="stylesheet" type="text/css" href="theme/css/jquery.selectBoxIt.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Recursive:wght@500&display=swap" rel="stylesheet">
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

	<!--
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js" ></script>
	  -->
	 <link href="theme/image/LOGO.svg" rel="icon" type="image/png" />
   <?php
 	if (isset($normalize_css)) {
 			echo '	<link rel="stylesheet" type="text/css" href="theme/css/normalize.css">';
 	}
  if (isset($index)) {
      echo '	<link rel="stylesheet" type="text/css" href="theme/css/index.css">';
  }

	if (isset($about_css)) {
			echo '	<link rel="stylesheet" type="text/css" href="theme/css/about.css">';
	}

	if (isset($contact_us_css)) {
			echo '	<link rel="stylesheet" type="text/css" href="theme/css/contact.css">';
	}

	if (isset($serve_css)) {
			echo '	<link rel="stylesheet" type="text/css" href="theme/css/serve.css">';
	}
	if (isset($info_produt)) {
		echo '	<link rel="stylesheet" type="text/css" href="theme/css/info_prd.css">';

	}

  ?>
