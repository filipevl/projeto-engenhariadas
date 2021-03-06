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
                <?php 
					require 'menu-esquerdo.html';
                ?>
                <section role="main" class="content-body">
					<header class="page-header">
						<h2>Criar Modalidade</h2>
					</header>
					<div class="row">
						<div class="col-md-12">
                            <div>
                                <div class="col-md-12">
                                    <form id="form" action="cadastrar-admin.php" method="POST" class="form-horizontal">
                                        <section class="panel">
                                            <header class="panel-heading">
                                                <h2 class="panel-title">Cadastrar modalidade</h2>
                                                <p class="panel-subtitle">
                                                    Cadastro de modalidade
                                                </p>
                                            </header>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Nome:<span class="required">*</span></label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="nome" class="form-control" placeholder="Ex: Futsal" required/>
                                                    </div>
                                                </div>
                                                
                                            
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label">Sexo:<span class="required">*</span></label>   
                                                    <div class="col-sm-9">
                                                        <div class="checkbox-custom chekbox-primary">
                                                            <input id="create" value="feminino" type="checkbox" name="for[]" required />
                                                            <label for="create">Feminino</label>
                                                        </div>
                                                        <div class="checkbox-custom chekbox-primary">
                                                            <input id="read" value="masculino" type="checkbox" name="for[]" />
                                                            <label for="read">Masculino</label>
                                                        </div>
                                                        <div class="checkbox-custom chekbox-primary">
                                                            <input id="read" value="ambos" type="checkbox" name="for[]" />
                                                            <label for="read">Ambos</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <footer class="panel-footer">
                                                <div class="row">
                                                    <div class="col-sm-9 col-sm-offset-3">
                                                        <button class="btnAdd">Cadastrar</button>
                                                        <button class="btnCan">Excluir</button>
                                                    </div>
                                                </div>
                                            </footer>
                                        </section>
                                    </form>
                                </div>
                            </div>
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
	else: header("Location:../../admin.php"); 
	endif; 
?>