<?php

namespace Api\Controllers;

/**
 * Classe RegistrarController
 * 
 * Esta classe é responsável por lidar com o registro de novos usuários no sistema.
 * Ela valida os dados enviados pelo formulário de registro, como nome, email e senha,
 * e os insere no banco de dados se forem válidos.
 */
class RegistrarController {

    /**
     * Método index
     * 
     * Este método é responsável por processar o formulário de registro de usuários.
     * Ele valida os dados recebidos via POST, como nome, email e senha, e executa
     * a ação correspondente com base nessas informações.
     * 
     * @return void
     */
    public function index() {

        if (isset($_POST['registrar'])) {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            // Validando email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                \Api\Utilidades::alerta('E-mail Inválido.');
                \Api\Utilidades::redirect(INCLUDE_PATH.'registrar');
            }
            // Validando requisitos da senha
            else if (strlen($senha) < 6) {
                \Api\Utilidades::alerta('Senha é muito curta.');
                \Api\Utilidades::redirect(INCLUDE_PATH.'registrar');
            }
            // Verificando se email já existe no banco de dados
            else if (\Api\Models\UsuariosModel::emailExists($email)) {
                \Api\Utilidades::alerta('Este e-mail já existe no banco de dados!');
                \Api\Utilidades::redirect(INCLUDE_PATH.'registrar');
            }
            // Registrando usuário
            else {
                // Criptografando a senha
                $senha = \Api\Bcrypt::hash($senha);
                // Inserindo usuário no banco de dados
                $registro = \Api\MySql::connect()->prepare("INSERT INTO usuarios VALUES (null,?,?,?)");
                $registro->execute(array($nome, $email, $senha));

                \Api\Utilidades::alerta('Registrado com sucesso!');
                \Api\Utilidades::redirect(INCLUDE_PATH);
            }
        }

        // Renderizando a view de registro
        \Api\Views\MainView::render('registrar');
    }
}

?>
