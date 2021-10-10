<!DOCTYPE html>
<html>
<head>
<title>Belajar PHP - 3 </title>
</head>
<body>
<?php
$nama = array("Satria"=>"xi rpl 1","Arsyi"=>"xi rpl 2","Dhika"=>"xi rpl 3","Evan"=>"xi rpl 4","Fabian"=>"xi rpl 5","Irfan"=>"xi rpl 6");
foreach($nama as $x => $x_value) {
    echo "nama=" . $x . ", kelas=" . $x_value;
    echo "<br>";
}
?>
</body>
</html>