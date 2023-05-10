<div class="container-fluid d-flex justify-content-center barra_navegacion ">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid barra_navegacion">

            <button class="navbar-toggler barra_navegacion" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-2">


                    <li class="nav-item ">

                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('/');?>"><img
                                src="<?php echo base_url('assets/img/kiosco_online.png');?>" class="img-fluid"
                                style="width: 100%; height: 75px; object-fit: contain;"></a>

                    </li>
                    <li class="nav-item p-2 m-3">
                        <a class="nav-link" href="<?php echo base_url('quienes_somos');?>">
                            <h5>¿Quiénes somos?</h5>
                        </a>
                    </li>


                    <li class="nav-item p-2 m-3">
                        <a class="nav-link" href="<?php echo base_url('contacto');?>">
                            <h5>Contáctanos</h5>
                        </a>
                    </li>

                    <li class="nav-item p-2 m-3">
                        <a class="nav-link" href="<?php echo base_url('catalogo');?>">
                            <h5>Nuestro catalogo</h5>
                        </a>
                    </li>

                    <li class="nav-item p-2 m-3">
                        <a class="nav-link" href="<?php echo base_url('comercializacion');?>">
                            <h5>Comercialización</h5>
                        </a>
                    </li>
                    <li class="nav-item p-2 m-3">
                        <a class="nav-link" href="<?php echo base_url('registro');?>">
                            <h5>Registrarse</h5>
                        </a>
                    </li>


                    <!--<li class="nav-item dropdown p-2 m-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Comercialización
                        </a>
                    </li>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo base_url('comercializacion');?>">Comestibles</a>
                        </li>
                        <li><a class="dropdown-item" href="<?php echo base_url('comercializacion');?>">No cometibles</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo base_url('comercializacion');?>">Ver todo</a>
                        </li>
                    </ul>-->

                </ul>

                <!--<form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Ingrese su busqueda..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>-->
            </div>
        </div>
    </nav>

</div>