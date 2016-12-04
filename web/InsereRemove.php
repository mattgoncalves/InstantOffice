<html>
    <body>
    <h3>Inserir e remover espacos,postos e edificios</h3>
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
        $sql2 = "SELECT morada,codigo,codigo_espaco FROM posto;";
        $sql3 = "SELECT morada FROM edificio;";
        $sql4 = "SELECT morada,codigo,data_inicio,data_fim,tarifa FROM oferta;";
        $sql5 = "SELECT numero FROM reserva;";
        $sql6 = "SELECT numero,data_inicio,metodo FROM paga;";
       
     
        $result2 = $db->query($sql3);
    
        echo("<table border=\"0\" cellspacing=\"5\" >\n");

     
        echo("<tr>");
        echo("<td><a href=\"InsertFieldEdificio.php\">Inserir edificio</a></td");

        echo("<td>");
        echo("</td>");

        echo("<td><a href=\"RemoveEdificio.php\">Remover edificio</a></td\n");
        echo("</tr>");
              
        echo("</table>\n");

        $result = $db->query($sql1);
    
        echo("<table border=\"0\" cellspacing=\"5\">\n");
        echo("<tr>");

        echo("<td><a href=\"InsertFieldEspaco.php\">Inserir espaco</a></td");
        echo("<td>");
        echo("</td>");

        echo("<td><a href=\"RemoveEspaco.php\">Remover espaco</a></td\n");
        echo("</tr>");
        echo("</table>\n");

        $result3 = $db->query($sql2);
    
        echo("<table border=\"0\" cellspacing=\"5\" >\n");

     
        echo("<tr>");
        echo("<td><a href=\"InsertFieldPosto.php\">Inserir posto</a></td");

        echo("<td>");
        echo("</td>");

        echo("<td><a href=\"RemovePosto.php\">Remover posto</a></td\n");
        echo("</tr>");
              
        echo("</table>\n");

        $result4 = $db->query($sql4);
    
        echo("<table border=\"0\" cellspacing=\"5\" >\n");

     
        echo("<tr>");
        echo("<td><a href=\"InsertFieldOferta.php\">Inserir Oferta</a></td");

        echo("<td>");
        echo("</td>");

        echo("<td><a href=\"RemoveOferta.php\">Remover Oferta</a></td\n");
        echo("</tr>");
              
        echo("</table>\n");

        $result5 = $db->query($sql3);
    
        echo("<table border=\"0\" cellspacing=\"5\" >\n");

     
        echo("<tr>");
        echo("<td><a href=\"EscolhaEdificio.php\">Escolher edificio</a></td");
        echo("</tr>");
              
        echo("</table>\n");

         $result5 = $db->query($sql5);
    
        echo("<table border=\"0\" cellspacing=\"5\" >\n");

     
        echo("<tr>");
        echo("<td><a href=\"InsertFieldPaga.php\">Pagar Reserva</a></td");
        echo("</tr>");
              
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
        