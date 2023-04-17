    <div class="Container-fluid">
        <footer class="row">

            <div class="col mb-4 text-justify">
                <h5>Navegación</h5>
                <ul class="nav flex-column">
                    <li class=""><a href="<?php echo base_url('/');?>" class="nav-link p-0 text-body-secondary">Pagina Principal</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo base_url('quienes_somos');?>" class="nav-link p-0 text-body-secondary">¿Quienes somos?</a></li>
                    <li class="nav-item mb-2"><a href="<?php echo base_url('catalogo');?>" class="nav-link p-0 text-body-secondary">Catalogo</a></li>
                </ul>
            </div>

            <div class="col mb-4  text-justify">
                <h5>Redes Sociales</h5>
                <ul class="nav flex-column">
                    <p>
                        <a href="<?php echo base_url('sitio_en_construccion');?>" class="text-decoration-none">
                            Síguenos en Facebook <img src="assets\img\facebook.svg" class="bi" width="24" height="24">
                        </a>
                    </p>
                    <p>
                        <a href="<?php echo base_url('sitio_en_construccion');?>" class="text-decoration-none">
                            Síguenos en Instagram <img src="assets\img\instagram.svg" class="bi" width="24" height="24">
                        </a>
                    </p>
                    <p>
                        <a href="<?php echo base_url('sitio_en_construccion');?>" class="text-decoration-none">
                            Síguenos en Twitter <img src="assets\img\twitter.svg" class="bi" width="24" height="24">
                        </a>
                    </p>

                </ul>
            </div>

            <div class="col mb-4 text-justify align-items-center">
                <h5>Envianos tu consulta</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Contacto</a></li>
                </ul>
            </div>

            <div class="text-justify align-items-center">
                <p>© 2023 Company, Inc. All rights reserved.
                    <a href="<?php echo base_url('terminos_y_condiciones');?>" >Términos y Usos</a>
                </p>
            </div>
        </footer>
        
        
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js');?>"></script>
    
</body>

</html>