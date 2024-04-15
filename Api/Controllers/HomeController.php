<?php
	
	namespace Api\Controllers;

	class HomeController{


		public function index(){

			if(isset($_GET['loggout'])){
				session_unset();
				session_destroy();

				\Api\Utilidades::redirect(INCLUDE_PATH);
			}


			if(isset($_SESSION['login'])){
				//Renderiza a home do usuário.
				\Api\Views\MainView::render('home');
			}else{
				//Renderizar para criar conta.

				if(isset($_POST['login'])){
					$login = $_POST['email'];
					$senha = $_POST['senha'];

					

					//Verificar no banco de dados.

					$verifica = \Api\MySql::connect()->prepare("SELECT * FROM usuarios WHERE email = ?");
					$verifica->execute(array($login));



					
					if($verifica->rowCount() == 0){
						//Não existe o usuário!
						\Api\Utilidades::alerta('Não existe nenhum usuário com este e-mail...');
						\Api\Utilidades::redirect(INCLUDE_PATH);
					}else{
						$dados = $verifica->fetch();
						$senhaBanco = $dados['senha'];
						if(\Api\Bcrypt::check($senha,$senhaBanco)){
							//Usuário logado com sucesso
							$_SESSION['login'] = $dados['email'];
							$_SESSION['nome'] = explode(' ',$dados['nome'])[0];
							\Api\Utilidades::alerta('Logado com sucesso!');
							\Api\Utilidades::redirect(INCLUDE_PATH);
						}else{
							\Api\Utilidades::alerta('Senha incorreta....');
							\Api\Utilidades::redirect(INCLUDE_PATH);
						}
					}
					

				}

				\Api\Views\MainView::render('login');
			}

		}

	}

?>