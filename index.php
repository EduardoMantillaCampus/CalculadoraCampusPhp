<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de datos </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenido">
        <div class="txt">
            <h2>SPUTNIK</h2>
        </div>
        <form action="uploads/api.php" style="display:none">
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" require name="nombre" value="Edgar">
            </div>
            <div class="form-group">
                <label for="">Apellido</label>
                <input type="text" require name="apellido" value="Mantilla">
            </div>
            <div class="form-group">
                <label for="">Documento</label>
                <input type="text" require name="documento" value="1.200.300.400">
            </div>
            <div class="form-group">
                <label for="">Edad</label>
                <input type="number" require name="edad" value="22">
            </div>
            <button>Enviar</button>
        </form>
        <form action="uploads/api.php" method="POST">
            <div class="form-group">
                <label for="">Numero 1</label>
                <input type="number" require name="num1" >
            </div>
            <div class="form-group">
                <label for="">Numero 2</label>
                <input type="number" require name="num2" required>
            </div>
            <div class="form-group">
                <select name="operacion" id="">
                    <option value="+">Sumar</option>
                    <option value="-">Restar</option>
                    <option value="*">Multiplicar</option>
                    <option value="/">Dividir</option>
                </select>
            </div>
            <button>Enviar</button>
        </form>
        <div class="resultado">
            <h2><?php echo $_GET['resultado']; ?></h2>
        </div>
    </div>
</body>
</html>