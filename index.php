<?php

/**
 * 1. Récupérer le contenu du fichier lire.txt à l'aide de la fonction file_get_contents
 * 2. Afficher le contenu du fichier dans un div
 */
// TODO Votre code ici.
$lire = file_get_contents('lire.txt');
if($lire !== false) {
    echo "<div> $lire </div>";
}
/**
 * 3. Faites la même chose à l'aide d'une boucle et de la fonction fgets(), récupérez les lignes du fichier une à une.
 * 4. Affichez le contenu de chaque ligne dans un nouveau span.
 * --> N'oubliez pas de fermer votre fichier.
 */
// TODO Votre code ici.
$file = fopen('lire.txt', 'rb');

while($ligne = fgets($file)) {
    echo "<div> $ligne </div>";
}

fclose($file);

/**
 * 5. Récupérez les caractères un à un et n'affichez le caractère que s'il s'agit d'autre chose qu'un espace, qu'un point ou qu'un point d'interrogation / exclamation.
 * --> N'oubliez pas de fermer votre fichier.
 */
// TODO Votre code ici.
$fule = fopen('lire.txt', 'rb');

while($char = fgetc($fule)) {
    if($char !== ' ' && $char !== '.' && $char !== '!' && $char !== '?') {
        echo "<p> $char </p>";
    }
}

fclose($fule);

/**
 * 6. Ne cherchez pas la logique dans cet exo ^^
 */