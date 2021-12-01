<?php
session_start();
    $mail = $_SESSION["email"];
    $datee = date("Y-m-d");
 	include 'php/conn.php';

	require('FPDF/fpdf.php');
	$pdf = new FPDF();

    $id = $_GET["id"];

    $query = "SELECT * FROM users WHERE id = '$id' ";
    $result = mysqli_query($conn, $query);
  	$row = mysqli_fetch_array($result);
    	

    	$pdf->SetTitle('Fiche : '.$row["nom"]);
    	$pdf->SetMargins(3, 2, 3);
		$pdf->AddPage('P', 'A4');
		$pdf->SetFont("Helvetica","B", 17);
		$pdf->SetTextColor(0, 0, 0);
		$pdf->SetFillColor(204, 217, 255);



		$pdf->Image('assets/img/brand/logo en tete.png', 10, 8, 35, 15);
		$pdf->Image('assets/img/brand/bg.png', 60, 140);



		$pdf->Cell(7, 40, utf8_decode(""), 0, 1, 'L');

		$pdf->SetTextColor(31, 78, 121);
		$pdf->SetFillColor(222, 234, 246);
		$pdf->Cell(7, 5, utf8_decode(""), 0, 0, 'L');
		$pdf->Cell(191, 13, utf8_decode("Fiche de formation"), 1, 1, 'C', 1);

		$pdf->Cell(7, 10, utf8_decode(""), 0, 1, 'L');


				  $q = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'formation' AND table_schema = 'cfe2'";
                  $res = mysqli_query($conn, $q);
                  $resChe = mysqli_num_rows($res);
                  if($resChe > 0){
                    while($roww = mysqli_fetch_array($res)){
                      $c = $roww["COLUMN_NAME"];
                      $qu = "SELECT * FROM users inner join formation WHERE users.id_formation = formation.id_formation and users.id = '$id' ";
                      $ress = mysqli_query($conn, $qu);
                      $resCh = mysqli_num_rows($ress);
                      if($resCh > 0){
                        while($rows = mysqli_fetch_array($ress)){
                          $a = $rows["$c"];
                          if($a == "on"){
                          	$f = $c.", ";


		$pdf->SetTextColor(0, 0, 0);

		$pdf->SetFont("Helvetica","", 14);
		$pdf->Cell(7, 30, utf8_decode(""), 0, 1, 'L');
		$pdf->Cell(7, 10, utf8_decode(""), 0, 0, 'L');
		$pdf->MultiCell(191, 10, utf8_decode("         Nous soussignons Centre de Formation Eva | CFE administré par l'entreprise Eva Factory de formations professionnelle, sise \"Imm El Harti 8ème étage appt 82 - Oujda\", attestons par la présente que M/Me. *{$row["nom"]}* titulaire de la CIN n°: -{$row["cin"]}- a suivi régulièrement et avec succès à partir de -{$row["date_inscription"]}- jusqu'à ............................. une formation en -{$f}-."), 0, 'L', False);
                          }
                        }
                      }
                    }
                  }
		$pdf->Cell(7, 10, utf8_decode(""), 0, 1, 'L');
		$pdf->Cell(7, 10, utf8_decode(""), 0, 0, 'L');
		$pdf->MultiCell(191, 10, utf8_decode("         La présente attestation est délivrée à l'intéressé(e) sur sa demande pour servir et valoir ce que de droit."), 0, 'L', False);


		$pdf->Cell(7, 10, utf8_decode(""), 0, 1, 'L');
		$pdf->Cell(120, 10, utf8_decode(""), 0, 0, 'L');
		$pdf->Cell(50, 10, utf8_decode("Oujda, le $datee"), 0, 1, 'L');

		$pdf->SetFont("Helvetica","", 10);
		$pdf->Cell(7, 75, utf8_decode(""), 0, 1, 'L');
		$pdf->Cell(7, 5, utf8_decode(""), 0, 0, 'L');
		$pdf->Cell(191, 5, utf8_decode("CFE - Centre de Formation Eva | contact.evafactory@gmail.com | Imm El Harti 8ème étage appt 82 - Oujda"), "T", 0, 'C');

	$pdf->output('D', 'Fiche '.$row["nom"].'.pdf', 'F');
?>