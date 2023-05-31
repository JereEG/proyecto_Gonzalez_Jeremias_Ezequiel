<div class="container-fluid p-4 ">

    <div class="text-center">
        <h4 class="">Editar Producto</h4>
    </div>

    <!-- Validación -->
    <div>
        <!--recuperamos datos con la función Flashdata para mostrarlos-->
        <?= csrf_field(); ?>

        <?php if (session()->getFlashdata('success')) {
            echo "
      <div class='mt-3 mb-3 ms-3 me-3 h4 text-center alert alert-success alert-dismissible'>
      <button type='button' class='btn-close' data-bs-dismiss='alert'></button>" . session()->getFlashdata('success') . "
        </div>";
        } ?>
    </div>

    <?php $validation = \Config\Services::validation(); ?>
    

    <div class="d-flex justify-content-center">
        <!-- Inicio del formulario -->
        <form method="post" action="<?php echo base_url('/editar/' . $old['id']);?>" enctype="multipart/form-data">
            <!--<php if(true):
                /*$descripcion_producto = $producto['descripcion_prod'];
                $precio = $producto['precio'];
                $precio_venta = $producto['precio_venta'];
                $stock = $producto['stock'];   
                $stock_min = $producto['stock_min'];*/


            ?>
            <php endif():?>-->
            <div class="row g-3 p-4 ">

                <div class="col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label">Descripción de producto</label>
                    <input name="nombre-prod" type="text" class="form-control" value="<?php echo $old['descripcion_prod'];?>" placeholder="Queso La Paulina Cocina">
                    <!-- Error -->
                    <?php if ($validation->getError('nombre-prod')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('nombre-prod'); ?>
                        </div>
                    <?php } ?>
                </div>

                
                <div class="col-md-6">
                    <label for="cod_categoria" class="form-label">Código de categoría</label>
                    <select name="cod_categoria" class="form-select" required="">
                        <option value="">Elegir...</option>
                        <option value="2">1-Bebidas</option>
                    </select>
                    <?php if ($validation->getError('cod_categoria')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('cod_categoria'); ?>
                        </div>
                    <?php } ?>
                    <div class="invalid-feedback">
                        Seleccione un código válido.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="precio" class="form-label">Precio</label>
                    <input name="precio" type="number" step="0.01" class="form-control" value="<?php echo $old['precio'];?>" placeholder="100.0">
                    <!-- Error -->
                    <?php if ($validation->getError('precio')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('precio'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="col-sm-6">
                    <label for="precio-venta" class="form-label">Precio de Venta</label>
                    <input name="precio-venta" type="number" step="0.01" class="form-control" value="<?php echo $old['precio_venta'];?>" placeholder="130.0">
                    <!-- Error -->
                    <?php if ($validation->getError('precio-venta')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('precio-venta'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="col-sm-6">
                    <label for="stock" class="form-label">Stock</label>
                    <input name="stock" type="number" step="0.01" class="form-control" value="<?php echo $old['stock'];?>" placeholder="100">
                    <!-- Error -->
                    <?php if ($validation->getError('stock')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('stock'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="col-sm-6">
                    <label for="stock-min" class="form-label">Stock Mínimo</label>
                    <input name="stock-min" type="number" step="0.01" class="form-control" value="<?php echo $old['stock_min'];?>" placeholder="1">
                    <!-- Error -->
                    <?php if ($validation->getError('stock-min')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('stock-min'); ?>
                        </div>
                    <?php } ?>
                </div>

                <!-- Completar -->
                
                <!--<?php var_dump($old['imagen'])?>-->
                <div class="col-12 col-sm-3">
                    <h5>Imagen del producto original</h5>
                    <img class="img-fluid" style="object-fit: contain;" src="<?php echo base_url()?>assets/uploads/<?=$old['imagen'];?>" >
                </div>
                
                    <h5>Opcionalmente puede cambiarla:</h5>
                    <div class="file">
                    
                        <label for="formGroupExampleInput">Imagen</label>
                        <input type="file" name="imagen"  >
                        <!-- Error -->
                        <?php if ($validation->getError('imagen')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('imagen'); ?>
                            </div>
                        <?php } ?>
                    </div>
                
                
                





            </div>
            
            <div class="text-center row-12">
                <button class="w-25 btn btn-danger btn-sm" type="reset">Cancelar</button>
                <button class="w-25 btn btn-primary btn-sm" type="submit">Guardar</button>
            </div>


        </form>
    </div>
</div>