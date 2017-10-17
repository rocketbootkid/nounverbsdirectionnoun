<html>
    <head>
        <title>A tester [verbs] into a [noun]...</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			a { text-decoration:none; }
			#content {
				position: absolute;
				width: 700px;
				font-family: Georgia;
				font-size: 50px;
				font-color: black;
				z-Index: 500;
				top: 200px;
				text-align: center;
			}
		</style>
    </head>
    <body>
		<div id="content">
			<?php
				include ('bin/Inflect.php');
				test();
			?>
		</div>
		<canvas id="myCanvas" width="2000" height="1000"></canvas>
		<script src="js/background.js"></script>
		<script src="script.js"></script>
    </body>
</html>