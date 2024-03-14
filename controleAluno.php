<?php 

require('../Model/Aluno.class.php');

if(isset($_POST['cadastrar_aluno'])){
$ano = $_POST['ano'];
$turma = $_POST['turma'];
$nome = $_POST['nome'];

$x = new Aluno();
$x->cadastrarAluno($nome, $turma, $ano);

}



?>