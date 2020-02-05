<?php
require('fpdf/fpdf.php');
class MYPDF extends FPDF
{
    public function Header()
    {
        $this->Image('banner/banner5.jpg',0,0,300,210);
    }
}
$pdf = new MYPDF();
$pdf->AddFont('Verdanaz','','verdanaz.php');
$pdf->AddFont('Trebuchet','','trebuchet.php');
$pdf->AddFont('Helvetica','','helvetica.php');
$pdf->AddFont('Vnihelve','','vni_helve.php');
$pdf->AddPage('L'); 
$pdf->Image('images/office.png',20,0,100,50,'PNG');
$pdf->setFont('Verdanaz','',40);
$pdf->setXY(210,20);
$pdf->setTextColor(255,255,255);
$pdf->Cell(20,10,"HEADLINE",0,1,'C');
$pdf->setFont('Times','',25);
$pdf->setXY(202,35);
$pdf->setTextColor(255,255,255);
$pdf->Cell(20,10,"Real Estate Advisors",0,1,'C');
$txt="To be the most preferred & trusted profitable leader globally for diverse real estate services to enhance the lifestyle of our customers and stakeholders.";
$pdf->setFont('Verdanaz','',10);
$pdf->setTextColor(255,255,255);
$pdf->setXY(180,87);
$pdf->multicell(55,8,$txt,0);
$pdf->Image('images/mission.png',20,70,15,10,'PNG');
$pdf->setFont('Verdanaz','',20);
$pdf->setTextColor(0,0,0);
$pdf->setXY(35,71);
$pdf->cell(55,8,'OUR MISSION',0,1,'C');
$pdf->setFont('Times','',8);
$pdf->setXY(35,80);
$pdf->multicell(40,4,$txt,0);
$pdf->Image('images/vision.png',20,110,15,15,'PNG');
$pdf->setFont('Verdanaz','',20);
$pdf->setTextColor(0,0,0);
$pdf->setXY(34,113);
$pdf->cell(55,8,'OUR VISION',0,1,'C');
$txt1="To transform the Real estate industry by empowering and delivering for positive change and innovation that rediscovers the quality of services. To have a customer centric approach with highest level of satisfaction coupled with pro-active and passionate team to achieve the goals Building trust through exploring and integrating with dedication, honesty, integrity and transparency.";
$pdf->setFont('Times','',8);
$pdf->setXY(37,122);
$pdf->multicell(40,4,$txt1,0);
$pdf->Image('images/facebook.png',145,166,7,8,'PNG','www.facebook.com');
$pdf->setFont('Vnihelve','',10);
$pdf->setXY(170,165);
$pdf->setTextColor(255,255,255);
$pdf->Cell(20,10,"www.facebook.com/sarestates",0,1,'C');
$pdf->Image('images/linkedin.png',210,166,7,8,'PNG','www.linkedin.com');
$pdf->setXY(233,165);
$pdf->setTextColor(255,255,255);
$pdf->Cell(20,10,"www.linkedin.com/sarestates",0,1,'C');
$pdf->setFont('Vnihelve','',9);
$pdf->setTextColor(0,0,0);
$pdf->Text(115,199,'B-912,Lodh Supermeus,Wagle estate');
$pdf->Text(190,199,'+91 95080 22222');
$pdf->Text(245,199,'www.sarestates.in');
$pdf->Output();
?>