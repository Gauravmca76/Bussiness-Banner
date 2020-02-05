<?php
require('fpdf/fpdf.php');
class MYPDF extends FPDF
{
    public function Header()
    {
        $this->Image('banner/banner6.jpg',0,0,210,300);
    }
}
$pdf = new MYPDF();
$pdf->AddFont('Verdanaz','','verdanaz.php');
$pdf->AddFont('Trebuchet','','trebuchet.php');
$pdf->AddFont('Helvetica','','helvetica.php');
$pdf->AddFont('Vnihelve','','vni_helve.php');
$pdf->AddPage(); 
$pdf->Image('bekreta.png',60,40,90,40,'PNG');
$pdf->setFont('Verdanaz','',25);
$pdf->setTextColor(0,0,0);
$pdf->setXY(100,90);
$pdf->Cell(20,10,"Bekreta Fine to Infinity",0,1,'C');
$pdf->setFillColor(0,0,0);
$pdf->setXY(58,105);
$pdf->cell(100,1,'',0,1,'',true);
$txt="To be provide best platform for design the your business ideas and also maintain the different business in India.";
$pdf->Image('images/missionp.png',60,130,10,10,'PNG');
$pdf->setFont('Times','',8);
$pdf->setXY(45,142);
$pdf->multicell(40,4,$txt,0);
$pdf->setFillColor(255,20,147);
$pdf->setXY(90,130);
$pdf->cell(0.6,33,'',0,0,'',true);
$pdf->Image('images/visionp.png',105,130,10,10,'PNG');
$txt1="To provide best way to desgin the business plan. To meet new business company and take a operutinity to work with highly growth company.";
$pdf->setFont('Times','',8);
$pdf->setXY(95,142);
$pdf->multicell(40,4,$txt1,0);
$pdf->setFillColor(255,20,147);
$pdf->setXY(140,130);
$pdf->cell(0.6,33,'',0,0,'',true);
$pdf->Image('images/settingp.png',150,130,10,10,'PNG');
$txt2="Setting the business for providing the best services to startup-company and Enterpruner company.";
$pdf->setFont('Times','',8);
$pdf->setXY(145,142);
$pdf->multicell(40,4,$txt2,0);

$pdf->setFont('Times','',10);
$pdf->setTextColor(255,255,255);
$pdf->Text(25,283,'+91 95080 22222');
$pdf->setFont('Times','',11);
$pdf->Text(60,283,'bekreta@gmail.com');
$pdf->Text(150,283,'www.bekreta.com');
$pdf->setFont('Times','',9);
$pdf->Text(115,283,'Thane, Maharashtra.');
$pdf->Output();
?>