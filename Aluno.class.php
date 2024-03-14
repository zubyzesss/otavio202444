<?php



class Aluno{

    public function CadastrarAluno($nome, $turma, $ano){
        $pdo = new PDO("mysql:host=localhost; dbname=registro_atraso","root","");
        $consulta = "INSERT INTO aluno VALUES (null,:nome,:turma,:ano)";
        $consultafeita = $pdo->prepare($consulta);
        $consultafeita->bindValue(":nome", $nome);
        $consultafeita->bindValue(":turma", $turma);
        $consultafeita->bindValue(":ano", $ano);
        $consultafeita->execute();
       
    }

    public function listarAluno($ano, $turma){

        $pdo = new PDO("mysql:host=localhost; dbname=registro_atraso","root","");
        $consulta = "select * from aluno where :turma = turma and :ano = ano";
        $consultafeita = $pdo->prepare($consulta);
        $consultafeita->bindValue(":turma", $turma);
        $consultafeita->bindValue(":ano", $ano);
        $consultafeita->execute();

        foreach ($consultafeita as $value) {

            echo '<option value=' .  $value['id'] . '>' . $value['nome'] . '</option>';

        }
        
    }

    /*public function listarAlunoRel(){
        session_start();
        $ano = $_SESSION['ano'];            
        $turma = $_SESSION['turma'];

        $pdo = new PDO("mysql:host=localhost; dbname=registro_atraso","root","");
        $consulta = "select * from aluno where :turma = turma and :ano = ano;";
        $consultafeita = $pdo->prepare($consulta);
        $consultafeita->bindValue(":turma", $turma);
        $consultafeita->bindValue(":ano", $ano);
        $consultafeita->execute();

        foreach ($consultafeita as $value) {

            echo $pdf->Cell(0,20,$value['nome'],1,1,'L');

        }
        
    }*/

}



?>