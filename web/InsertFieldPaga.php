<html>
    <body>
        <h3>Escolha a reserva a pagar</h3>
        <form action="UpdatePaga.php" method="post">
            <p><input type="hidden" name="numero" value="<?=$_REQUEST['numero']?>"/></p>
            <p>Numero: <input type="text" name="numero"/></p>
            <p><input type="hidden" name="metodo" value="<?=$_REQUEST['metodo']?>"/></p>
            <p>Metodo: <input type="text" name="metodo"/></p>
            <p><input type="submit" value="Pagar"/></p>
        </form>
    </body>
</html>