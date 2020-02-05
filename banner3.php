<?php
require('fpdf/fpdf.php');
class MYPDF extends FPDF
{
    public function Header()
    {
        $this->Image('banner/banner3.jpg',0,0,210,300);
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
    $pdf->Image($row['logo'],75,12,60,15,'PNG');
    $pdf->ln(40);
    $pdf->ln(2);
    $pdf->setFont('Times','B',15);
    $pdf->setTextColor(255,128,0);
    $pdf->Text(65,40,"SARESTATES Real Estate Advisors");
    
    $pdf->setFont('Times','B',20);
    $pdf->setTextColor(255,51,51);
    $pdf->Text(60,70,"EMPLOYEE OF THE MONTH");
    $pdf->ln(5);
    $pdf->setFont('Times','B',22);
    $pdf->setTextColor(0,0,0);
    $pdf->Text(60,85,"This Certificate is awarded to");
    $pdf->Image($row['emp_profile'],90,95,40,40,'JPG');
    $str=strtoupper($row['emp_name']);
    $pdf->setFont('Times','B',18);
    $pdf->setTextColor(255,51,51);
    $pdf->Text(70,150,$str);
    $pdf->ln(5);
    $str1=$row['desgination'];  $str2=$row['city'];   $str3=$str1." ".$str2;
    $pdf->setFont('Times','B',17);
    $pdf->setTextColor(0,0,0);
    $pdf->Text(70,160,$str3);
    $pdf->setFont('Times','B',17);
    $pdf->Text(40,200,"For being the most outstanding employee for the month");
}
$pdf->Output();
?>