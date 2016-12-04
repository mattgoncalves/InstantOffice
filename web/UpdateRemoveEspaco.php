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

        $db->query("start transaction;");

        $query = "DELETE FROM espaco WHERE morada=('$morada') AND codigo=('$codigo')";     
        $db->exec($query);

        $query2 = "DELETE FROM alugavel WHERE morada=('$morada') AND codigo=('$codigo') AND foto=('$foto')" ;     
        $db->exec($query2);

        echo "Espaco removido com sucesso";
    
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
