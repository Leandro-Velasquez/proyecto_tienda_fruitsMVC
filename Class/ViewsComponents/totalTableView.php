<table class="<?php echo $this->getClases()[0]; ?>">
    <thead class="<?php echo $this->getClases()[1]; ?>">
        <tr class="<?php echo $this->getClases()[2]; ?>">
            <th class="<?php echo $this->getClases()[3]; ?>">Total</th>
            <th class="<?php echo $this->getClases()[3]; ?>">Price</th>
        </tr>
    </thead>
    <tbody class="<?php echo $this->getClases()[4]; ?>">
        <tr class="<?php echo $this->getClases()[5]; ?>">
            <td class="<?php echo $this->getClases()[6]; ?>"><strong>Subtotal:</strong></td>
            <td class="<?php echo $this->getClases()[6]; ?>"><?php echo "$" . $this->getSubtotal(); ?></td>
        </tr>
        <tr class="<?php echo $this->getClases()[5]; ?>">
            <td class="<?php echo $this->getClases()[6]; ?>"><strong>Shipping:</strong></td>
            <td class="<?php echo $this->getClases()[6]; ?>"><?php echo "$" . $this->getCostoTransporte(); ?></td>
        </tr>
        <tr class="<?php echo $this->getClases()[5]; ?>">
            <td class="<?php echo $this->getClases()[6]; ?>"><strong>Total:</strong></td>
            <td class="<?php echo $this->getClases()[6]; ?>"><?php echo "$" . $this->getTotal(); ?></td>
        </tr>
    </tbody>
</table>