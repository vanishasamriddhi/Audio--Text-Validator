<?php session_start();
$conn = mysqli_connect("localhost","root","","audio-text");

if(isset($_POST['save_radio']))
{
    $audioI  = $_POST['audioI'];
	$audioII  = $_POST['audioII'];
	$audioIII  = $_POST['audioIII'];
	$audioIV  = $_POST['audioIV'];
	$audioV  = $_POST['audioV'];

    $query = "INSERT INTO demo(audioI,audioII,audioIII,audioIV,audioV) VALUES ('$audioI','$audioII','$audioIII','$audioIV','$audioV')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: landingpage.php");
    }
    else{
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: landingpage.php");
    }
}
    mysqli_report(MYSQLI_REPORT_ERROR| MYSQLI_REPORT_STRICT);
?>