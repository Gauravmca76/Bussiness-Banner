<?php
require('fpdf/fpdf.php');
class MYPDF extends FPDF
{
    public function Header()
    {
        $this->Image('banner/banner1.jpg',0,0,300,210);
    }

}
$con=mysqli_connect("localhost","root","");
if(!$con)
{
    die('Could not connect: '.mysqli_error());
}
mysqli_select_db($con,"sarestates");
$sql="SELECT * FROM tb_employee";
$result=mysqli_query($con,$sql);
$pdf = new MYPDF();
$pdf->AddFont('Verdanaz','','verdanaz.php');
$pdf->AddFont('Trebuchet','','trebuchet.php');
$pdf->AddFont('Helvetica','','helvetica.php');
$pdf->AddFont('Vnihelve','','vni_helve.php');
//$pdf->AddFont('Vnitimes','','vni_times.php');
$pdf->AddPage('L'); 
if($row=mysqli_fetch_array($result))
{
    //display data from database
    $pdf->Image($row['logo'],115,15,65,30,'PNG');
    $pdf->ln(40);
    $pdf->ln(2);
    //$pdf->setFont('Times','B',18);
    $pdf->setFont('Verdanaz','',18);
    $pdf->setTextColor(48, 57, 82);
    $pdf->setXY(140,50);
    $pdf->Cell(20,10,"EMPLOYEE OF THE MONTH",0,1,'C');
    $pdf->ln(5);
    //$pdf->setFont('Times','B',20);
    $pdf->setFont('Verdanaz','',18);
    $pdf->setTextColor(0,0,0);
    $pdf->setXY(140,65);
    $pdf->Cell(20,10,"This Certificate is awarded to",0,1,'C');
    $pdf->Image($row['emp_profile'],130,80,40,40,'JPG');
    $str=strtoupper($row['emp_name']);
    $pdf->setFont('Times','',18);
    $pdf->setTextColor(48, 57, 82);
    $pdf->setXY(140,128);
    $pdf->Cell(20,10,$str,0,1,'C');
    $pdf->ln(5);
    $str1=$row['desgination'];  $str2=$row['city'];   $str3=$str1." ".$str2;
    $pdf->setFont('Times','B',17);
    $pdf->setTextColor(0,0,0);
    $pdf->setXY(135,138);
    $pdf->Cell(20,10,$str3,0,1,'C');
    
}
$pdf->Output();
?>