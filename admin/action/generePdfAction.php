<?php
session_name('admin');
@session_start();
include("../../function.php");
include('../classes/fpdf.php');

//Récupération de l'id du film
$id=$_SESSION['id'];

//Récupération des infos sur le film
connexion();
$sql = "select * from film where id = \"$id\"";
$query = mysql_query($sql);
$row = mysql_fetch_assoc($query);


$date = date("d/m/y");//Ajout d'une date pour personnaliser notre document
//Création du pdf
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);//définition de la police
$pdf->SetXY(10,20);//Position de notre "traceur"
$pdf->Cell(190,10,$row['titre'],1,1,'C');//Création d'une cellule de texte
$pdf->Image('../images/img_film/'.$row['id'].'.jpg',150,35);
$pdf->Ln(15);//Saut de ligne
$pdf->Cell(190,7,'Annee de production: '.$row['annee'],0,1,'L');//Création d'une cellule de texte
$pdf->Ln(0);//Saut de ligne
$pdf->Cell(190,7,'Realise par '.$row['realisateur'],0,1,'L');//Création d'une cellule de texte
$pdf->Ln(0);//Saut de ligne
$pdf->Cell(190,7,'Avec '.$row['acteur'],0,1,'L');//Création d'une cellule de texte
$pdf->Ln(0);//Saut de ligne
$pdf->Cell(190,7,'Genre: '.$row['categorie'],0,1,'L');//Création d'une cellule de texte
$pdf->Ln(0);//Saut de ligne
$pdf->Cell(190,7,'Duree: '.$row['duree'],0,1,'L');//Création d'une cellule de texte
$pdf->Ln(15);//Saut de ligne
$pdf->MultiCell(190,6,"Resume: \n".html_entity_decode($row['resume'],ENT_QUOTES),1,'LR','L',0); //Création d'une cellule de texte
$pdf->Ln(110);//Saut de ligne
$pdf->Cell(140,7,'Genere le, '.$date,0,0,'L');//Horodatage.
$pdf->Cell(50,7,'Par oversoon.free.fr',0,0,'L');//Horodatage.
//sortie :
$pdf->Output();


?>
