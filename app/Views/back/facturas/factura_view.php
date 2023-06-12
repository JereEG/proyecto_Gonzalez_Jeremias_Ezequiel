<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-md-3 card p-4">
            <h2 class="text-center">Factura</h2>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h5>Emisor:</h5>
                    <p>Kiosco Online S.A</p>
                    <p>Dirección: Los Atacamas 4244</p>
                </div>
                <div class="col-md-6">
                    <h5>Cliente:</h5>
                    <p>Nombre y Apellido:
                        <?php echo $nombre_apellido ?>
                    </p>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Descripción</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Precio unitario</th>
                            <th scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Producto 1</td>
                            <td>2</td>
                            <td>$10.00</td>
                            <td>$20.00</td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-end">Total:</td>
                            <td>
                                <?php echo $total ?>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</div>