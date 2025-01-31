<!DOCTYPE html>
<html>
<head>
	<!--ALTERAR TITULO-->
	<title>Bem-vindo, <?php echo $_SESSION['nome']; ?></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="<?php echo INCLUDE_PATH_STATIC ?>estilos/feed.css" rel="stylesheet">


</head>

<body>

	<section class="main-feed">
		<div class="sidebar">
			<div class="logo-sidebar">
				<img src="<?php echo INCLUDE_PATH_STATIC ?>images/logodanki.svg" />
			</div>
			<br/>
			<div class="menu-sidebar">
				<h4>Menu</h4>
				<br/>
				<a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> feed</a>
				<a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> perfil</a>
				<a href="#"><i class="fa fa-users" aria-hidden="true"></i> amigos</a>

				<a href="?loggout">loggout</a>
			</div>
		</div><!--sidebar-->
		<div class="feed">
			<div class="feed-wraper">
			<div class="feed-single-post">
				<div class="feed-single-post-author">
					<div class="img-single-post-author">
						<!--todo:COLOCAR IMAGEM PLACEHOLDER-->
						<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					</div>
					<div class="feed-single-post-author-info">
						<h3>Guilherme</h3>
						<p>08:15 20/09/2020</p>
					</div>
				</div>
				<div class="feed-single-post-content">
					<p>Dia de reunião com a equipe e de lembrar as coisas boas de 2020. Lembre-se: É importante nos mantermos ativos. Independente do dia! Cuide da sua saúde física e mental. Ainda mais se você é empreendedor(a).</p>
				</div>
			</div>
		<div class="feed-single-post">
				<div class="feed-single-post-author">
					<div class="img-single-post-author">
						<!--todo:COLOCAR IMAGEM PLACEHOLDER-->
						<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					</div>
					<div class="feed-single-post-author-info">
						<h3>Guilherme</h3>
						<p>08:15 20/09/2020</p>
					</div>
				</div>
				<div class="feed-single-post-content">
					<p>Dia de reunião com a equipe e de lembrar as coisas boas de 2020. Lembre-se: É importante nos mantermos ativos. Independente do dia! Cuide da sua saúde física e mental. Ainda mais se você é empreendedor(a).</p>
					<img src="<?php echo INCLUDE_PATH_STATIC ?>images/post-placeholder.png" />
				</div>
			</div>

			<div class="feed-single-post">
				<div class="feed-single-post-author">
					<div class="img-single-post-author">
						<!--todo:COLOCAR IMAGEM PLACEHOLDER-->
						<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					</div>
					<div class="feed-single-post-author-info">
						<h3>Guilherme</h3>
						<p>08:15 20/09/2020</p>
					</div>
				</div>
				<div class="feed-single-post-content">
					<p>Dia de reunião com a equipe e de lembrar as coisas boas de 2020. Lembre-se: É importante nos mantermos ativos. Independente do dia! Cuide da sua saúde física e mental. Ainda mais se você é empreendedor(a).</p>
				</div>
			</div>
			<div class="feed-single-post">
				<div class="feed-single-post-author">
					<div class="img-single-post-author">
						<!--todo:COLOCAR IMAGEM PLACEHOLDER-->
						<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					</div>
					<div class="feed-single-post-author-info">
						<h3>Guilherme</h3>
						<p>08:15 20/09/2020</p>
					</div>
				</div>
				<div class="feed-single-post-content">
					<p>Dia de reunião com a equipe e de lembrar as coisas boas de 2020. Lembre-se: É importante nos mantermos ativos. Independente do dia! Cuide da sua saúde física e mental. Ainda mais se você é empreendedor(a).</p>
				</div>
			</div>

						<div class="feed-single-post">
				<div class="feed-single-post-author">
					<div class="img-single-post-author">
						<!--todo:COLOCAR IMAGEM PLACEHOLDER-->
						<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					</div>
					<div class="feed-single-post-author-info">
						<h3>Guilherme</h3>
						<p>08:15 20/09/2020</p>
					</div>
				</div>
				<div class="feed-single-post-content">
					<p>Dia de reunião com a equipe e de lembrar as coisas boas de 2020. Lembre-se: É importante nos mantermos ativos. Independente do dia! Cuide da sua saúde física e mental. Ainda mais se você é empreendedor(a).</p>
				</div>
			</div>

						<div class="feed-single-post">
				<div class="feed-single-post-author">
					<div class="img-single-post-author">
						<!--todo:COLOCAR IMAGEM PLACEHOLDER-->
						<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					</div>
					<div class="feed-single-post-author-info">
						<h3>Guilherme</h3>
						<p>08:15 20/09/2020</p>
					</div>
				</div>
				<div class="feed-single-post-content">
					<p>Dia de reunião com a equipe e de lembrar as coisas boas de 2020. Lembre-se: É importante nos mantermos ativos. Independente do dia! Cuide da sua saúde física e mental. Ainda mais se você é empreendedor(a).</p>
				</div>
			</div>
		</div>

			<div class="friends-request-feed">
				<h4>Solicitações de amizade</h4>
				<div class="friend-request-single">
					<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					<div class="friend-request-single-info">
						<h3>Otávio da Silva</h3>
						<p><a href="">Aceitar</a> | <a href="">Recusar</a></p>
					</div>
				</div>
				<div class="friend-request-single">
					<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					<div class="friend-request-single-info">
						<h3>Otávio da Silva</h3>
						<p><a href="">Aceitar</a> | <a href="">Recusar</a></p>
					</div>
				</div>
				<div class="friend-request-single">
					<img src="<?php echo INCLUDE_PATH_STATIC ?>images/avatar.jpg" />
					<div class="friend-request-single-info">
						<h3>Otávio da Silva</h3>
						<p><a href="">Aceitar</a> | <a href="">Recusar</a></p>
					</div>
				</div>
			</div>
		</div><!--feed-->
	</section>


</body>


</html>