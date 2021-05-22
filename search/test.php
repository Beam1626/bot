<form action="" method="post">
    <input type="text" name="brand">
    <input type="summit" value="summit">
</form>

<?php

require("connec.php");

$brand = $_POST['brand'];

$sql = "SELECT * FROM product WHERE brand = '" . $brand . "'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $arr = mysqli_fetch_array($result);
    session_start();
    $_SESSION['name'] = $arr;
    echo  $arr[1] . " " . $arr[2] . " " . $arr[3] . " " . $arr[4] . " " . $arr[5] . " " . $arr[6];
    print_r($_SESSION['name']);
    header("Location:index.php");
    exit;
} else {
    echo "0 results";
}

$conn->close();
?>