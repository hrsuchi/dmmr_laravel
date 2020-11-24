@php
  $lang = app("App\Http\Controllers\langs")->text();
@endphp

<!DOCTYPE HTML>
<html>
	<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150398148-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-150398148-1');
    </script>

		<title>Dos M&aacute;s Mexican Restaurant</title>
		<meta charset="utf-8" />
		<link rel='icon' href='{{asset("public/favicon.ico")}}' type='image/x-icon'/ >
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{asset("public/template/assets/css/main.css")}}" />
    <link rel="stylesheet" href="{{asset("public/dist/css/plugins.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/dist/css/main.min.css")}}">
	</head>
	<body class="landing">
    <!-- Header -->
			<header id="header" class="alt">
				{{--<h1><a href="index.html"></a></h1>
				<a href="#nav">Menu</a>--}}
				{!! $lang["changelang"] !!}
			</header>

		<!-- Nav -->
			{{--<nav id="nav">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav>--}}
