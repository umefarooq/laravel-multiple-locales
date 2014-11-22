<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			position: absolute;
			left: 50%;
			padding-bottom:20px;
			margin-left: -150px;
			padding-top:20px;
			text-align:justify;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}

		menu { padding:0; }
		menu ul {
			list-style: none;
			padding:0;
		}
		menu li { display:inline-block; }
	</style>
</head>
<body>
	<menu class='language_switcher'>
		<ul>
			<?php foreach (Config::get('app.locales') as $locale => $language): ?>
			<li class='<?= $locale == App::getLocale() ? 'current' : '' ?>'>
				<a href='<?= url(sprintf($changeLocaleUrl, $locale)) ?>'><img src='<?= url('img/country/'. $locale . '.gif') ?>' /></a>
			</li>
			<?php endforeach; ?>
		</ul>
	</menu>
	<div class="welcome">
		<a href='<?= route('index'); ?>'><?= trans('locale.go_back'); ?></a><br />
		<br />
		<?= nl2br(trans('locale.welcome')); ?>
	</div>
</body>
</html>
