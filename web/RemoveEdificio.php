<html>
    <body>
        <h3>Preencha os campos</h3>
        <form action="UpdateRemoveEdificio.php" method="post">
            <p><input type="hidden" name="morada" value="<?=$_REQUEST['morada']?>"/></p>
            <p>Morada: <input type="text" name="morada"/></p>
            <p><input type="submit" value="Remover"/></p>
        </form>
    </body>
</html>