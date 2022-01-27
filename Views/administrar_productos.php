<div class="productos-en-stock">
    <h2 class="productos-en-stock__h2">Productos</h2>
    <table class="productos-en-stock__table">
        <thead class="productos-en-stock__thead">
            <tr>
                <th class="productos-en-stock__th">Codigo</th>
                <th class="productos-en-stock__th">Nombre</th>
                <th class="productos-en-stock__th">Precio</th>
            </tr>
        </thead>
        <tbody class="productos-en-stock__tbody">
        <?php
        /*
            for($i = 0; $i < count($datosVariosArrays); $i++)
            {
                ?>
                <tr class="productos-en-stock__tr">
                    <?php
                    foreach($datosVariosArrays[$i] as $key => $value)
                    {
                        ?>
                        <td><?php echo ($key == 'precio')? '$' . $value: $value; ?></td>
                        <?php
                    }
                    ?>
                </tr>
                <?php
            }
        */
        ?>
        </tbody>
    </table>
    <div class="productos-en-stock__div-buttons">
        <!-- <button id="buttonLeft" class="productos-en-stock__buttons"><i class="fas fa-arrow-left"></i></button>
        <button id="buttonRight" class="productos-en-stock__buttons"><i class="fas fa-arrow-right"></i></button> -->
        <a id="buttonLeft" class="productos-en-stock__buttons" href=""><i class="fas fa-arrow-left"></i></a>
        <a id="buttonRight" class="productos-en-stock__buttons" href=""><i class="fas fa-arrow-right"></i></a>
    </div>
</div>