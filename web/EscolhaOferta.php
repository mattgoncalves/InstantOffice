   <body>
        <h3>Escolha a oferta inserindos os dados da mesma</h3>
        <form action="ReservaSobreOferta.php" method="post">
            <p><input type="hidden" name="morada" value="<?=$_REQUEST['morada']?>"/></p>
            <p>Morada: <input type="text" name="morada"/></p>
             <p><input type="hidden" name="codigo" value="<?=$_REQUEST['codigo']?>"/></p>
            <p>Codigo: <input type="text" name="codigo"/></p>
             <p><input type="hidden" name="morada" value="<?=$_REQUEST['data_inicio']?>"/></p>
            <p>Data inicio: <input type="text" name="data_inicio"/></p>
             <p><input type="hidden" name="morada" value="<?=$_REQUEST['data_fim']?>"/></p>
            <p>Data Fim: <input type="text" name="data_fim"/></p>
             <p><input type="hidden" name="morada" value="<?=$_REQUEST['tarifa']?>"/></p>
            <p>Tarifa: <input type="text" name="tarifa"/></p>
            <p><input type="hidden" name="morada" value="<?=$_REQUEST['numero']?>"/></p>
            <p>Numero da reserva: <input type="text" name="numero"/></p>
            <p><input type="submit" value="Inserir"/></p>
        </form>
    </body>
</html>