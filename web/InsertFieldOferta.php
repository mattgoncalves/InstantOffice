<html>
    <body>
        <h3>Preencha os campos</h3>
        <form action="UpdateInsereOferta.php" method="post">
            <p><input type="hidden" name="morada" value="<?=$_REQUEST['morada']?>"/></p>
            <p>Morada: <input type="text" name="morada"/></p>
            <p><input type="hidden" name="codigo" value="<?=$_REQUEST['codigo']?>"/></p>
            <p>Codigo: <input type="text" name="codigo"/></p>
            <p><input type="hidden" name="data_inicio" value="<?=$_REQUEST['data_inicio']?>"/></p>
            <p>Data Inicio: <input type="text" name="data_inicio"/></p>
            <p><input type="hidden" name="data_fim" value="<?=$_REQUEST['data_fim']?>"/></p>
            <p>Data Fim: <input type="text" name="data_fim"/></p>
            <p><input type="hidden" name="tarifa" value="<?=$_REQUEST['tarifa']?>"/></p>
            <p>Tarifa: <input type="text" name="tarifa"/></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
    </body>
</html>