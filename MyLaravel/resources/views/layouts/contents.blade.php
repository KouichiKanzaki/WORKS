<!DOCTYPE html>
<html lang="ja">
<head>
	@yield('head')
</head>
<body>
<div class="container-fruid">
	<header class="row fixed-top">
	@yield('header')
	</header>
	<div id="works" class="pagebox">
	@yield('works')
	</div>
	<div id="request" class="pagebox">
	@yield('request')
	</div>
	<div id="skill" class="pagebox">
	@yield('skill')
	</div>
	<div id="contact" class="pagebox">
	@yield('contact')
	</div>
</div>
</body>
	@yield('javascript')
</html>