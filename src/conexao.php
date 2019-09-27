<?php 
    class conexao{
       var $cr;

        function conectar(){
            $this->cr = new mysqli("localhost", "root", "usbw", "storm-db");
            if( $this->cr->connect_error){
                die("Erro de Conexão com o banco<br/>".$this->cr->connect_error);
            } else {
                echo "Conectado com sucesso!";
            }
        } 
    }
?>