<html>
    <body>
<?php
    $morada = $_POST['morada'];
    $codigo = $_POST['codigo'];
    $foto = $_POST['foto'];
    $codigo_espaco = $_POST['codigo_espaco'];
    try
    {
        $host = "db.ist.utl.pt";
        $user ="xxxxxxx";
        $password = "xxxxxxx";
        $dbname = $user;
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $db->query("start transaction;");

        echo("$codigo\n");
        echo("$codigo_espaco");


        $query = "INSERT INTO alugavel VALUES ('$morada','$codigo','$foto')";
        $db->exec($query);


      	$query3 = "INSERT INTO posto VALUES ('$morada','$codigo','$codigo_espaco')";
        $db->exec($query3);

        echo "Novo posto criado com sucesso";
    
        $db->query("commit;");
        $db = null;
        }
        catch (PDOException $e)
        {
            $db->query("rollback;");
            echo("<p>ERROR: {$e->getMessage()}</p>");
        }
?>
    </body>
</html>
