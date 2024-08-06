<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Ayuda</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="header">
        <?php require 'partials/header.php'; ?>
        <h1>Centro de Ayuda</h1>
        <form class="search-form" action="search.php" method="GET">
            <input type="text" name="query" placeholder="Buscar..." required>
        </form>
    </header>
    <div class="cont_pincipal">
        <h1>¿Necesitas ayuda? Nosotros te cuidamos.</h1>
        <p>Desde los ajustes de cuenta hasta los permisos, encuentra ayuda para todo lo relacionado con Discord
        ¡Si eres nuevo en Discord y buscas consejo, consulta nuestra Guía para principiantes!</p>
    </div>
    
    <div class="cont_container">
    <div class="tarjetas">
        <img src="img/grid_1.png" alt="Anuncios">
        <h2>Anuncios</h2>
        <p>Estamos al pendiente. Esto es lo que sabemos que no está funcionando como debería</p>
    </div>
    <div class="tarjetas">
        <img src="img/grid_2.png" alt="Cómo empezar">
        <h2>Cómo empezar</h2>
        <p>¡Comienza con buen pie! ¡El derecho o el izquierdo!</p>
    </div>
    <div class="tarjetas">
        <img src="img/grid_3.png" alt="Ajustes de la Cuenta">
        <h2>Ajustes de la Cuenta</h2>
        <p>Eres un gamer especial y tu cuenta también lo es</p>
    </div>
    <div class="tarjetas">
        <img src="img/grid_4.png" alt="Configuración del servidor">
        <h2>Configuración del servidor</h2>
        <p>Casi tan emocionante como el diseño de interiores</p>
    </div>

    <div class="tarjetas">
        <img src="img/grid_5.png" alt="Anuncios">
        <h2>Apps y Activities</h2>
        <p>¿Cómo empiezo una actividad?</p>
    </div>
    <div class="tarjetas">
        <img src="img/grid_6.png" alt="Cómo empezar">
        <h2>Nitro</h2>
        <p>Por favor,no compres sin parar.Déjanos ayudar</p>
    </div>
    <div class="tarjetas">
        <img src="img/grid_7.png" alt="Ajustes de la Cuenta">
        <h2>Confianza y seguridad</h2>
        <p>Mantén a tus amigos y a ti mismo a salvo</p>
    </div>
    <div class="tarjetas">
        <img src="img/grid_8.png" alt="Configuración del servidor">
        <h2>Facturación</h2>
        <p>Esa sensación cuando miras tu cuenta bancaria</p>
    </div>
</div>
<?php require 'partials/footer.php' ; ?>

</body>
</html>
