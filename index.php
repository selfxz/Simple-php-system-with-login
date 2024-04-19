<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Las Casuarinas-Login</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="./vista/login/guardar.php" method="POST">
                <h1>Crea una cuenta</h1>
                <span>registrate</span>
                <input name="nom_usu" type="text" placeholder="Nombre">
                <input name="eml_usu" type="email" placeholder="example@gmail.com">
                <input name="pas_usu" type="password" placeholder="Password">
                <button>Registrate</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="./vista/login/proceso.php" method="POST">
                <h1>Bienvenido</h1>
                <span>Ingrese su cuenta</span>
                <input name="txtEml" type="email" placeholder="example@gmail.com">
                <input name="txtPass" type="password" placeholder="Password">
                <a>olvidaste tu contraseña?</a>
                <button type="submit">Ingresar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bienvenido denuevo!</h1>
                    <p>Si ya tiene una cuenta inicie sesion y disfrute de las funciones del sitio web</p>
                    <button class="hidden" id="login">Iniciar sesion</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hola, Amigo!</h1>
                    <p>Registrese para ingresar y tener acceso a las funciones del sitio web</p>
                    <button class="hidden" id="register">Registrarse</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/login.js"></script>
</body>

</html>