<html>
    <body>
        <h3>Escolha um edificio com a sua morada</h3>
        <form action="EdificioEscolhido.php" method="post">
            <p><input type="hidden" name="morada" value="<?=$_REQUEST['morada']?>"/></p>
            <p>Morada: <input type="text" name="morada"/></p>
            <p><input type="submit" value="Inserir"/></p>
        </form>
    </body>
</html>