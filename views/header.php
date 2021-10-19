<header class='header'>
    <img src='../assets/logo.png' alt='Ecommerce logo' class='header__logo' onclick="document.location.href = './'">
    <div class="carrito" onclick="document.location.href = './cart.php'">
        <img src="../assets/cart.png" alt="Carrito">
        <p class="carrito__count" id="carritoCount"></p>
    </div>
    <?php 
        if (Session::check()){
            ?>
    <img src='../assets/profile.png' alt='Logout' class="header__account--img" onclick="document.location.href = './'">
    <?php
        } else {
            ?>
    <img src='../assets/profile.png' alt='Login' class="header__account--img"
        onclick="document.location.href = './login.php'">
    <?php
        }
    ?>
</header>