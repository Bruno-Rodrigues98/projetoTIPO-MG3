<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Website - Home</title>
    <link rel="stylesheet" href="css/style.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- <script scr="javascript/bootstrap.bundle.js"></script> -->
</head>

<body>
    <?php include 'header.php'; ?>
    <main>

        <div class="hero">
            <h1>Somos referência no mercado de metais</h1>
            <video class="video-bg" autoplay muted loop>
                <source src="images/MG3-video.mp4" type="video/mp4">
            </video>
        </div>

        <div class="row mainBackground">
            <div class="col-md-4 d-flex justify-content-center mainImage">
                <img src="images/metals.jpg" class="image" alt="Descrição da imagem">
            </div>
            <div class="col-md-8 ">
                <h1 class="mainParagraph">Referência no mercado de metais</h1>
                <p class="fs-5">A MG3 Comercial tem por objetivo atender plenamente às pequenas, médias e grandes empresas. Somos distribuidores de metais ferrosos e de metais não ferrosos.</p>
                <p class="fs-6">Com sede própria muito bem localizada e equipamentos de ultima geração, fornecemos para todo o Brasil com rapidez e pontualidade na entrega. Com uma equipe de vendas altamente qualificada, temos grande satisfação em atender nossos clientes em qualquer situação.</p>
            </div>
        </div>

        <!-- bootstrap carossel -->
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active c-item" data-bs-interval="10000">
                    <img src="images/ferro-fundido.jpeg" class="d-block w-100 c-img" alt="ferro-fundido">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Ferro Fundido</h1>
                        <p>Os ferros fundidos cinzento e nodular são compostos de ligas de ferro, carbono e silício com teor de carbono acima de 2.0%.</p>
                    </div>
                </div>
                <div class="carousel-item c-item" data-bs-interval="2000">
                    <img src="images/bronze.jpeg" class="d-block w-100 c-img" alt="bronze">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Bronze</h1>
                        <p>A principio a barra de bronze é comercializada pela MG3 Comercial em diversos tamanhos, formatos e por outro lado, medidas.</p>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="images/aluminio.jpeg" class="d-block w-100 c-img" alt="aluminio">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Alumínio</h1>
                        <p>O alumínio é um dos mais leves, sendo que o peso é mais ou menos três vezes menor que o peso do Cobre e do Latão.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    </main>
    <?php include 'footer.php'; ?>

    <script src="javascript/script.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
    <!-- <script src="javascript/script.js"></script> -->

</body>

</html>