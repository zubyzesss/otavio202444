<?php 

require('../Model/Usuario.class.php');

if(isset($_POST['cadastrar_usuario'])){
$tipo = $_POST['tipo'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$x = new Usuario();
$x->cadastrarUsuario($tipo, $email, $senha); 

}



?>