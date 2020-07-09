<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <?php
            $pdo = connect_to_database(BaseTest01);

            $query = $pdo->query ("SELECT * FROM produit"); 
            $user = $query->fetch();
            var_dump($user);

            $users = $pdo->query("SELECT * FROM produit")->fetchAl1();

            var_dump($users); 
            foreach ($users as $user) { 
                echo $user[ 'produit']."<br/>"; 
            }
            





            $spdo { 
            INSERT INTO id VALUES ("id8");
            INSERT INTO nom VALUES ("T-shirt Noir");
            INSERT INTO description VALUES ("T-shirt coton de couleur noir.");
            INSERT INTO prix VALUES ("15.50");
            INSERT INTO quantite VALUES ("10");
        }
        ?>
    </body>
</html>