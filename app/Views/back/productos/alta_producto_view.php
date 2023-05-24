<div class="container-fluid p-4 d-flex justify-content-center">

    <div>
        <h4 class="mb-3">Altas de Productos</h4>
    </div>

    <!-- Validación -->
    <!-- Colocar reglas de validación -->

    <?php $validation = \Config\Services::validation(); ?>

    <!-- Inicio del formulario -->
    <form method="post" action="<?php echo base_url('/enviar-prod') ?>" enctype="multipart/form-data">

        <div class="row g-3 p-4 ">

            <div class="col-sm-6">
                <label for="exampleFormControlInput1" class="form-label">Producto</label>
                <input name="nombre-prod" type="text" class="form-control" value="<?php echo set_value('Descripción del producto') ?>" placeholder="Queso La Paulina Cocina">
                <!-- Error -->
                <?php if ($validation->getError('nombre-prod')) { ?>
                    <div class='alert alert-danger mt-2'>
                        <?= $error = $validation->getError('nombre-prod'); ?>
                    </div>
                <?php } ?>
            </div>

            <!-- Completar -->

            <div class="file">
                <label for="formGroupExampleInput">Imagen</label>
                <input type="file" name="imagen">
            </div>





        </div>

        <div class="text-center">
            <button class="w-25 btn btn-danger btn-sm" type="reset">Cancelar</button>
            <button class="w-25 btn btn-primary btn-sm" type="submit">Ingresar</button>
        </div>


    </form>
</div>