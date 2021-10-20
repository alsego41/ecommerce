<div class="form__container">
    <form action="" method="post" class="form__box">
        <label for="user">Usuario</label>
        <input type="text" name="user" id="" autofocus>
        <label for="psw">Contraseña</label>
        <input type="password" name="psw" id="">
        <input type="submit" value="Ingresar" name="subLogin">
    </form>
</div>

<?php
function displayAlert($cond) {
    if ($cond){
        ?>
<div class="login__alert login__alert--success">
    <p>Inicio exitoso! Volviendo a Inicio...</p>
</div>
<?php
    } else {
?>
<div class="login__alert login__alert--failed">
    <p>Error! Los datos de usuario o contraseña son incorrectos!</p>
</div>
<?php
    }
}
?>