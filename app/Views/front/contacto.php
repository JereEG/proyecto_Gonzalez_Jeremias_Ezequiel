<section class="Conteiner-fluid d-flex justify-content-center p-2">
    <div class="row d-flex justify-content-center">
        <div class="text-center">
            <img src="<?php echo base_url('assets/img/kiosco_online.png');?>" class="img-fluid">
            <h1>Contacta a Kiosko Online</h1>
            <p>Razón social: <em>Kioscko Online S.A.</em></p>
            <p>Domicilio legal: <em>Los Atacamas 4244, Corrientes Capital, Argentina</em></p>
            <p>Teléfonos de contacto:</p>

            <li>Teléfono celular: <em>3794906261</em></li>
            <li>Teléfono fijo: <em>3794414779</em></li>

        </div>
        <div class="text-center">
            <h4>Redes Sociales</h4>
            <ul class="nav flex-column">
                <p>
                    <a href="<?php echo base_url('sitio_en_construccion');?>" class="text-decoration-none">
                        Contáctanos en Facebook <img class="img-fluid" src="assets\img\facebook.png"
                            style="color:#3b5998" class="bi" width="24" height="24">
                    </a>
                </p>
                <p>
                    <a href="<?php echo base_url('sitio_en_construccion');?>" class="text-decoration-none">
                        Contáctanos en Instagram <img class="img-fluid" src="assets\img\instagram.png" class="bi"
                            width="24" height="24">
                    </a>
                </p>
                <p>
                    <a href="<?php echo base_url('sitio_en_construccion');?>" class="text-decoration-none">
                        Contáctanos en Twitter <img class="img-fluid" src="assets\img\twitter.png" style="color:#00acee"
                            class="bi" width="24" height="24">
                    </a>
                </p>

            </ul>
        </div>

        <div class="col-md-7  col-lg-8">

            <h4 class="mb-3">Envíanos tu consulta</h4>
            <form class="needs-validation ">
                <div class="row g-3 justify-content-center">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Nombre..." value=""
                            required="">
                        <div class="invalid-feedback">
                            Se requiere un nombre válido.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Apellido..." value=""
                            required="">
                        <div class="invalid-feedback">
                            Se requiere un apellido válido.
                        </div>
                    </div>

                    <!--<div class="col-12">
                        <label for="username" class="form-label">Nombre de usuario</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text">@</span>
                            <input type="text" class="form-control" id="username" placeholder="Nombre de usuario" required="">
                            <div class="invalid-feedback">
                                Su nombre de usuario es obligatorio.
                            </div>
                        </div>
                    </div>-->

                    <div class="">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="fulanito@ejemplo.com">
                        <div class="invalid-feedback">
                            Introduce una dirección de correo electrónico válida para recibir actualizaciones.
                        </div>
                    </div>

                    <div class="">
                        <label for="address" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="address" placeholder="Junin 1200" required="">
                        <div class="invalid-feedback">
                            Por favor, introduzca su dirección de envío.
                        </div>
                    </div>

                    <div class="">
                        <label for="address2" class="form-label">Numero de piso<span
                                class="text-body-secondary">(Opcional)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Apartamento o suite">
                    </div>
                    <div class="row p-2">
                        <div class="col-md-5">
                            <label for="country" class="form-label">País</label>
                            <select class="form-select" id="country" required="">
                                <option value="">Elegir...</option>
                                <option>Argentina</option>
                            </select>
                            <div class="invalid-feedback">
                                Seleccione un país válido.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="state" class="form-label">Provincia</label>
                            <select class="form-select" id="state" required="">
                                <option value="">Elegir...</option>
                                <option>Corrientes</option>
                            </select>
                            <div class="invalid-feedback">
                                Proporcione un estado válido.
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="zip" class="form-label">Código postal</label>
                            <input type="text" class="form-control" id="zip" placeholder="" required="">
                            <div class="invalid-feedback">
                                Se requiere código postal.
                            </div>
                        </div>
                    </div>

                </div>
                <div class="text-center">
                    <button class="w-25 btn btn-primary btn-sm" type="submit">Enviar</button>
                </div>


            </form>
        </div>

    </div>
</section>