<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="container">
            <div class="box">
                <form method="POST">
                    <h1>CALCULADORA DE SOMAR</h1>
                <?php 


                $valor1 = isset($_POST['valor1']) ? $_POST['valor1'] : null;
                $valor2 = isset($_POST['valor2']) ? $_POST['valor2'] : null;
                $soma = $valor1 + $valor2;
                $result = number_format($soma, 2, ',', '.');
                echo "<input placeholder='$result' class='caixa' disabled='disabled'>";

?>
                    <input type="text" id="valor1" name="valor1"  onkeypress='return SomenteNumero(event)' required autocomplete="off">
                    <label>+</label>
                    <input type="text" id="valor2" name="valor2"  onkeypress='return SomenteNumero(event)' required autocomplete="off">
                    <button type="submit">Somar</button>
                </form>
            </div>
        </div>
    </section>

    <script>
        function SomenteNumero(e){
    var tecla=(window.event)?event.keyCode:e.which;   
    if((tecla==13 || tecla>47 && tecla<58)) return true;
    else{
    	if (tecla==8 || tecla==0) return true;
	else  return false;
    }

}
</script>
<script src="https://rawgit.com/BankFacil/vanilla-masker/master/lib/vanilla-masker.js"></script>

</body>
</html>