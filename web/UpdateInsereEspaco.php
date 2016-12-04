<html>
    <body>
<?php
    $morada = $_POST['morada'];
    $codigo = $_POST['codigo'];
    $foto = $_POST['foto'];
    try
    {
        $host = "db.ist.utl.pt";
        $user ="xxxxxxx";
        $password = "xxxxxxx";
        $dbname = $user;
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "INSERT INTO alugavel VALUES ('$morada','$codigo','$foto')";
        $db->exec($query);
     
        $query1 = "INSERT INTO espaco VALUES ('$morada','$codigo')";
        $db->exec($query1);
        echo "Novo espaco criado com sucesso";
    
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
