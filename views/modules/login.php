<div class="form__container">
    <form action="" method="post" class='form__box'>
        <label for="username">Nombre de usuario</label>
        <input type="text" name="username" id="username">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Acceder" name="btnLogin" class='publication__button'>
    </form>

    <p class='login__info' id='loginInfo'></p>

</div>

<?php 
function loginView($loginInfo) {
?>
<script>
let loginInfo = '<?php echo $loginInfo ?>'
// console.log(loginInfo)
document.querySelector('#loginInfo').innerText = loginInfo;
</script>
<?php
}
?>