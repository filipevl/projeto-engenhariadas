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

				<!-- end: search & user box -->
			</header>
			<!-- fim: header -->
           <div class="inner-wrapper">
                <?php 
					require 'menu-esquerdo.html';
                ?>
                <section role="main" class="content-body">
					<header class="page-header">
						<h2>Modalidades</h2>
					</header>
                    <div class="row">
                        <div class="col-md-12">
                            <section class="panel form-wizard" id="w4">
                                <header class="panel-heading">
                                    <h2 class="panel-title">Cadastrar Local</h2>
                                </header>
                                <div class="panel-body">
                                    <div class="wizard-progress wizard-progress-lg">
                                        <div class="steps-progress">
                                            <div class="progress-indicator"></div>
                                        </div>
                                        <ul class="wizard-steps">
                                            <li class="active">
                                                <a href="#w4-account" data-toggle="tab"><span>1</span>Nome do local</a>
                                            </li>
                                            <li>
                                                <a href="#w4-profile" data-toggle="tab"><span>2</span>Disponibilidade</a>
                                            </li>
                                            <li>
                                                <a href="#w4-billing" data-toggle="tab"><span>3</span>Modalidades</a>
                                            </li>
                                            <li>
                                                <a href="#w4-confirm" data-toggle="tab"><span>4</span>Confirmação</a>
                                            </li>
                                        </ul>
                                    </div>
                    
                                    <form class="form-horizontal" novalidate="novalidate">
                                        <div class="tab-content">
                                            <div id="w4-account" class="tab-pane active">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label" for="w4-username">Nome do local: </label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="nome_do_local" id="w4-username" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="w4-profile" class="tab-pane">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Hora inicial</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-clock-o"></i>
                                                            </span>
                                                            <input type="text" data-plugin-timepicker="" class="form-control" data-plugin-options="{ &quot;minuteStep&quot;: 15 }">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Hora final</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="fa fa-clock-o"></i>
                                                            </span>
                                                            <input type="text" data-plugin-timepicker="" class="form-control" data-plugin-options="{ &quot;minuteStep&quot;: 15 }">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="w4-billing" class="tab-pane">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Selecione uma modalidade</label>
                                                    <div class="col-md-6">
                                                        <div class="btn-group">
                                                            <select class="form-control" multiple="multiple" data-plugin-multiselect data-multiselect-toggle-all="true" id="ms_example7">
                                                                <!-- 
                                                        Buscar as modalidades e echo: <option value="$id">$nome_da_modalidade</option>
                                                                -->
                                                                <option value="cheese">Cheese</option>
                                                                <option value="tomatoes">Tomatoes</option>
                                                                <option value="mozarella">Mozzarella</option>
                                                                <option value="mushrooms">Mushrooms</option>
                                                                <option value="pepperoni">Pepperoni</option>
                                                                <option value="onions">Onions</option> 
                                                            </select>
                                                            <button id="ms_example7-toggle" class="btn btn-primary">Todas modalidades</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="w4-confirm" class="tab-pane">
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label" for="w4-email">Digite sua senha:</label>
                                                    <!-- Validar senha, caso positivo inserir local no banco -->
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control" name="password" id="w4-email" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="panel-footer">
                                    <ul class="pager">
                                        <li class="previous disabled">
                                            <a><i class="fa fa-angle-left"></i> Voltar</a>
                                        </li>
                                        <li class="finish hidden pull-right">
                                            <a>Finalizar</a>
                                        </li>
                                        <li class="next">
                                            <a>Próximo <i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul>
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
        
        <!-- Specific Page Vendor -->
        <script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="../assets/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="../assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
        <script src="../assets/vendor/pnotify/pnotify.custom.js"></script>
        <script src="../assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
        
		<!-- Theme Base, Components and Settings -->
		<script src="../assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="../assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="../assets/javascripts/theme.init.js"></script>
        
        <!-- Examples -->
        <script src="../assets/javascripts/forms/examples.wizard.js"></script>
        <script src="../assets/javascripts/forms/examples.advanced.form.js" /></script>
	</body>
</html>

<?php 
	else: header("Location:../../admin.php"); 
	endif; 
?>