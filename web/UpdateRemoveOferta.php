<html>
    <body>
<?php
     $morada = $_POST['morada'];
    $codigo = $_POST['codigo'];
    $data_inicio = $_POST['data_inicio'];
    $data_fim = $_POST['data_fim'];
    $tarifa = $_POST['tarifa'];
    try
    {
        $host = "db.ist.utl.pt";
        $user ="xxxxxxx";
        $password = "xxxxxxx";
        $dbname = $user;
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $db->query("start transaction;");
        $query = "DELETE FROM oferta WHERE morada=('$morada') AND codigo=('$codigo') AND data_inicio=('$data_inicio') AND data_fim=('$data_fim') AND tarifa=('$tarifa')";     
        $db->exec($query);
        echo "Oferta removida com sucesso";

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
