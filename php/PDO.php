<?php 

$dsn = "mysql:host=db";
$user = "root";
$pwd = "example";
$pdo = new PDO($dsn, $user, $pwd);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->query("CREATE DATABASE IF NOT EXISTS RPG");

$pdo->query("CREATE TABLE IF NOT EXISTS`RPG`.`Personnages` ( `id` INT NOT NULL AUTO_INCREMENT, `role` VARCHAR(50) NOT NULL, `nom` VARCHAR(50) NOT NULL, `pv` INT NOT NULL, `force` INT NOT NULL, `defense` INT NOT NULL, `statut` BOOLEAN NOT NULL DEFAULT FALSE, `time` DATETIME , PRIMARY KEY (`id`)  ) ENGINE = InnoDB;");

$requete = $pdo->query("SELECT * FROM `RPG`.`Personnages`");

function delete($nom,$pv){
    if($pv<=0){
        $pdo->query("DELETE FROM `RPG`.`Personnages` WHERE nom=$nom");
    }
}

?><form method="post">
    <p>Selectionnez votre personnage</p>
<?php
$compteur=1;
while($data = $requete->fetch()){
    ?>
        <div>
            <input type="radio" id="name<?php echo $compteur ?>" name="name" value="<?php $data["nom"] ?>">
            <label for="huey"><?php $data["nom"] ?></label>
        </div>
    <?php
    echo($data["role"]);
    echo("<br>");
    echo($data["nom"]);
    echo("<br>");
    echo($data["pv"]);
    echo("<br>");
    echo($data["force"]);
    echo("<br>");
    echo($data["defense"]);
    echo("<br>");
    echo($data["time"]);
    ?>
    <div>
            <button id="attaquer" name="attaquer<?php echo $compteur ?>">Attaquer</button>
            <button id="endormir" name="endormir<?php echo $compteur ?>">Endormir</button>
        
    </div>
    <?php 
    echo("<br>");

    if(array_key_exists('attaquer'.$compteur, $_POST)) {

    }

    $compteur+=1;
    delete($data["nom"], $data["pv"]);

}
?></form><?php


?>