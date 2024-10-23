<form 
action="/product/edit?id=<?php echo $product->id; ?>" method="POST">
    <div class="mb-3">
        <label
            for="name"
            class="form-label">
            Nombre del Producto
        </label>

        <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            placeholder="Nombre del producto"
            value="<?php echo $product->name; ?>"
            required
        >
    </div>

    <div class="mb-3">
        <label
            for="descripcion"
            class="form-label">
            Descripción
        </label>

        <textarea
            class="form-control"
            id="description"
            name="description"
            rows="4"
            placeholder="Descripción del producto"
            required><?php echo $product->description; ?></textarea>
    </div>

    <div class="mb-3">
        <label
            for="price"
            class="form-label">
            Precio
        </label>

        <input
            type="number"
            step="0.01"
            class="form-control"
            id="price"
            name="price"
            placeholder="Precio"
            value="<?php echo $product->price; ?>"
            required
        >
    </div>

    <div class="mb-3">
        <label
            for="quantity"
            class="form-label">
            Cantidad
        </label>

        <input
            type="number"
            class="form-control"
            id="quantity"
            name="quantity"
            placeholder="Cantidad"
            value="<?php echo $product->quantity; ?>"
            required
        >
    </div>

    <div class="mb-4">
        <label
            for="stock"
            class="form-label">
            Stock
        </label>

        <input
            type="number"
            class="form-control"
            id="stock"
            name="stock"
            placeholder="Número de Stock"
            value="<?php echo $product->stock; ?>"
            required
        >
    </div>

    <button
        type="submit"
        class="btn btn-primary">
        Guardar
    </button>

    <a
        class="btn btn-warning"
        href="/">
        Cancelar
    </a>
</form>