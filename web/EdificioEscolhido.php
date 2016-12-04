<html>
    <body>
<?php
    $morada = $_POST['morada'];
    
    try
    {
        $host = "db.ist.utl.pt";
        $user ="xxxxxxx";
        $password = "xxxxxxx";
        $dbname = $user;
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


       // $db->query("start transaction;");
        //$query = SELECT sum(tarifa),morada,codigo FROM oferta NATURAL JOIN aluga WHERE morada=('$morada'); 
        $sql="SELECT sum(tarifa), morada,codigo FROM oferta o NATURAL JOIN espaco e WHERE morada = ('$morada') group by morada,codigo;";
  
        $result = $db->query($sql);
        
        echo("<table border=\"1\">\n");
        echo("<tr><td>TarifaSoma</td><td>morada</td><td>codigo</td></tr>\n");

        foreach($result as $row)
        {     echo("<tr><td>");
            echo($row['sum(tarifa)']);
            echo("</td><td>");
            echo($row['morada']);
            echo("</td><td>");
            echo($row['codigo']);
             echo("</td></tr>\n");
        }

         echo("</table>\n");
    
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