<?php
$anvandarnamn = $_POST["användarnamn"];
$losenored = $_POST["lösenord"];

if ($anvandarnamn == $losenored) {
  echo "Välkomen till webbsidan, din inloggning lyckades!";
}
else {
  echo "Det gick inte att logga in.";
}

?>