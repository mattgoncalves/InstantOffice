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
        $query1 = "INSERT INTO oferta (morada, codigo, data_inicio,data_fim,tarifa) VALUES ('$morada','$codigo','$data_inicio','$data_fim','$tarifa')";
        $db->exec($query1);
        echo "Nova oferta criada com sucesso";
    
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
