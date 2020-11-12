<?php

session_start();
$bejelentkezve = isset($_SESSION['fnev']);

$hiba = '';
if(isset($_GET['hiba'])){
    $hiba =$_GET['hiba'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginke</title>
</head>
<body>
    
    <?php if($bejelentkezve): ?>

        <form action="kijelentkez.php" method="post">
            <input type="submit" value="Kijelentkez">
        </form>

    <?php else: ?>

        <form action="bejelentkez.php" method="post">
            Felhasználónév: <input name="fnev"> <br>
            Jelszó: <input name="jszo" type="password"> <br>
            <input type="submit" value="Bejelentkez">
        </form>

        <form action="regisztral.php" method="post">
            Felhasználónév: <input name="fnev"> <br>
            Jelszó: <input name="jszo1" type="password"> <br>
            Jelszó újra: <input name="jszo2" type="password"> <br>
            <input type="submit" value="Regisztrál">
        </form>

        <?php if($hiba != ''): ?>
            <div>
                <?php if($hiba == 'rosszadatok'): ?>
                    Hibás bejelentkezési adatok!
                <?php elseif($hiba == 'fletezik'): ?>
                    A felhasználónév már foglalt.
                <?php elseif($hiba == 'fkomplex'): ?>
                    A felhasználónév csak betűket és számokat tartalmazhat.
                <?php elseif($hiba == 'jszokul'): ?>
                    A jelszavak nem egyeznek.
                <?php elseif($hiba == 'jhossz'): ?>
                    A jeló legyen legalább 8 karakter hosszú.
                <?php elseif($hiba == 'jkomplex'): ?>
                    A jeló tartalmazzon kisbetűt, nagybetűt, számot és speciális karaktert!
                <?php elseif($hiba == 'fhossz'): ?>
                    A felhasználónév minimum 5, legfeljebb 15 karakter.
                <?php else: ?>
                    Ismeretlen hiba! Hibakód: <?=$hiba?>
                <?php endif ?>
            </div>
        <?php endif ?>

    <?php endif ?>

</body>
</html>