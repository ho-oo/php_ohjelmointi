
<!--- Tässä on html demo -----!>
<html>
<body>
<form action="7_tervehdys.php" method="post">
Anna etunimesi:<input type="text" name="name">
<br>
Eemelikin: <input type="text" name="email"><br>
<input type="submit">
</form>
</body>
</html>

<?php // Tässä on php-tiedoso
/* harjoitus 7 */ ?>

<html>
<body>
Tervetuloa <?php echo $_POST["name"];?><br>
Käytät s-postiosoitetta:<?php echo $_POST["email"];?>
</body>

</html>

