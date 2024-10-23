<?php foreach ($products as $product) : ?>
    <tr>
        <td><?php echo htmlspecialchars($product->id); ?></td>
        <td><?php echo htmlspecialchars($product->name); ?></td>
        <td><?php echo htmlspecialchars($product->description); ?></td>
        <td>$<?php echo number_format($product->price, 2); ?></td>
        <td><?php echo htmlspecialchars($product->quantity); ?></td>
        <td class="text-center">
            <a href="/product/edit?id=<?php echo htmlspecialchars($product->id); ?>" class="btn btn-sm btn-warning">
                <i class="fas fa-edit"></i> Editar
            </a>
            <form action="/product/delete?id=<?php echo htmlspecialchars($product->id); ?>" method="POST" style="display:inline;">
                <button type="submit" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash-alt"></i> Eliminar
                </button>
            </form>
        </td>
    </tr>
<?php endforeach; ?>