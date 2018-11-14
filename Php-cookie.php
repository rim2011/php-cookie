<?php
setcookie("mycookie","my cookie",time()+60);

echo "<html><head><title>PHP COOKIE</title></head>";

if (!isset($_COOKIE['mycookie']))
{ echo "<link rel = 'stylesheet' type = 'text/css' href = 'defaut.css' >" ;}
else
{ echo "<link rel = 'stylesheet' type = 'text/css' href = 'special.css' > ";}

echo"<body>
<p>Écrire un script PHP qui crée une page HTML simple, avec un titre et un peu de texte.
Créer deux fichiers CSS pour cette page, defaut.css et special.css, qui donnent des rendus très différents 
(par exemple différentes couleurs de fond).
En utilisant les cookies, faire en sorte que le CSS utilisé soit defaut.css lors de la première visite d'un·e internaute,
et special.css si l'internaute a déjà visité la page il y a moins d'un an.
Modifier le code précédent, pour que le site ne se souvienne de l'internaute que pendant une minute.</p></body></html>";


