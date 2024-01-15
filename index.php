<?php 

echo "Censor a random word! :D " . "<br>";

$paragr = "She waits, arms folded.  A small black-and white TV next to her register shows George Bush on the White House lawn with helicopter rotors spinning behind him.";

echo str_replace($_GET["censoredWord"],"***",$paragr);

?>

<form action="./index.php" method="GET">
    <label for="wordToCensor">Type the word to censor:</label>
    <input type="text" placeholder="Type here" name="censoredWord" id="censoredWord">
    <button type="submit">Censor</button>
</form>



