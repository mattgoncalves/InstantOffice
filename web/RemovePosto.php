<html>
    <body>
        <h3>Preencha os campos</h3>
        <form action="UpdateRemovePosto.php" method="post">
            <p><input type="hidden" name="morada" value="<?=$_REQUEST['morada']?>"/></p>
            <p>Morada: <input type="text" name="morada"/></p>
            <p><input type="hidden" name="codigo" value="<?=$_REQUEST['codigo']?>"/></p>
            <p>Codigo: <input type="text" name="codigo"/></p>
            <p><input type="hidden" name="foto" value="<?=$_REQUEST['foto']?>"/></p>
            <p>Foto: <input type="text" name="foto"/></p>
            <p><input type="hidden" name="codigo_espaco" value="<?=$_REQUEST['codigo_espaco']?>"/></p>
            <p>Codigo_espaco: <input type="text" name="codigo_espaco"/></p>
            <p><input type="submit" value="Remover"/></p>
        </form>
    </body>
</html>