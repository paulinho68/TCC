<?php 
    session_start(); 
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MaurícioLuminárias</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <!-- Folha de Estilo -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/gallery-grid.css">
    
</head>

<body class="">

    <?php include 'topo.php'; ?>

    <div class="container gallery-container">

        <h1 class="text-dark pt-5">Galeria de Fotos</h1>

        <p class="page-description text-center">Favorite algumas fotos para usá-las como referência em sua encomenda!</p>

        <div class="tz-gallery">

            <div class="row">

                <?php
                include 'bd/conexao.php';
                $sql = "select * from fotos";
                $sql2 = "select count(id) from fotos";
                $busca = mysqli_query($con, $sql);
                $total = mysqli_query($con, $sql2);
                
                while ($array = mysqli_fetch_array($busca)) {
                    
                    $id = $array['id'];
                    $imagem = $array['imagem'];
                    $descricao = $array['descricao'];
                    $teste = strlen($imagem) - 3;
                    $imagem = substr($imagem,'-' . $teste);
                ?>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" onclick="openModal();currentSlide(<?php echo $id ?>)">
                        <img src="<?php echo $imagem ?>" style="margin-bottom:-2px;" alt="">
                    </a>
                    <?php $item = "item" . $id; ?>
                    <i onclick="favoritado(<?php echo $item ?>)" class="far fa-heart" id="<?php echo $item ?>" style="margin-left:93%; cursor: pointer;margin-bottom:50px"></i>
                </div>

            
                <?php } ?>
            </div>
            
            <!-- The Modal/Lightbox -->
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div id="modalContent" class="modal-content">

                <?php 
                $busca = mysqli_query($con, $sql);
                while ($array = mysqli_fetch_array($busca)) {
                    $id = $array['id'];
                ?>
                    <div class="mySlides bg-dark">
                        <div class="numbertext"><?php echo $id ?> / <?php echo $total ?></div>
                        <img src="<?php echo $imagem ?>" style="width:100%">
                    </div>
                <?php } ?>

                <!-- Next/previous controls -->
                <a class="prev text-light" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next text-light" onclick="plusSlides(1)">&#10095;</a>

                <!-- Caption text -->
                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                </div>
                
            </div>

        </div>

    </div>

    <script>
        var cont = 2;

        function favoritado(icone){
            document.getElementById(icone).classList.toggle('far');
            document.getElementById(icone).classList.toggle('fas');
        }

        // Open the Modal
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        // Close the Modal
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>

    <script>
        baguetteBox.run('.tz-gallery');
    </script>
</body>
</html>