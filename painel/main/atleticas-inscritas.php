<?php 
	require '../../login/user-admin/verifica.php';

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
		<link rel="stylesheet" href="../assets/vendor/pnotify/pnotify.custom.css" />

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
								<img src="../assets/images/user.png" alt="name" class="img-circle" data-lock-picture="../assets/images/user.png" />
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
								<li>
									<a role="menuitem" tabindex="-1" href="../../login/user-admin/logout.php"><i class="fa fa-power-off"></i> Sair</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="header-right">
					<ul class="notifications">
						<li>
							<a href="validar.php" class="dropdown-toggle notification-icon">
								<i class="fa fa-tasks"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- fim: header -->

			<div class="inner-wrapper">
				<!-- inicio: sidebar esquerdo -->
				<?php 
					require 'menu-esquerdo.html';
				?>
				<!-- end: sidebar -->

				<!-- Inicio da seção main(parte de exibição das paginas do painel) -->
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Atléticas inscritas</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Atléticas inscritas</span></li>
							</ol>

							<a class="sidebar-right-toggle" ></a>
						</div>
					</header>
					<div class="form-group">
						<label class="col-md-3 control-label">Escolha sua instituição: <span class="required">*</span></label>
						<div class="col-md-6">
							<select name="instituicao" class="form-control"> // Check box com a instituição
								<option>UFMG</option>

								<option>UFV</option>
								<!-- <?php
									// Bucar e exibir dados da coluna instituição dica: echo <option value="x">$variável_do_banco</option>
								?> -->

							</select>
						</div>
					</div>
					<div class="panel-body">
						<a><button type="button" class="mb-xs mt-xs mr-xs btn btn-default">Dados Cadastrais</button></a>
						<a <?php 
							// Jogar no echo o link do mp3
							echo href="#"
						?> targed="_blank"><button type="button" class="mb-xs mt-xs mr-xs btn btn-primary">Baixar MP3</button></a>
						<a><button type="button" class="mb-xs mt-xs mr-xs btn btn-success">Modalidades inscritas</button>
						</a>
						<a><button type="button" class="mb-xs mt-xs mr-xs btn btn-info">Lista geral de atletas</button>
						</a>
						<a><button type="button" class="mb-xs mt-xs mr-xs btn btn-warning">Lista individuais</button>
						</a>
						<button type="button" class="mb-xs mt-xs mr-xs btn btn-danger">Planilha da reunião</button>
						<a>
					</div>
					
					<div>
						<h2>Botão dados cadastrais</h1>
						
						<div class="panel-body">
							<button id="default-success" class="btnCNPJ">Validar CNPJ</button>
						</div>

						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped mb-none">
									<thead>
										<tr>
											<th>Presidente</th>
											<th>Atlética</th>
											<th>Telefone</th>
											<th>Cidade</th>
											<th>E-mail</th>
											<th>CNPJ</th>
										</tr>
									</thead>
									<tbody>
										<!-- 
										<tr>
										o back tem que buscar os dados de cada coluna e mostrar em cada coluna	
										</tr> -->
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
				</section>
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
		<script src="../assets/vendor/pnotify/pnotify.custom.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="../assets/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="../assets/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="../assets/javascripts/theme.init.js"></script>

		<!-- Examples -->
		<script src="../assets/javascripts/ui-elements/examples.notifications.js"></script>

	</body>
</html>

<?php 
	else: header("Location:../admin.php"); 
	endif; 
?>