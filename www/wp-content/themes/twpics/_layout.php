<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo GitWordPressLayout::$Viewbag['sTitle'] ?></title>
<link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body>
	<div id="wrapper"
		class="<?php echo GitWordPressLayout::$Viewbag['sPage'] ?>">
		<div id="header">
			<div id="access" role="navigation">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle"
								data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span> <span
									class="icon-bar"></span> <span class="icon-bar"></span> <span
									class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="<?php echo home_url(); ?>">Theatre Woodstock Photo Archive</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
			

   						<?php BootStrapMenusPlugin::displayMenu ();?>

				
				</nav>
			</div>
			<!-- #access -->
			<h1 class="hidden-xs"><?php echo GitWordPressLayout::$Viewbag['sTitle'] ?></h1>
		</div>
<?php GitWordPressLayout::renderBody(); ?>
<div id="delimiter"></div>
		<div id="footer">
			<p>&copy;2014</p>
		</div>
	</div>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>