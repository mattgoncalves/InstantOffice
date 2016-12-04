<html>
    <body>
        <h3>Preencha os campos</h3>
        <form action="UpdateRemoveEspaco.php" method="post">
            <p><input type="hidden" name="morada" value="<?=$_REQUEST['morada']?>"/></p>
            <p>Morada: <input type="text" name="morada"/></p>
            <p><input type="hidden" name="codigo" value="<?=$_REQUEST['codigo']?>"/></p>
            <p>Codigo: <input type="text" name="codigo"/></p>
            <p><input type="hidden" name="foto" value="<?=$_REQUEST['foto']?>"/></p>
            <p>Foto: <input type="text" name="foto"/></p>
            <p><input type="submit" value="Remover"/></p>
        </form>
    </body>
</html>