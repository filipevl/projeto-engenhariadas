<?php 
	require '../../verifica.php';

	if(isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])) : ?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Engenhariadas 2020</title>
		<meta name="keywords" content="LEEMG, Engenhariadas" />
		<meta name="description" content="Sistema Web - Sistemas de gerenciamento de jogos do evento Engenharíadas Mineiro 2020">
		<meta name="author" content="Infoalto">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="../assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="../assets/vendor/morris/morris.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="../assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->

			<header class="header">
				<div class="logo-container">
					<a class="logo">
						<img src="../../images/43252089_1765515140219570_3689849392321265664_n.png" height="40" alt="Engenhariadas" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: user box -->
				<div class="header-right">
					<span class="separator"></span>
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="../../images/infoalto.png" alt="name" class="img-circle" data-lock-picture="../images/infoalto.png" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name"><?php echo $nomeUser; ?></span>
								<span class="role">Administrador</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
<!-- <li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> Meu Perfil</a>
								</li>
-->
								<li>
									<a role="menuitem" tabindex="-1" href="../logout.php"><i class="fa fa-power-off"></i> Sair</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- fim: header -->

			<div class="inner-wrapper">
				<!-- inicio: sidebar esquerdo -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Menu Principal
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="index.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
                                    </li>
                                    <li class="nav-active">
										<a href="paginas/validar-documento.html">
											<i class="fa" href=""aria-hidden="true"></i>
											<span>Validação de documentos</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="paginas/alterar-listagem.html">
											<i class="fa" href=""aria-hidden="true"></i>
											<span>Alteração em qualquer listagem</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="paginas/cadastrar-confrontos.html">
											<i class="fa" href=""aria-hidden="true"></i>
											<span>Cadastro de confrontos/chaveamento</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="paginas/cadastrar-locais.html">
											<i class="fa" href=""aria-hidden="true"></i>
											<span>Cadastros de locais</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="paginas/cadastrar-tempo-de-jogo.html">
											<i class="fa" href=""aria-hidden="true"></i>
											<span>Cadastros de tempo de jogos</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="paginas/alterar-tabelamento-sistema.html">
											<i class="fa" href=""aria-hidden="true"></i>
											<span>Alterações no tabelamento resultante do sistemas</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="paginas/alterar-pontos-ou-wo.html">
											<i class="fa" href=""aria-hidden="true"></i>
											<span>Alteração de pontos em um jogo ou aplicar W.O.</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="paginas/alterar-cadastro-atletica.html">
											<i class="fa" href=""aria-hidden="true"></i>
											<span>Alterações cadastrais das atléticas</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="paginas/alterar-modalidades.html">
											<i class="fa" href=""aria-hidden="true"></i>
											<span>Alterações modalidades</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<!-- Inicio da seção main(parte de exibição das paginas do painel) -->
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Painel de Controle</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Painel de Controle</span></li>
							</ol>
					
							<a class="sidebar-right-toggle"></a>
						</div>
					</header>
					<div class="row">
						<div class="col-md-6">
							<section class="panel">

                            </section>
						</div>
					</div>
				</section>
			</div>
		</section>

		<!-- Vendor -->
		<script src="../assets/vendor/jquery/jquery.js"></script>
		<script src="../assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="../assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="../assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="../assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="../assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="../assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="../assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="../assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="../assets/vendor/flot/jquery.flot.js"></script>
		<script src="../assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="../assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="../assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="../assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="../assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="../assets/vendor/raphael/raphael.js"></script>
		<script src="../assets/vendor/morris/morris.js"></script>
		<script src="../assets/vendor/gauge/gauge.js"></script>
		<script src="../assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="../assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="../assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="../assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="../assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="../assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="../assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="../assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="../assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="../assets/javascripts/dashboard/examples.dashboard.js"></script>
	</body>
</html>

<?php 
	else: header("Location:../../index.php"); 
	endif; 
?>