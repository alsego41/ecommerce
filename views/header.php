<header class='header'>
    <img src='./views/assets/logo.png' alt='Ecommerce logo' class='header__logo'
        onclick="document.location.href = './'">
    <div class="carrito" onclick="document.location.href = './cart.php'">
        <i class="bi bi-cart3"></i>
        <p class="carrito__count" id="carritoCount"></p>
    </div>
    <?php 
        if (Session::check()){
            ?>
    <div class="carrito" onclick="document.location.href = './'">
        <p>Salir</p>
        <i class="bi bi-person-circle"></i>
    </div>
    <?php
        } else {
            ?>
    <div class="carrito" onclick="document.location.href = './login.php'">
        <p>Admin</p>
        <i class="bi bi-person-circle"></i>
    </div>
    <?php
        }
    ?>
</header>