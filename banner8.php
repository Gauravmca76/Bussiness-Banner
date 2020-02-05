<?php
require('fpdf/fpdf.php');
class MYPDF extends FPDF
{
    public function Header()
    {
        $this->Image('banner/banner8.jpg',0,0,210,300);
    }
}
$pdf = new MYPDF();
$pdf->AddFont('Verdanaz','','verdanaz.php');
$pdf->AddFont('Trebuchet','','trebuchet.php');
$pdf->AddFont('Helvetica','','helvetica.php');
$pdf->AddFont('Vnihelve','','vni_helve.php');
$pdf->AddPage(); 
$pdf->Image('images/office.png',50,5,100,50,'PNG');
$pdf->setFont('Verdanaz','',15);
$pdf->setTextColor(255,255,255);
$pdf->setXY(80,55);
$pdf->cell(40,20,'SARESTATES',0,0,'C');
$pdf->setFont('Verdanaz','',10);
$pdf->setTextColor(255,255,255);
$pdf->setXY(80,62);
$pdf->cell(40,20,'FORMERLY Way2WEALTH REALTY Advisors',0,0,'C');
$pdf->setFont('Verdanaz','',10);
$pdf->setTextColor(255,255,255);
$pdf->setXY(80,67);
$pdf->cell(40,20,'An ISO 9001 : 2005 Certified Company',0,0,'C');
$pdf->setFont('Times','B',30);
$pdf->setTextColor(0,0,0);
$pdf->setXY(50,170);
$pdf->cell(40,20,'Amit',0,0,'C');
$pdf->setFont('Times','',30);
$pdf->setTextColor(0,0,0);
$pdf->setXY(90,170);
$pdf->cell(40,20,'Chaudhery',0,0,'C');
$pdf->setFont('Times','',20);
$pdf->setTextColor(0,0,0);
$pdf->setXY(70,180);
$pdf->cell(40,20,'MD & CEO',0,0,'C');
$txt="912,9th Floor,Lodha Supremus II,B Wing,Wagle Estate,Road No 22,Thane West,Mumbai,Maharashtra 400604.";
$pdf->setFont('Times','',15);
$pdf->setTextColor(0,0,0);
$pdf->setXY(70,215);
$pdf->cell(10,5,'912,9th Floor,Lodha Supremus II,',0,1,'');
$pdf->setXY(70,220);
$pdf->cell(10,5,'B Wing,Wagle Estate,Road No 22,',0,1,'');
$pdf->setXY(70,225);
$pdf->cell(10,5,'Thane West,Mumbai,Maharashtra 400604',0,1,'');
$pdf->setFont('Times','',20);
$pdf->setXY(70,237);
$pdf->cell(10,5,'sarestates@gmail.com',0,1,'');
$pdf->setFont('Times','',20);
$pdf->setXY(70,256);
$pdf->cell(10,5,'+91 95080 22222',0,1,'');
$pdf->setFont('Times','',20);
//$pdf->setXY(93,271);
//$pdf->cell(10,5,'www.sarestates.in',0,1,'C');
$pdf->Text(70,279,'www.sarestates.in');
$pdf->Output();
?>