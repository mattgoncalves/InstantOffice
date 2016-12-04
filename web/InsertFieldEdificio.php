<html>
    <body>
        <h3>Preencha os campos</h3>
        <form action="UpdateEdificio.php" method="post">
            <p><input type="hidden" name="morada" value="<?=$_REQUEST['morada']?>"/></p>
            <p>Morada: <input type="text" name="morada"/></p>
            <p><input type="submit" value="Inserir"/></p>
        </form>
    </body>
</html>