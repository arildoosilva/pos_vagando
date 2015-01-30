<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vagando.com</title>
    </head>
	<body>
    <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="download.php">Aplicativos</a></li>
				</ul>
				<form role="search" class="navbar-form navbar-right">
					<div class="form-group">
					<input type="text" placeholder="Pesquisar" class="form-control">&nbsp;<span class="glyphicon glyphicon-search"></span>
					</div>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Cadastro <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="cad_estacionamento.php">Estacionamento</a></li>
                            <li><a href="cad_motorista.php">Motorista</a></li>
                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Login <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="login_estacionamento.php">Estacionamento</a></li>
                            <li><a href="login_motorista.php">Motorista</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>