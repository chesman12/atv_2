
<?php

if(!isset($_SESSION))	session_start();

include('inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PetShop Online</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>

		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="themes/js/superfish.js"></script>
		<script src="themes/js/jquery.scrolltotop.js"></script>

	</head>
    <body>
			<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">
					<a href="index.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<div>
								<form action="verifica_usuario.php" method="post" name="" id="">
										<br />
										<label>Login:<input type="text" required name="login" class="input-small"/>
										Senha:<input type="password" required name="senha" class="input-small"/><br />

										<input type="submit" name="Submit" value="Enviar" class="btn btn-warning"/ >
										<a href="formulario_senha_perdida.html" >Não lembra a  sua senha?</a>
										</form>

						 </div>

							<li><a href="index.php">Início</a></li>
							<li><a href="products.php">Produtos</a>
								<ul>
									<li><a href="products.php">Produtos</a></li>
								</ul>
							</li>
							<li><a href="about.php">A loja</a></li>
							<li><a href="contact.php">Contato</a></li>
							<li><a href="internal.php">Acesso interno</a></li>


						</ul>


					</nav>
				</div>
			</section>
			<section class="main-content">
				<div class="row">
          <?php

          echo "Bem vindo <strong>". $_SESSION['nome'] ." </strong>!<br />
          Você está acessando área restrita para usuários cadastrados!
          <br /><br />";

          echo "Seu nível de usuário é <strong>". $_SESSION['tipo']."</strong>.
          <br />Com esse nível, você tem permisão de acesso às
          seguintes áreas: <br /><br />";

          if ($_SESSION['tipo'] == 0){

          echo "- <strong>Forum</strong><br />Abrir tópicos, postar em tópicos
          de terceiros.<br /><br />";

          }

          if ($_SESSION['tipo'] == 1){

          echo "- <strong>Forum</strong><br />Administração -
          Acesso total <br /><br />";

          }

          /* Não colocarei representações para outros níveis de acesso, mas fica entendido que o
          limite de níveis de acesso quem define é você*/

          echo "<a href=\"logout.php\">Sair</a>";

          ?>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Institucional</h4>
						<ul class="nav">
							<li><a href="index.php">Início</a></li>
							<li><a href="about.php">A loja</a></li>
							<li><a href="contact.php">Contato</a></li>
							<li><a href="carrinho.php">Carrinho de Compras</a></li>
						</ul>
					</div>
                    <div class="span4"></div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Nossa loja online de produtos para o seu pet</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>
				</div>
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>
