<div class="container-fluid">
    <div class="text-center p-4">
        <h1>¡Gracias por su compra!</h1>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3 card p-4">
            <h2 class="text-center">Factura</h2>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h5>Emisor:</h5>
                    <p>Kiosco Online S.A</p>
                    <p>Dirección: Calle Principal 123</p>
                    <p>Ciudad: Ciudad Ejemplo</p>
                </div>
                <div class="col-md-6">
                    <h5>Cliente:</h5>
                    <p>Nombre: Juan Pérez</p>
                    <p>Dirección: Calle Secundaria 456</p>
                    <p>Ciudad: Otra Ciudad</p>
                </div>
            </div>
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
                    <tr>
                        <td>Producto 2</td>
                        <td>1</td>
                        <td>$15.00</td>
                        <td>$15.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-end">Total:</td>
                        <td>$35.00</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<div>
    <button onclick="generarPDF()">Descargar factura PDF</button>
    
    <script>
        function generarPDF() {
            alert("funciona");
            // Crea una instancia de jsPDF
            const doc = new jsPDF();

            // Obtén los datos de la factura
            const numeroFactura = '123';
            const fechaFactura = '2023-06-10';

            // Genera el contenido HTML de la factura
            const contenidoHTML = `
                    <h1>Factura</h1>
                    <p>Número de factura: 1</p>
                    <p>Fecha de factura: 1</p>
                `;

            // Genera el PDF a partir del contenido HTML
            doc.html(contenidoHTML, {
                callback: function () {
                    // Descarga el PDF
                    doc.save('factura.pdf');
                }
            });
        }
    </script>
</div>