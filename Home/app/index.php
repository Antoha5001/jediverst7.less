<!Doctype html>
<html lang="ru">
<head>
	<meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta property="og:image" content="path/to/image.jpg">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/mystyle.min.css">
<!--    <link rel="stylesheet" type="text/css" href="scss/bootstrap.min.css">-->
    <title></title>

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
	body {
		font-size: 16px;
	}

	html {
	}
	.flex1{
		background: #00bbff;
	}
	.block{
		/*width: 60px;*/
		/*height: 60px;*/
		border: 1px solid gray;
	}
	.block p{
		line-height: 16px;
	}
	.block-green{
		width: 10px;
		height: 10px;
		background: green;
	}
</style>
</head>
<body>
  <div class="container"  style="border: 1px solid black">
    <div class="row">
      <div class="col col-lg-2" style="border: 1px solid black">
		  <div class="d-flex flex1">123</div>
    	<p>Lorem ipsum dolor sit amet.</p></div>
      <div class="col col-lg-6 d-flex justify-content-between" style="border: 1px solid black">
		  <div class="block d-flex justify-content-center align-items-center"><div class="block-green"></div></div>
		  <div class="block"><p>2</p></div>
		  <div class="block"><p>3</p></div>
		  <div class="block"><p>4</p></div>
	  </div>
    </div>
  </div>

<!--<script type="text/javascript" src="script/bootstrap.min.js"></script>-->
<script type="text/javascript" src="script/scripts.min.js"></script>
<!-- <script>window.jQuery || document.write('<script src="script/jquery.js"><\/script>')</script> -->
</body>
</html>
