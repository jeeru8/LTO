
 <?php
		require('fpdf/fpdf.php');
		$pdf=new FPDF();
		$pdf->AddPage('p','LEGAL');
		$pdf->SetTitle("Print Ticket");

	// Page footer

	
	//FOR A CELL 
	//$pdf->Cell(width, height, text, border, position-next-cell, alignment);
	
	$pdf->Ln(30);

	$pdf->SetFont('Arial','UB',15);
	$pdf->Cell(0,5,"VIOLATION TICKET",0,1,'C');
	
	$pdf->SetFont('Arial','',8);

	$pdf->SetFont('Arial','B',10);
	$pdf->Ln();
	$pdf->Ln();
	$pdf->SetFont('Arial','B',7);
	$pdf->Cell(35,7,"Vilation ID");
	$pdf->Cell(35,7,"Violation");
	$pdf->Cell(35,7,"Description");
	$pdf->Cell(35,7,"Location");
	$pdf->Cell(35,7,"Date");


	$pdf->Ln();
	$pdf->Cell(450,7,"------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------");
	$pdf->Ln();

		$ticketid=$_REQUEST['ticketid'];

        include ('db/db.php');
        $sql = "SELECT * FROM ticket WHERE id = '$ticketid'";
        $result = mysql_query($sql);

        while($rows=mysql_fetch_array($result))
        {
            $id = $rows[0];
            $violation = $rows[1];
            $description = $rows[2];
            $location = $rows[3];
            $date = $rows[4];
           
            $pdf->Cell(35,7,$id,1);
            $pdf->Cell(35,7,$violation,1);
            $pdf->Cell(35,7,$description,1);
            $pdf->Cell(35,7,$location,1);
            $pdf->Cell(35,7,$date,1); 
            $pdf->Ln(); 
        }
$pdf->Output();
?>