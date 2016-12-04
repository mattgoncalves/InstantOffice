<html>
    <body>
<?php
    $morada = $_POST['morada'];
    try
    {
        $host = "db.ist.utl.pt";
        $user ="xxxxxxxx";
        $password = "xxxxxxxx";
        $dbname = $user;
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $db->query("start transaction;");
        $query = "INSERT INTO edificio (morada) VALUES ('$morada')";     
        $db->exec($query);
        echo "Novo edificio criado com sucesso";

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
