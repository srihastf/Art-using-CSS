<!DOCTYPE html>
<html>
<head>
	<title>Pixel Heart</title>

	<style type="text/css">
		.pixel-block{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			width: 6em;
			height: 5em;
		}

		.pixelized--heart{
			display: block;
			width: 1em;
			height: 1em;
			box-shadow: 
				1em 0em #F22613,
				2em 0em #F22613,
				4em 0em #F22613,
				5em 0em #F22613,

				0em 1em #F22613,
				1em 1em #F22613,
				2em 1em #F22613,
				3em 1em #F22613,
				4em 1em #F22613,
				5em 1em #F22613,
				6em 1em #F22613,

				0em 2em #F22613,
				1em 2em #F22613,
				2em 2em #F22613,
				3em 2em #F22613,
				4em	2em #F22613,
				5em 2em #F22613,
				6em 2em #F22613,

				1em 3em #F22613,
				2em 3em #F22613,
				3em 3em #F22613,
				4em 3em #F22613,
				5em 3em #F22613,

				2em 4em #F22613,
				3em 4em #F22613,
				4em 4em #F22613,

				3em 5em #F22613;
		}

		body{
			background-color: #F1A9A0;
		}



	</style>

</head>
<body>

	<div class="pixel-block">
		<div class="pixelized--heart">
			
		</div>
	</div>

</body>
</html>

<!-- https://medium.com/@araltasher/create-pixel-art-using-css-part-1-ebc9ca2f034 -->