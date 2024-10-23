<table class="table table-hover table-bordered">
    <thead class="bg-primary text-white">
        <tr>
            <?php foreach ($colums as $colum) : ?>
                <th>
                    <?php echo $colum; ?>
                </th>
            <?php endforeach; ?>
            <th class="text-center">
                Acciones
            </th>
        </tr>
    </thead>
    <tbody>
       <?php 
          include_once __DIR__ . "/items.php" 
        ?>
    </tbody>
</table>