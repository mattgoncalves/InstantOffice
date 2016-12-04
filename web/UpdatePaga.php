<html>
    <body>
<?php
    $numero = $_POST['numero'];
    $metodo = $_POST['metodo'];
    try
    {
        $host = "db.ist.utl.pt";
        $user ="ist182091";
        $user ="xxxxxxx";
        $password = "xxxxxxx";
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $db->query("start transaction;");
        $data= "SELECT data FROM aluga";
        $query = "INSERT INTO paga (numero,data,metodo) VALUES ('$numero',NOW(),'$metodo')";     
        $db->exec($query);
        echo "Reserva Paga com sucesso";

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