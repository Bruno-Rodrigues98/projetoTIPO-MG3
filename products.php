<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre a Empresa - Meu Site</title>
    <!-- link para os arquivos CSS do Bootstrap e do site -->
    <link rel="stylesheet" href="css/style.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <?php include 'header.php'; ?>

    <main>

        <div id="product-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#product-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#product-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#product-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#product-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#product-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#product-carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#product-carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#product-carousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
            </div>
            <div class="carousel-inner mb-2">
                <div class="carousel-item active c-item">
                    <img src="images/ferro-fundido.jpeg" class="d-block w-100 c-img" alt="Product 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Ferro fundido</h5>
                        <p>Os ferros fundidos cinzento e nodular são compostos de ligas de ferro, carbono e silício com teor de carbono acima de 2.0%.</p>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="images/bronze.jpeg" class="d-block w-100 c-img" alt="Product 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Bronze</h5>
                        <p>A principio a barra de bronze é comercializada pela MG3 Comercial em diversos tamanhos, formatos e por outro lado, medidas.</p>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="images/latao.jpeg" class="d-block w-100 c-img" alt="Product 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Latão</h5>
                        <p>A barra de latão que a MG3 Comercial distribui, pode inicialmente ser feita nos mais variados tamanhos, medidas e sem dúvida em formatos variados.</p>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="images/aluminio.jpeg" class="d-block w-100 c-img" alt="Product 4">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Alumínio</h5>
                        <p>O alumínio é um dos mais leves, sendo que o peso é mais ou menos três vezes menor que o peso do Cobre e do Latão.</p>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="images/cobre.jpeg" class="d-block w-100 c-img" alt="Product 5">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Cobre</h5>
                        <p>Inicialmente a MG3 Comercial comercializa barra de cobre em diversos tamanhos, modelos, medidas e formatos.</p>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="images/aco-inox.jpeg" class="d-block w-100 c-img" alt="Product 6">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Aço Inox</h5>
                        <p>Desenvolvido originalmente para aplicações onde o requisito principal seria a resistência à corrosão.</p>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="images/plastico-industrial.jpeg" class="d-block w-100 c-img" alt="Product 7">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Plástico Industrial</h5>
                        <p>O Nylon Fundido é um plástico de engenharia. Ele é produzido através da polimerização aniônica da caprolactama com posterior tratamento térmico.</p>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="images/aco-carbono.jpeg" class="d-block w-100 c-img" alt="Product 8">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Aço Carbono</h5>
                        <p>O aço carbono é uma liga metálica formada a partir da junção do ferro e do carbono</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="grid">
            <div class="grid-item">
                <img src="images/ferro-fundido.jpeg" alt="Image 1">
                <h1>TESTE</h1>
            </div>
            <div class="grid-item">
                <img src="images/bronze.jpeg" alt="Image 2">
            </div>
            <div class="grid-item">
                <img src="images/latao.jpeg" alt="Image 3">
            </div>
            <div class="grid-item">
                <img src="images/aluminio.jpeg" alt="Image 4">
            </div>
            <div class="grid-item">
                <img src="images/cobre.jpeg" alt="Image 5">
            </div>
            <div class="grid-item">
                <img src="images/aco-inox.jpeg" alt="Image 6">
            </div>
            <div class="grid-item">
                <img src="images/plastico-industrial.jpeg" alt="Image 7">
            </div>
        </div> -->



    </main>

    <?php include 'footer.php'; ?>

    <!-- scripts do Bootstrap e do site -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="javascript/script.js"></script>
</body>

</html>