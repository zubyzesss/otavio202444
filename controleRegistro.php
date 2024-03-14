<?php 

require('../Model/Registro.class.php');

if(isset($_POST['avanco'])){
$turma = $_POST['turma'];
$ano = $_POST['ano'];

session_start();
$_SESSION['ano'] = $ano;
$_SESSION['turma'] = $turma;

header("location:../View/cadastro_registro_2.php");

}

if(isset($_POST['cadastrar_registro'])){
$id_aluno = $_POST['id_aluno'];
$motivo = $_POST['motivo'];
    
$x = new Registro();
$x->cadastrarRegistro($motivo, $id_aluno);    
    
}



?>                                                               