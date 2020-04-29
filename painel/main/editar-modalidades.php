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
									<li class="nav-parent">
										<a>
											<i class="fa fa-map-marker" aria-hidden="true"></i>
											<span>Locais/horários</span>
										</a>
										<ul class="nav nav-children" style="">
											<li>
												<a href="d1.php">
													Dia 1
												</a>
											</li>
											<li>
												<a href="d2.php">
													Dia 2
												</a>
											</li>
											<li>
												<a href="d3.php">
													Dia 3
												</a>
											</li>
											<li>
												<a href="d4.php">
													Dia 4
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-active">
										<a href="chaveamento.php">
											<i class="fa fa-key" href=""aria-hidden="true"></i>
											<span>Chaveamento</span>
										</a>
                                    </li>
                                    <li class="nav-active">
										<a href="tabelamento.php">
											<i class="fa fa-key" href=""aria-hidden="true"></i>
											<span>Tabelamento</span>
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
						<h2>Modalidades</h2>
					</header>
					<div class="row">
						<div class="col-md-12">
							<!-- A ideia é que o botão fique aqui em cima da tabela 
								Esse botão cria uma nova linha na tabela e no banco
							-->
							<button href="google.com.br" class="btnAdd"><a href="#">Cadastrar modalidade</a></button>
							<button class="btnBlue"><a href="#">Editar modalidade</a></button>

							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-bordered mb-none">
										<thead>
											<tr>
												<th colspan="4">Modalidades</th>
											</tr>
											<tr>
												<th>Nome</th>
												<th>Feminino</th>
												<th>Masculino</th>
												<th>Ambos</th>
											</tr>
										</thead>
										<tbody>
											
											<tr>
												<td>Futsal</td>
												<td></td>
												<td></td>
												<td><strong>*</strong></td>
											</tr>
											
											<!-- <tr>
												<td>1</td>        O back deve cuspir todas as modalidades ja existentes
												<td>Mark</td>	  como novas linhas e em cada coluna deve haver os parametros
												<td>Otto</td>	  ao dar um duplo clique criar um input para realização do crud
															      Deve ter também um botão que ao clicar no botão criasse uma nova linha
																  e nessa linha é possível crud
												<td>@mdo</td> 
											</tr> -->


											
										</tbody>
									</table>
								</div>
							</div>


							<div>
								<h1>Cadastrar</h1>
								<br>
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
														<button class="btnCan">Cancelar</button>
													</div>
												</div>
											</footer>
										</section>
									</form>
								</div>
							</div>

							<h1>Editar</h1>
							<br>

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
														<input type="text" name="nome" class="form-control" value="Futsal" required/>
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
															<input id="read" value="ambos" type="checkbox" name="for[]" checked/>
															<label for="read">Ambos</label>
														</div>
													</div>
												</div>
											</div>
											<footer class="panel-footer">
												<div class="row">
													<div class="col-sm-9 col-sm-offset-3">
														<button class="btnAdd">Salvar</button>
														<button class="btnRed">Remover</button>
														<button class="btnCan">Cancelar</button>
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
	</body>
</html>

<?php 
	else: header("Location:../../admin.php"); 
	endif; 
?>