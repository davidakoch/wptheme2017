<!DOCTYPE html>
<html>
<head>
	<title>
		<?php bloginfo('name'); ?> | 
		<?php is_front_page() ? bloginfo('description') : wp_title(); ?>	
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="wordpress theme">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"
	<?php wp_head(); ?>
</head>
	<body>
		<header>
			<nav id="top_header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 main_nav">
							<?php 
							$args = array(
								'theme_location' => 'footer'
							);	
							?>
							<?php wp_nav_menu(); ?>
							<!--<ul>
								<li><a>Home</a></li>
								<li><a>About Us</a></li>
								<li><a>Blog</a></li>
								<li><a>Contact Us</a></li>
								<li><a>Members</a></li>
								<li><a>Past Screenings</a></li>
								<li><a>Upcoming Screenings</a></li>
							</ul>-->
						</div>
						<div class="col-md-4">
							<ul>
								<li id="search">
									<form>
										<span class="glyphicon glyphicon-search"></span>
										<input type="search" name="search" placeholder="search" id="searchbox">
									</form>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</header>