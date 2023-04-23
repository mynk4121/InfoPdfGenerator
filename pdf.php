<?php
if(isset($_POST['submit']))
{
    // get form data
    $f_name=$_POST['firstname'];
    $l_name=$_POST['lastname'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];

    // generate unique ID
    $uuid = uniqid();

    // connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db1";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // prepare and execute SQL statement to insert data
    $stmt = $conn->prepare("INSERT INTO form_data (id, first_name, last_name, phone, city) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $uuid, $f_name, $l_name, $phone, $city);
    $stmt->execute();

    // close statement and connection
    $stmt->close();
    $conn->close();

    // generate PDF with form data and unique ID
  require("fpdf/fpdf.php");
    $pdf=new FPDF();
    $pdf->SetTitle("Personal Information");
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(30,10,"Personal Information");
    $pdf->Ln();
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(30,10,"UUID",1,0,'C');
    $pdf->Cell(30,10,"First Name",1,0,'C');
    $pdf->Cell(30,10,"Last Name",1,0,'C');
    $pdf->Cell(40,10,"Phone Number",1,0,'C');
    $pdf->Cell(30,10,"City",1,0,'C');
    $pdf->Ln();
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(30,10,$uuid,1,0,'C');
    $pdf->Cell(30,10,$f_name,1,0,'C');
    $pdf->Cell(30,10,$l_name,1,0,'C');
    $pdf->Cell(40,10,$phone,1,0,'C');
    $pdf->Cell(30,10,$city,1,0,'C');
    $pdf->Output();
}
?>


