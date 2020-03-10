<?php

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //       if (empty($_POST["huisdier"])) {
    //         $nameErr = "Name is required";
    //       } else {
    //         $name = test_input($_POST["huisdier"]);
    //       }
          
    //       if (empty($_POST["persoon"])) {
    //         $nameErr = "Name is required";
    //       } else {
    //         $name = test_input($_POST["persoon"]);
    //       }
          
    //       if (empty($_POST["wonen"])) {
    //         $nameErr = "Name is required";
    //       } else {
    //         $name = test_input($_POST["wonen"]);
    //       }
          
    //       if (empty($_POST["verveelt"])) {
    //         $nameErr = "Name is required";
    //       } else {
    //         $name = test_input($_POST["verveelt"]);
    //       }

    //       if (empty($_POST["speelgoed"])) {
    //         $nameErr = "Name is required";
    //       } else {
    //         $name = test_input($_POST["speelgoed"]);
    //       }

    //       if (empty($_POST["spijbel"])) {
    //         $nameErr = "Name is required";
    //       } else {
    //         $name = test_input($_POST["spijbel"]);
    //       }

    //       if (empty($_POST["geld"])) {
    //         $nameErr = "Name is required";
    //       } else {
    //         $name = test_input($_POST["geld"]);
    //       }

    //       if (empty($_POST["bezigheid"])) {
    //         $nameErr = "Name is required";
    //       } else {
    //         $name = test_input($_POST["bezigheid"]);
    //       }
    // }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $vraag1 = test_input($_POST["huisdier"]);
      $vraag2 = test_input($_POST["persoon"]);
      $vraag3 = test_input($_POST["wonen"]);
      $vraag4 = test_input($_POST["verveelt"]);
      $vraag5 = test_input($_POST["speelgoed"]);
      $vraag6 = test_input($_POST["spijbel"]);
      $vraag7 = test_input($_POST["geld"]);
      $vraag8 = test_input($_POST["bezigheid"]);
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
            <a href="#">Er heerst paniek...</a>
            <a href="onkunde.html">Onkunde</a>
        </nav>
        <h1 id="title">Er heerst paniek...</h1>
        <div class="tekst">
            <?php
            echo "Er heerst paniek in het koninkrijk " .$vraag3." Koning ".$vraag6." is ten einde raad en als koning ".$vraag6." ten einde raad is, dan roept hij zijn ten-einde-raadsheer ".$vraag2."<br><br>".
                '"'.$vraag2.'! Het is een ramp! Het is een schande!"<br><br>'.
                '"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>'.
                '"Mijn '.$vraag1.' is verdwenen! Zo maar, zonder waarschuwing. En ik had net '.$vraag5.' voor hem gekocht!"<br><br>'.
                '"Majesteit, uw '.$vraag1.' komt vast vanzelf terug?"<br><br>'.
                '"Ja, da`s leuk en aardig, maar hoe moet ik in de tussentijd '.$vraag8.' leren?"<br><br>'.
                '"Maar Sire, daar kunt u toch uw '.$vraag7.' voor gebruiken."<br><br>'.
                '"'.$vraag2.', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br>'.
                '"'.$vraag4.' Sire."';
            ?>
        </div> 
        <footer class="footer"><p>© Rick Snijders - 2020</p> </footer>
    </div>


</body>
</html>