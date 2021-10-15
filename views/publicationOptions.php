<?php
    $product = Product::$currProd;
?>

<div class="preview__actions">
    <a href="editproduct.php?pid=<?php echo $product['productId']?>">
        <div class="publication__button publication__button--edit">
            <p class="publication__button--text">Editar publicación</p>
        </div>
    </a>
    <div class="publication__button publication__button--delete" id='deleteBtn'>
        <p class="publication__button--text">Eliminar publicación</p>
    </div>
</div>
<div class="modal__container modal--hide" id='modal'>
    <div class="modal">
        <p class="modal__confirmation--text">
            ¿Está seguro que quiere eliminar el producto?
        </p>
        <div class="modal__confirmation--box">
            <div class="publication__button">
                <p class="publication__button--text">Cancelar</p>
            </div>
            <a href="deleteproduct.php?pid=<?php echo $product['productId']?>">
                <div class="publication__button publication__button--delete">
                    <p class="publication__button--text">Eliminar</p>
                </div>
            </a>
        </div>
    </div>
</div>
<script>
document.querySelector('#deleteBtn').addEventListener('click', () => {
    document.querySelector('#modal').classList.remove('modal--hide');
})
document.querySelectorAll('.modal__confirmation--box .publication__button').forEach(btn => btn.addEventListener('click',
    () => {
        document.querySelector('#modal').classList.add('modal--hide');
    }))
</script>