<html>
<body>
<form action="09_demo.php" method="post">
Anna etunimesi: <input type="text" name="name"><br>
Eemelikin: <input type="text" name="email"><br>
<input type="submit">
</form>
KOHTA NÄKYY

PHP:n avulla voidaan tehdä dynaamisia www-sivustoja. Tällä tarkoitetaan sitä, että www-sivusto reagoi jotenkin käyttäjän antamiin syötteisiin tai ajankohtaan. PHP:n avulla voisi toteuttaa esimerkiksi salasanasuojauksen www-sivustolle tai tehdä ulkoasusta sellaisen, että taustaväri vaihtaa väriä kellonajan mukaan.

<?php echo $_POST["name"]; ?><br>

<?php echo $_POST["email"]; ?>
</body>
</html>

