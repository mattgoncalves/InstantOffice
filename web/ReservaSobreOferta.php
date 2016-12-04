<html>
    <body>
<?php
    $morada = $_POST['morada'];
    $codigo = $_POST['codigo'];
    $data_inicio = $_POST['data_inicio'];
    $data_fim = $_POST['data_fim'];
    $tarifa = $_POST['tarifa'];
    $numero = $_POST['numero'];
    try
    {
        $host = "db.ist.utl.pt";
        $user ="xxxxxxx";
        $password = "xxxxxxx";
        $dbname = $user;
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $db->query("start transaction;");
       
        $query1 = "INSERT INTO reserva (numero) VALUES ('$numero')";
        $db->exec($query1);
        echo "Nova reserva criada com sucesso\n";

        $query2 = "INSERT INTO estado (numero,time_stamp,estado) VALUES ('$numero',CURRENT_TIMESTAMP,'pendente')";
        $db->exec($query2);
        echo "Tabela estado atualizada com a nova reserva pendente\n";

    
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