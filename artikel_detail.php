<?php 
include'header.php'; 
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_blog WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>

	<?php include'footer.php'; ?>