<?php

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
      $vraag1 = test_input($_GET["graag"]);
      $vraag2 = test_input($_GET["opschieten"]);
      $vraag3 = test_input($_GET["getal"]);
      $vraag4 = test_input($_GET["vakantie"]);
      $vraag5 = test_input($_GET["beste"]);
      $vraag6 = test_input($_GET["slechtste"]);
      $vraag7 = test_input($_GET["ergste"]);
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

	

 
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Mad libs</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="madtitle">Mad Libs</h1>
    <div class="center">
        <nav>
            <a href="madlibs.html">Er heerst paniek...</a>
            <a href="onkunde.html">Onkunde</a>
        </nav>
        <h1 id="title">Er heerst paniek...</h1>
       	<div class="tekst">
       		<?php
       			echo " <p class=\"kaas\">Er zijn veel mensen die niet kunnen".$vraag1." Neem nou ".$vraag2.". Zelfs met behulp van een ".$vraag4." of zelfs ".$vraag3." kan ".$vraag2." niet tekenen. Dat heeft niet te maken met een gebrek aan ".$vraag5.", maar met een teveel aan ".$vraag6.". Te veel".$vraag6."leidt tot ".$vraag7." en dat is niet goed als je wilt ".$vraag1.". Helaas voor ".$vraag2.".</p>";
       		?>
       	</div>
        <footer class="footer"><p>© Rick Snijders - 2020</p> </footer>
    </div>


</body>
</html>