<div class="productos-en-stock">
    <table class="productos-en-stock__table">
        <thead class="productos-en-stock__thead">
            <tr>
                <th class="productos-en-stock__th">Codigo</th>
                <th class="productos-en-stock__th">Nombre</th>
                <th class="productos-en-stock__th">Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for($i = 0; $i < count($datosVariosArrays); $i++)
            {
                ?>
                <tr>
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
            ?>
        </tbody>
    </table>
</div>