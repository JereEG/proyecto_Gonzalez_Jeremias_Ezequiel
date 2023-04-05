<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div> 
        <title class="titulo">Bootstrap demo</title>
    </div>
    <link href="assets\css\bootstrap.min.css" rel="stylesheet" integrity=" " crossorigin="">
    <link href="assets\css\miestilophp.css" rel="stylesheet" integrity=" " crossorigin="">

</head>
<body>
    <section class="Container-fluid”">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="assets\img\logo.png" alt="Bootstrap" width="30" height="24">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
     </nav>
    </section>
    <section class="Container">
        <p class="h1">Este es un titulo con tipografia de Bootstrap</p>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="assets\img\logo.png" class="d-block w-100" alt="" width="1920" height="1080">
            </div>
            <div class="carousel-item">
            <img src="assets\img\logo.png" class="d-block w-100" alt="" width="1920" height="1080">
            </div>
            <div class="carousel-item">
            <img src="assets\img\logo.png" class="d-block w-100" alt="" width="1920" height="1080">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </section>
    <section>
        <div class="grid gap-3">
        <div class="p-2 g-col-6">
            <p class="h1">Este el parrafo 1.</p>
        </div>
        <div class="p-2 g-col-6">
            <p>Este el parrafo 2.</p>
        </div>
        <div class="p-2 g-col-6">
            <p>Este el parrafo 3.</p>
        </div>
        <div class="p-2 g-col-6">
            <p>Este el parrafo 4.</p>
        </div>
        </div>
    </section>
    <div>
        <h1>Hola Mundo</h1>
        <script src="assets\js\bootstrap.bundle.min.js" integrity=" " crossorigin=""></script>
        <p class="parrafo">
            Este es un parrafo de prueba
        </p>
    </div>
    
    <footer>Pie de pagina</footer>
</body>
</html>