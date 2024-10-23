<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">
                    <h4><?php echo $title; ?></h4>
                </div>
                <div class="card-body">
                    <?php  
                       include_once __DIR__ . "/components/form-edit.php"; 
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>