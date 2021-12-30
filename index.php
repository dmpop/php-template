<?php
$theme = "light";
$title = "Template";
$footer = "I really 💚 <a href='https://www.paypal.com/paypalme/dmpop'>coffee</a>";
?>

<!DOCTYPE html>
<html lang="en" data-theme="<?php echo $theme; ?>">

<!-- Author: Dmitri Popov, dmpop@linux.com
	 License: GPLv3 https://www.gnu.org/licenses/gpl-3.0.txt -->

<head>
	<title><?php echo $title; ?></title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/classless.css" />
	<link rel="stylesheet" href="css/themes.css" />
	<!-- Suppress form re-submit prompt on refresh -->
	<script>
		if (window.history.replaceState) {
			window.history.replaceState(null, null, window.location.href);
		}
	</script>

	<!-- Switch theme START -->
	<script>
		function switchTheme(el) {
			document.documentElement.setAttribute('data-theme', el.value)
		}

		function switchCSS(cssid, el) {
			document.getElementById(cssid).href = el.value;
		}

		function addFontSize(addPx) {
			html = document.querySelector('html');
			currentSize = parseFloat(window.getComputedStyle(html, null)
				.getPropertyValue('font-size'));
			html.style.fontSize = (currentSize + addPx) + 'px';
		}

		function toggleDarkMode(el) {
			var theme = 'light'
			if (el.innerText == '☪') {
				el.innerText = '☀';
				theme = 'dark';
			} else {
				el.innerText = '☪';
			}
			document.documentElement.setAttribute('data-theme', theme)
		}
	</script>
	<!-- Switch theme END -->
</head>

<body>
	<div class="card text-center">
		<div style="margin-top: 1em; margin-bottom: 1em;">
			<img style="display: inline; height: 2.5em; vertical-align: middle;" src="favicon.svg" alt="logo" />
			<h1 style="display: inline; margin-top: 0em; vertical-align: middle; letter-spacing: 3px; color: #33cc33;"><?php echo $title; ?></h1>
		</div>
		<hr style="margin-bottom: 2em;">
		<p>
			Text and PHP code goes here.
		</p>
		<!-- Switch theme START -->
		<p>Switch theme:
			<select id="theme" onchange="switchTheme(this)">
				<option value="light">Light</option>
				<option value="dark">Dark</option>
				<option value="sepia">Sepia</option>
				<option value="milligram">Milligram</option>
				<option value="pure">Pure</option>
				<option value="sakura">Sakura</option>
				<option value="skeleton">Skeleton</option>
				<option value="bootstrap">Bootstrap</option>
				<option value="medium">Medium</option>
				<option value="tufte">Tufte</option>
			</select>
		</p>
		<!-- Switch theme END -->
	</div>
	<div class="text-center">
		<?php echo $footer; ?>
	</div>
</body>

</html>