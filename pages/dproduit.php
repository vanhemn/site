<!DOCTYPE html>

<html lang='fr'>
  
<link rel="stylesheet" href="../assets/style.css">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  
  <title>E-quitable</title>
  
</head>

<body>
  
  <?php
session_start();
if (isset($_SESSION['c'])){
include('headerC.php');
}
else{
include("headerD.php");
}
    $id = $_GET['p'];
    include('idprod.php');
  ?>

<section id="con">
     <aside> 
        <h4>Laissez Nous un commentaire :<input size="25px" id="comment" type="textarea" name="texte"><a id="comp">submit</a></h4>
     </aside>
 </section>

<div id="footer">
  Copyright © e-quitable<br>
  <a id="cont" href="mailto:vanhem_n@etna-alternance.net">Contact<a/>
</div>
<script type="text/javascript" src="jquery.js" ></script>
<script type="text/javascript" src="dproduit.js" ></script>

</body>

</html>