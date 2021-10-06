<?php
    function showAdminActions($id) {
?>
<div class="preview__actions">
    <a href="editproduct.php?prodId=<?php echo $id?>">
        <div class="publication__button publication__button--edit">
            <p class="publication__button--text">Editar publicación</p>
        </div>
    </a>
    <a href="deleteproduct.php?prodId=<?php echo $id?>">
        <div class="publication__button publication__button--delete">
            <p class="publication__button--text">Eliminar publicación</p>
        </div>
    </a>
</div>


<?php
    }
?>