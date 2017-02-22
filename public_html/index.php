<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<!--Bootstrap Stylesheet from CDN-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" />
		<!--My Custom CSS stylesheet @author Noel Cothren ---->
		<link rel="stylesheet" href="styles/frontend-styles.css" />
		<!--Bootstrap jQuery and Javascript--->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<title>Noel Develops</title>
	</head>

	<body>
		<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" id="logo" href="#">NOEL < <span class="fa fa-magic"></span> > DEVELOPS</span></a>
			</div>

			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="navbar-left"><a href="#">Home</a></li>
					<li class="navbar-left"><a href="#about">About</a></li>
					<li class="navbar-left"><a href="#skills">Skills</a></li>
					<li class="navbar-right"><a href="#portfolio">Portfolio</a></li>
					<li class="navbar-right"><a href="#links">Links</a></li>
					<li class="navbar-right"><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</nav>
		</div>
		<container class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-xs-12 col-md-5" id="welcome">
				<div class="content">
					<div class="table">
						<div class="table-cell">
							<p>Welcome!</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-3 col-md-3" id="about">
					<div class="content">
						<div class="table">
							<div class="table-cell">
								<p>About</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3" id="contact">
					<div class="content">
						<div class="table">
							<div class="table-cell">
								<p>Contact Me</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-3 col-md-6" id="skills">
					<div class="content">
						<div class="table">
							<div class="table-cell">
								<p>Skills</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 col-md-6" id="portfolio">
						<div class="content">
							<div class="table">
								<div class="table-cell">
									<p>Work & Play</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- row inside row-->

			<div class="col-md-1"></div>
		</div>
		</container>
	</body>
</html>