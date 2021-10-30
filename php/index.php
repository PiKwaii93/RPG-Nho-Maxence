<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <?php

        include "pdo.php";
        include "personnage.php";

        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        function button1() {
            global $pdo;

            if (isset($_POST['classe'])){
                $choix = $_POST['classe'];
                if ($choix=="guerrier") {
                   $classe = "guerrier";
                }
                elseif ($choix=="mage"){
                    $classe = "mage";
                }
            }

            $nom = $_POST['nom'];
            print($nom);


            if($classe=="guerrier"){
                $stack = new Guerrier($nom);
            }elseif ($classe=="mage") {
                $stack = new Mage($nom);
            }
            print("<br>");
            print($stack->role);
            print("<br>");
            print($stack->nom);
            print("<br>");
            print($stack->pv);
            print("<br>");
            print($stack->force);
            print("<br>");
            print($stack->defense);
            print("<br>");
            print($stack->statut);

            $timer = new Datetime();

            $requete = $pdo->prepare("INSERT INTO `RPG`.`Personnages` (`id`, `role`, `nom`, `pv`, `force`, `defense`, `statut`, `time`) VALUES (0,:rolee,:nom,:pv,:forcee,:defense,:statut,NOW())");
            $requete->execute( array(
                'rolee' => $stack->getRole(),
                'nom' => $stack->getNom(),
                'pv' => $stack->getPv(),
                'forcee' => $stack->getForce(),
                'defense' => $stack->getDefense(),
                'statut' => $stack->getStatut()
                )
            );
        }


    ?>
  
    <form method="post">
        <label for="class-select">Choississez une classe:</label>

        <select name="classe" id="classe-selectioné">
            <option value="">--Classe...--</option>
            <option value="guerrier">Guerrier</option>
            <option value="mage">Mage</option>
        </select>

        <label for="nom">Entrez le nom de votre personnage:</label>
        <input type="text" id="nom" name="nom" required>
        <input type="submit" name="button1"class="button" value="Button1" />
    </form>
</body>
</html>