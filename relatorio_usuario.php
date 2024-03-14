<?php
require_once("FPDF/fpdf.php");
require_once("../../Model/Usuario.class.php");

$pdf = new  FPDF();
        $pdf->addPage();
        $pdf->setFont('arial','B', 12);

        $pdf->Image("C:/xampp/htdocs/Estudo_de_caso/View/Imagens/Salaberga.png", 10, 10, 45, 25, 'PNG');
        $pdf->cell(0, 10 , "          EEEP SALABERGA TORQUATO GOMES DE MATOS", 0 , 1, 'R');
        $pdf->cell(0, 10 , utf8_decode("EMI em Informática"), 0 , 0, 'R');
        $pdf->ln(15);
        $pdf->cell(0, 10 , utf8_decode("Relatório de Usuários"), 0 , 0, 'C');
        $pdf->ln(10);

$pdo = new PDO("mysql:host=localhost; dbname=registro_atraso","root","");
        $consulta = "select * from usuario";
        $consultafeita = $pdo->prepare($consulta);
        $consultafeita->execute();

        $pdf->Cell(20,5,"Id",1,0,'L');
        $pdf->Cell(20,5,"Tipo",1,0,'L');
        $pdf->Cell(120,5,"Email",1,0,'L');
        $pdf->Cell(30,5,"Senha",1,1,'L');
        $pdf->setFont('arial','', 10);

            foreach ($consultafeita as $value) {
                if ($value['id']<10) {
                    $pdf->Cell(20,5,"0".$value['id'],1,0,'L');
                }else {
                    $pdf->Cell(20,5,$value['id'],1,0,'L');
                }
                $pdf->Cell(20,5, utf8_decode($value['tipo']),1,0,'L');
                $pdf->Cell(120,5, utf8_decode($value['email']),1,0,'L');
                $pdf->Cell(30,5, utf8_decode($value['senha']),1,1,'L');

            }

$pdf->output("relatorio.pdf", "I");

//$pdf->Cell(0,20,"Nome",1,1,'C');
//$x = new  Aluno();
//$x->listarAlunoRel();

?>
