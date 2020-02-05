<?php
require('fpdf/fpdf.php');
class MYPDF extends FPDF
{
    public function Header()
    {
        $this->Image('banner/banner4.jpg',0,0,210,300);
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
$pdf->AddPage(); 
if($row=mysqli_fetch_array($result))
{
    //display data from database
    $pdf->Image($row['logo'],75,23,60,15,'PNG');
    $pdf->ln(40);
    $pdf->ln(2);
    $pdf->setFont('Times','B',15);
    $pdf->setTextColor(255,128,0);
    $pdf->Text(65,45,"SARESTATES Real Estate Advisors");
    
    $pdf->setFont('Times','B',18);
    $pdf->setTextColor(255,51,51);
    $pdf->Text(65,70,"EMPLOYEE OF THE MONTH");
    $pdf->ln(5);
    $pdf->setFont('Times','B',18);
    $pdf->setTextColor(0,0,0);
    $pdf->Text(65,85,"This Certificate is awarded to");
    $pdf->Image($row['emp_profile'],90,95,40,40,'JPG');
    $str=strtoupper($row['emp_name']);
    $pdf->setFont('Times','B',16);
    $pdf->setTextColor(255,51,51);
    $pdf->Text(65,150,$str);
    $pdf->ln(5);
    $str1=$row['desgination'];  $str2=$row['city'];   $str3=$str1." ".$str2;
    $pdf->setFont('Times','B',17);
    $pdf->setTextColor(0,0,0);
    $pdf->Text(70,160,$str3);
    $pdf->setFont('Times','B',10);
    $pdf->Text(75,205,"For being the most outstanding employee for the month");
    $pdf->ln(5);
    $pdf->setFont('Times','B',10);
    $pdf->Text(50,263,"SareStates");
    $pdf->setFont('Times','B',8);
    $pdf->Text(42,267,"Formerly WAY2WEALTH REALTY Advisors");
    $pdf->Text(43,270,"An ISO 9001 : 2015 Certified Company");
}
$pdf->Output();
?>