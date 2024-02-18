<!DOCTYPE html>
<html>
    <head><title>Vaatii kirjautumisen</title></head>
    <body>

<?php
print "<h2>Kirjaudu</h2>";
?>
<form action='tarkistakirjautuminen.php' method='post'>
Tunnus: <input type='text' name='tunnus' value=''><br>
Salasana: <input type='password' name='salasana' value=''><br>
<input type='submit' name='ok' value='OK'><br>
</form>
    </body>
</html>