<?php 
    namespace Api;
    /**
     * Esta classe contém métodos utilitários comuns que podem ser usados em varias partes do sistema.
     * Ela fornece funcionalidades como exibição de alertas e redirecionamento de páginas.
     * 
     */
    class Utilidades
    {
        /*
        Método alerta
        Este método exibe um alerta na tela com a mensagem especificada.
     */
        public static function redirect($url){// Este método redireciona o usuário para a URL especificada.
            echo '<script>window.location.href="'.$url.'"</script>';
            die();
        }

        public static function alerta($mensagem){// Implementação do método para exibir um alerta na tela
            echo '<script>alert("'.$mensagem.'")</script>';
            }
    }    
    
 ?>