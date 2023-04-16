<section class="Conteiner-fluid">

    <div class="row grid-view theme1">
        <!-- ngRepeat: producto in productos -->
        <div class="col-sm-6 col-lg-4 col-xl-3 mb-30 ng-scope" ng-repeat="producto in productos">
            <div class="card product-card">
                <div class="card-body">
                    <div class="product-thumbnail position-relative">
                        <a href="#">
                            <img id="3a26d0e5-07bf-4346-acfa-807d77426615"
                                ng-src="https://t2.gstatic.com/images?q=tbn:ANd9GcTjoBPT8nGWWO_ArnSbLjpJKOxrAwhEm-QMRfOnvkij8klKPDOjQImnm17M4w"
                                onerror="this.src='./noimage.jpg'" alt=""
                                style="width: 100%; height: 175px; object-fit: contain;" ng-click="modal(producto)"
                                class="first-img"
                                src="https://t2.gstatic.com/images?q=tbn:ANd9GcTjoBPT8nGWWO_ArnSbLjpJKOxrAwhEm-QMRfOnvkij8klKPDOjQImnm17M4w">
                        </a>
                    </div>
                    <div class="product-desc py-0">
                        <h3 class="title ng-binding">CERVEZA BRAHMA 1LT</h3>
                        <div class="d-flex align-items-center justify-content-between">
                            <h6 class="product-price ng-binding">$ 550.00</h6>

                            <li class="mr-0 cart-block position-relative">
                                <a class="offcanvas-toggle" href="#offcanvas-cart">
                                    <span class="position-relative">
                                        <button class="pro-btn" data-toggle="modal" data-target="#add-to-cart"
                                            ng-disabled="producto.rcantidad >= producto.rstock"
                                            ng-click="sumarUnidad(producto)">
                                            <h3>+</h3>
                                        </button>
                                        <span class="badge cbdg2 ng-binding" title="- Restar unidad"
                                            ng-click="restarUnidad(producto)"> 0 </span>
                                    </span>
                                </a>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end ngRepeat: producto in productos -->
    </div>
</section>