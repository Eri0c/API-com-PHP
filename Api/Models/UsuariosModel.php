<?php 

   namespace Api\Models;
   class UsuariosModel{
//Criando uma classe para verificar se o email já existe no banco de dados.
    public static function emailExists($email){
        $pdo = \Api\MySql::connect();
        $verificar = $pdo->prepare("SELECT email FROM usuarios WHERE email = ?");
        $verificar->execute(array($email));

        if($verificar->rowCount() == 1){
            //Email existe.
            return true;
        
        }else{
            return false;
        }
    }


   }




?>