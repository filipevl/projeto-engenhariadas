<?php 
	require '../../login/user-admin/verifica.php';

	if(isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])) : ?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Engenhariadas - Cadastro de usuários administradores</title>
		<meta name="keywords" content="Engenhariadas" />
		<meta name="description" content="Página de cadastro de usuários e permissões dentro do sistema">
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
						<img src="../../../Engenhariadas/images/43252089_1765515140219570_3689849392321265664_n.png" height="35" alt="Engenhariadas" />
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
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navegação
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
											<span>Página inicial</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="cadastro-admin.php">
											<i class="fa fa-group" aria-hidden="true"></i>
											<span>Cadastrar Admin</span>
										</a>
									</li>
                                    <li class="nav-active">
										<a href="atleticas-inscritas.php">
											<i class="fa fa-empire" aria-hidden="true"></i>
											<span>Atléticas inscritas</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="editar-modalidades.php">
											<i class="fa fa-file-code-o" href=""aria-hidden="true"></i>
											<span>Editar modalidades</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="locais-horarios.php">
											<i class="fa fa-map-marker" href=""aria-hidden="true"></i>
											<span>Locais/horários</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="confronto-chaveamento.php">
											<i class="fa fa-key" href=""aria-hidden="true"></i>
											<span>Confroto/Chaveamento</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Cadastro de usuários</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li>
									<span>Cadastro de usuários administradores</span>
								</li>
							</ol>
							<a class="sidebar-right-toggle" ></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="col-md-12">
						<form id="form" action="cadastrar-admin.php" method="POST" class="form-horizontal">
							<section class="panel">
								<header class="panel-heading">
									<h2 class="panel-title">Cadastro</h2>
									<p class="panel-subtitle">
										Cadastro de usuários administradores
									</p>
								</header>
								<div class="panel-body">
									<div class="form-group">
										<label class="col-sm-3 control-label">Nome completo<span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="text" name="nome" class="form-control" placeholder="ex: João da Silva" required/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">E-mail <span class="required">*</span></label>
										<div class="col-sm-9">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="fa fa-envelope"></i>
												</span>
												<input type="email" name="email" class="form-control" placeholder="ex: email@email.com" required/>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Senha <span class="required">*</span></label>
										<div class="col-sm-9">
											<input type="password" name="senha" class="form-control" required/>
										</div>
									</div>
									<!--<div class="form-group">
										<label class="col-sm-3 control-label">Permissões <span class="required">*</span></label>   
										<div class="col-sm-9">
											<div class="checkbox-custom chekbox-primary">
												<input id="create" value="project" type="checkbox" name="for[]" required />
												<label for="create">Criar usuários administradores</label>
											</div>
											<div class="checkbox-custom chekbox-primary">
												<input id="read" value="website" type="checkbox" name="for[]" />
												<label for="read">Editar e validar informações</label>
											</div>
										</div>
									</div>-->
								</div>
								<footer class="panel-footer">
									<div class="row">
										<div class="col-sm-9 col-sm-offset-3">
											<button class="btn btn-primary">Cadastrar</button>
										</div>
									</div>
								</footer>
							</section>
						</form>
					</div>
				</div>
				<!-- end: page -->
			</section>
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
		<script src="../assets/vendor/jquery-validation/jquery.validate.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="../assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="../assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="../assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="../assets/javascripts/forms/examples.validation.js"></script>
	</body>
</html>
<?php 
	else: header("Location:../../admin.php"); 
	endif; 
?>