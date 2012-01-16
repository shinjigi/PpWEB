<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>calculator</title>
	</head>
	<body></body>
	<script type="text/javascript" src="libraries/js/mootools-core-1.4.2_all.js"></script>
	<script type="text/javascript" src="libraries/js/mootools-more-1.4.0.1__more_all.js"></script>
	<script type="text/javascript">
		window.addEvent('domready', function() {
			var boxAnimation = new Fx.Tween($('box'));
			boxAnimation.start('margin-left', 550);

			boxAnimation.start('margin-left', 150).chain(function() {
				boxAnimation.start('width', 100);
			}).chain(function() {
				boxAnimation.start('width', 100);
			}).chain(function() {
				boxAnimation.start('opacity', 0);
			}).chain(function() {
				boxAnimation.start('opacity', 100);
			}).chain(function() {
				boxAnimation.start('margin-left', 0);
			});
		});

	</script>
	</head>
	<body>
		<div id="box" style="background-color: #00f; height:50px; border:dotted;
		width:50px;">
			&nbsp;
		</div>
	</body>
</html>
