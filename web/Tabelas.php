<html>
    <body>
<?php
    try
    {
    	$host = "db.ist.utl.pt";
        $user ="xxxxxx";
        $password = "xxxxxxx";
        $dbname = $user;
        
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql1 = "SELECT morada,codigo FROM espaco;";
        $sql6 = "SELECT morada,codigo,foto FROM alugavel";
        $sql2 = "SELECT morada,codigo,codigo_espaco FROM posto;";
        $sql3 = "SELECT morada FROM edificio;";
        $sql4 = "SELECT morada,codigo,data_inicio,data_fim,tarifa FROM oferta;";
        $sql5 = "SELECT numero FROM reserva;";


        $result = $db->query($sql1);
    
        echo("<table border=\"1\">\n");
        echo("<tr>Espaco<td>morada</td><td>codigo</td></tr>\n");

        foreach($result as $row)
        {
            echo("<tr><td>");
            echo($row['morada']);
            echo("</td><td>");
            echo($row['codigo']);
            echo("</td></tr>\n");
        }
        echo("</table>\n");

         $result6 = $db->query($sql6);
    
        echo("<table border=\"1\">\n");
        echo("<tr>Alugavel<td>morada</td><td>codigo</td><td>foto</td></tr>\n");

        foreach($result6 as $row)
        {
            echo("<tr><td>");
            echo($row['morada']);
            echo("</td><td>");
            echo($row['codigo']);
            echo("</td><td>");
            echo($row['foto']);
            echo("</td></tr>\n");
        }
        echo("</table>\n");

        $result2 = $db->query($sql2);
    
        echo("<table border=\"1\">\n");
        echo("<tr>Posto<td>morada</td><td>codigo</td><td>codigo_espaco</td></tr>\n");

        foreach($result2 as $row)
        {
            echo("<tr><td>");
            echo($row['morada']);
            echo("</td><td>");
            echo($row['codigo']);
            echo("</td><td>");
            echo($row['codigo_espaco']);
            echo("</td></tr>\n");
        }
        echo("</table>\n");

        $result3 = $db->query($sql3);
    
        echo("<table border=\"1\">\n");
        echo("<tr>Edificio<td>morada</td></tr>\n");

        foreach($result3 as $row)
        {
            echo("<tr><td>");
            echo($row['morada']);
            echo("</td></tr>\n");
        }
        echo("</table>\n");
        
        $result4 = $db->query($sql4);   

        echo("<table border=\"1\">\n");
        echo("<tr>Oferta<td>morada</td><td>codigo</td><td>data_inicio</td><td>data_fim</td><td>tarifa</td></tr>\n");

        foreach($result4 as $row)
        {
            echo("<tr><td>");
            echo($row['morada']);
            echo("</td><td>");
            echo($row['codigo']);
            echo("</td><td>");
            echo($row['data_inicio']);
            echo("</td><td>");
            echo($row['data_fim']);
            echo("</td><td>");
            echo($row['tarifa']);
            echo("</td></tr>\n");
        }
        echo("</table>\n");

        $result5 = $db->query($sql5);  

        echo("<table border=\"1\">\n");
        echo("<tr>Reserva<td>numero</td></tr>\n");

        foreach($result5 as $row)
        {
            echo("<tr><td>");
            echo($row['numero']);
            echo("</td></tr>\n");
        }
        echo("</table>\n");

    
        $db = null;
    }
    catch (PDOException $e)
    {
        echo("<p>ERROR: {$e->getMessage()}</p>");
    }
?>
    </body>
</html>
