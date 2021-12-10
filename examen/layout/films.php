<div class="film">
    <input type="hidden" id = "id" value="<?php echo $item['id']; ?>">
    <img src="images/<?php echo $item['imagen']; ?>">
    <p><?php echo $item['nombre']; ?></p>
    <span>Antes: </span>
    <span class="price-no-desc"><?php echo ($item['precio'] + 10); ?></span>
    <span>Ahora:</span>
    <span class="price-desc"><?php echo ($item['precio']); ?></span>
    <br>
    <button class="btn-add" style="cursor: pointer;">Comprar</button>
</div>