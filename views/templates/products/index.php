<!-- List Products -->
<div class="container-fluid my-3">
    <div class="row">
        <div class="col-md-12">
            <div>
              <a 
                class="btn btn-primary mb-3" 
                href="/create-product">
                  Nuevo
              </a>
            </div>
            
            <h3 class="text-center mb-3">
                <?php echo $title; ?>
            </h3>
            
            <div class="table-responsive">
                <?php
                  include_once __DIR__ . "/components/table.php";
                ?>
            </div>
        </div>
    </div>
</div>