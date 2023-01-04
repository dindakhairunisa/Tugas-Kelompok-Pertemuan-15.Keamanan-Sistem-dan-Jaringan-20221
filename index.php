<?php require_once "config.php"; ?>
<! DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>My Website</title>
    </head>

<body>
<h1>KELOMPOK KAMSIJAR 5.1</h1>
<p>
    <img src="grid.jpg" width="200" height="200"/> <img src="bareng.jpg" width="300" height="200"/>
</p>
<a href="index.php">Home</a> |
<a href="index.php?page=page1.php">Page 1</a> |
<a href="index.php?page=page2.php">Page 2</a> |
<a href="index.php?page=page3.php">Page 3</a> |
<a href="index.php?page=page4.php">Page 4</a> |
<a href="index.php?page=page5.php">Page 5</a> 

<hr/>

<?php 

$whitelist = array("page1.php", "page2.php", "page3.php", "page4.php", "page5.php");
if (isset($_GET['page']))
{
    // echo $_GET['page']; page1.php
    if ( !in_array($_GET['page'], $whitelist)){
        die("INVALID PAGE");
    }else{
        include "pages/" . $_GET['page'];
    } 
}
else
{
    echo "<h3>KELOMPOK KAMSIJAR 5.1</h3>
    
    <p><b>Nama Ketua : </b>Dinda Khairunisa</p>
    <p><b>Nama Anggota : </b></p>
    <li>Astri yunika </li>
    <li>Azzahratul Jannah</li>
    <li>Edy safrizal</li>
    <li>ozi harianto</li>";    
}
?>

</body>
</html>

