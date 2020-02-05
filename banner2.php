<?php
require('fpdf/fpdf.php');
class MYPDF extends FPDF
{
    public function Header()
    {
        $this->Image('banner/banner2.jpg',0,0,300,210);
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
$pdf->AddPage('L'); 
if($row=mysqli_fetch_array($result))
{
    //display data from database
    $pdf->Image($row['logo'],130,35,40,25,'PNG');
    $pdf->ln(40);
    $pdf->ln(2);
    $pdf->setFont('Times','B',20);
    $pdf->setTextColor(238,232,170);
    $pdf->Text(105,70,"EMPLOYEE OF THE MONTH");
    $pdf->ln(5);
    $pdf->setFont('Times','B',22);
    $pdf->setTextColor(212,175,55);
    $pdf->Text(105,85,"This Certificate is awarded to");
    $pdf->Image($row['emp_profile'],140,95,30,30,'JPG');
    $str=strtoupper($row['emp_name']);
    $pdf->setFont('Times','B',18);
    $pdf->setTextColor(238,232,170);
    $pdf->Text(115,140,$str);
    $pdf->ln(5);
    $str1=$row['desgination'];  $str2=$row['city'];   $str3=$str1." ".$str2;
    $pdf->setFont('Times','B',17);
    $pdf->setTextColor(238,232,170);
    $pdf->Text(115,150,$str3);
    $pdf->setFont('Times','B',17);
    $pdf->Text(80,170,"For being the most outstanding employee for the month");
}
$pdf->Output();
?>