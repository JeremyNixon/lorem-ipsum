<!doctype html>

<html>
<head>
	@yield('title')
	@section('head')
	<link rel='stylesheet' type='text' href="{{URL::asset('/style.css')}}">
	@show
</head>
<body>
	<div id="header">
		<ul id="navlist">
			<li><a href="#">Link One<a/></li>
			<li><a href="#">Link Two</a></li>
			<li><a href="#">Link Three</a></li>
			<li><a href="#">Link One</a></li>
		</ul>
	</div>
	<div id='container'>
		@yield('body')
	</div>
</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58445831-1', 'auto');
  ga('send', 'pageview');

</script>
</html>