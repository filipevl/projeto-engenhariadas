<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic --> 
		<meta charset="UTF-8">

		<title>Engenhariadas</title>
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
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a class="logo pull-left">
					<img src="../../../Engenhariadas/images/43252089_1765515140219570_3689849392321265664_n.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Inscrever-se</h2>
					</div>
					<div class="panel-body">
						<form action="cadastro-presidente.php" method="POST">

							<div class="form-group">
								<label class="col-md-3 control-label">Escolha sua instituição: <span class="required">*</span></label>
								<div class="col-md-6">
									<select name="instituicao" class="form-control" data-plugin-multiselect id="ms_example1">
										<option value="cefet-bh" >CEFET BH </option>
										<option value="cefet-cvo">CEFET CURVELO</option>
										<option value="fasar">FASAR</option>
										<option value="fumec">FUMEC</option>
										<option value="ibmec">IBMEC</option>
										<option value="ifjf">IFJF</option>
										<option value="igmg-congonhas">IGMG CONGONHAS</option>
										<option value="ifmg-gv">IFMG GV</option>
										<option value="newtow-paiva">NEWTON PAIVA</option>
										<option value="puc">PUC</option>
										<option value="uemg-jm" >UEMG JM</option>
										<option value="uemg-pss">UEMG PSS</option>
										<option value="ufjf">UFJF</option>
										<option value="ufla">UFLA</option>
										<option value="ufmg">UFMG</option>
										<option value="ufmt">UFMT</option>
										<option value="ufop-jm">UFOP JM</option>
										<option value="ufsj">UFSJ</option>
										<option value="ufsj-sl">UFSJ SL</option>
										<option value="uftm">UFTM</option>
										<option value="ufv" >UFV</option>
										<option value="ufvjm-dtna">UFVJM DTNA</option>
										<option value="ufvjm-to">UFVJM TO</option>
										<option value="unifei">UNIFEI</option>
										<option value="unilavras">UNILAVRAS</option>
										<option value="unimontes">UNIMONTES</option>
										<option value="cefet-divinopolis">CEFET DIVINÓPOLIS</option>
									</select>
								</div>
							</div>

							<div class="form-group mb-lg">
								<label>Nome do Presidente<span class="required">*</span></label>
								<input name="nome" type="text" class="form-control input-lg" />
							</div>

							<div class="form-group mb-lg">
								<label>Telefone<span class="required">*</span></label>
								<input name="telefone" type="number" class="form-control input-lg" />
							</div>

							<div class="form-group mb-lg">
								<label>Cidade<span class="required">*</span></label>
								<input name="cidade" type="text" class="form-control input-lg" />
							</div>

							<div class="form-group mb-lg">
								<label>CNPJ<span class="required">*</span></label>
								<input name="cnpj" type="number" class="form-control input-lg" />
							</div>

							<div class="form-group mb-lg">
								<label>E-mail<span class="required">*</span></label>
								<input name="email" type="email" class="form-control input-lg" />
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
								<div class="col-sm-4 text-right"></div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Inscrever-se</button> 
									 <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Inscrever-se</button>
								</div>
							</div>
							<p></p>
							<p class="text-center">Já tem uma conta? <a href="../../../Engenhariadas/index.php">Entrar!</a>

						</form>
					</div>
				</div>

				<!--p class="text-center text-muted mt-md mb-md">&copy; Copyright 2018. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p> -->
			</div>
		</section>
		<!-- end: page -->

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