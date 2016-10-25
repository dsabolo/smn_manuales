<?php
  $vid = (isset($_GET['vid']))?$_GET['vid']:'login_logout';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Instructivos Portal SMN</title>

    <meta name="author" content="Diego Sabolo">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Instructivos Portal SMN</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="active">
							<a href="?vid=login_logout">Login y Logout</a>
						</li>

						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Capacitación<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="?vid=capacitaciones_ABM">Creación y edición de contenidos</a>
								</li>
								<li>
									<a href="?vid=capacitaciones_webforms">Formularios</a>
								</li>

							</ul>
						</li>
            <li>
							<a href="?vid=admin_functions">Administración</a>
						</li>
					</ul>


				</div>

			</nav>
		</div>
	</div>



</div>



  <div id="videoContainer">
    <object id="flashcontent" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1425px" height="850px"
  <param name="movie" value="videos/<?php echo $vid;?>.swf" />
  <param name="scale" value="showAll" />
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="videos/<?php echo $vid;?>.swf"  width="1425px" height="850px">
  <param name="scale" value="showAll" />
  <!--<![endif]-->
    <p>Please update your Flash Player</p>
  <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>

</div>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
