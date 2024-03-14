<?php
require_once("FPDF/fpdf.php");
require_once("../../Model/Registro.class.php");

$pdf = new  FPDF();
        $pdf->addPage();
        $pdf->setFont('arial','B', 12);

        $pdf->Image("C:/xampp/htdocs/Estudo_de_caso/View/Imagens/Salaberga.png", 80, 10, 45, 20, 'PNG');
        $pdf->ln(25);
        $pdf->cell(0, 5 , "          EEEP SALABERGA TORQUATO GOMES DE MATOS", 0 , 1, 'C');
        $pdf->cell(0, 5 , utf8_decode("EMI em Informática"), 0 , 1, 'C');
        $pdf->cell(0, 15 , utf8_decode("Relatório de Alunos"), 0 , 0, 'C');
        $pdf->ln(15);


$pdo = new PDO("mysql:host=localhost; dbname=registro_atraso","root","");
        $consulta = "select * from aluno inner join registro where registro.id_aluno = aluno.id order by registro.data ";
        $consultafeita = $pdo->prepare($consulta);
        $consultafeita->execute();

        $pdf->Cell(100,5,"Nome",1,0,'L');
        $pdf->Cell(15,5,"Ano",1,0,'C');
        $pdf->Cell(20,5,"Turma",1,0,'C');
        $pdf->Cell(25,5,"Data",1,0,'C');
        $pdf->Cell(25,5,"Motivo",1,1,'C');
        $pdf->setFont('arial','', 10);

        foreach ($consultafeita as $value) {
            $pdf->Cell(100,5, utf8_decode($value['nome']),1,0,'L');
            $pdf->Cell(15,5, utf8_decode($value['ano']),1,0,'C');
            $pdf->Cell(20,5, $value['turma'],1,0,'C');
            $pdf->Cell(25,5, $date = date('d/m/Y', strtotime($value['data'])),1,0,'C');
            $pdf->Cell(25,5, $value['motivo'],1,1,'C');

        }

$pdf->output("relatorio.pdf", "I");

//$pdf->Cell(0,20,"Nome",1,1,'C');
//$x = new  Aluno();
//$x->listarAlunoRel();

?>