<?php 
//connect to database
$conn= mysqli_connect('localhost', 'root', '','collegeproject');
$sql="SELECT * FROM recent";
$result= mysqli_query($conn,$sql);
$files=mysqli_fetch_all($result, MYSQLI_ASSOC);
// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];
    // fetch file to download from database
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'pdf/recent/' . $file['pdf_file'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        readfile('pdf/recent/' . $file['pdf_file']);

        exit;
    }

}
 ?>