<?php 
	require '../../login/user-atletica/verifica.php';

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
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="../../login/user-atletica/logout.php"><i class="fa fa-power-off"></i> Sair</a>
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
				
					<?php 
						require 'menu-esquerdo.html';
					?>
				
				</aside>
				<!-- end: sidebar -->

				<!-- Inicio da seção main(parte de exibição das paginas do painel) -->
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Painel de Controle</h2>
					</header>								

					<div class="row">
						<div class="col-md-6">
							<section class="panel">
								<div>
									<div class="panel-body">
										<header class="panel-heading" style="margin-bottom: 10px">
											<h2 class="panel-title">Alterar cadastro</h2>
											<p class="panel-subtitle">
												Alterar cadastro da instituição
											</p>
										</header>
										<form action="cadastro-presidente.php" method="POST">

											<div class="form-group">
												<label class="col-md-6 control-label">Escolha sua instituição: <span class="required">*</span></label>
												<div class="col-md-6">
													<select name="instituicao" class="form-control" data-plugin-multiselect id="ms_example1">
														<option value="cefet-bh" >CEFET BH </option>
														<option value="cefet-divinopolis">CEFET DIVINÓPOLIS</option>
													</select>
												</div>
											</div>

											<div class="form-group mb-lg">
												<label>Nome do Presidente<span class="required">*</span></label>
												<input name="nome" type="text" class="form-control input-lg" value="Fulano de tal" />
											</div>

											<div class="form-group mb-lg">
												<label>Nome da Atlética<span class="required">*</span></label>
												<input name="atletica" type="text" class="form-control input-lg" value="UFV-CRP"/>
											</div>

											<div class="form-group mb-lg">
												<label>Telefone  <span class="required">*</span></label>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="fa fa-phone"></i>
													</span>
													<input id="phone" data-plugin-masked-input="" data-input-mask="(XX) 9 9999-9999" placeholder="(XX) 9 9999-9999" type="tel" name="telefone" pattern="[0-9]{11}" class="form-control">
												</div>
											</div>

											<div class="form-group mb-lg">
												<label>Cidade<span class="required">*</span></label>
												<input name="cidade" type="text" class="form-control input-lg" />
											</div>

											<div class="form-group mb-lg">
												<label>E-mail<span class="required">*</span></label>
												<input name="email" type="email" class="form-control input-lg" />
											</div>
											
											<div class="form-group mb-lg">
												<label>CNPJ</label>
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-archive"></i>
														</span>
														<input type="text" name="cnpj" pattern="[0-9]{14}" id="fc_inputmask_1" data-plugin-masked-input="" data-input-mask="99.999.999/9999-99" placeholder="99.999.999/9999-99" class="form-control">
													</div>
											</div>

											<div class="form-group mb-none">
												<div class="row">
													<div class="col-sm-6 mb-lg">
														<label>Senha<span class="required">*</span></label>
														<input name="senha" type="password" class="form-control input-lg" />
													</div>
													<div class="col-sm-6 mb-lg">
														<label>Confirmação de senha<span class="required">*</span></label>
														<input name="pwd_confirm" type="password" class="form-control input-lg" />
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-12 text-center">
													<button class="btnAdd" type="submit"><a href="#">Salvar</a></button>
													<button class="btnCan"><a href="index.php">Cancelar</a></button>
												</div>
											</div>

										</form>
									</div>
								</div>
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
				
		<!-- Theme Base, Components and Settings -->
		<script src="../assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="../assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="../assets/javascripts/theme.init.js"></script>

	</body>
</html>

<?php 
	else: header("Location:../../index.php"); 
	endif; 
?>