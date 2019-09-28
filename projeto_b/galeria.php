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
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" onclick="openModal();currentSlide(1)">
                        <img src="imagens/Foto2.1.png" style="margin-bottom:-2px;" alt="">
                    </a>
                    <i onclick="favoritado('item1');" class="far fa-heart" id="item1" style="margin-left:93%; cursor: pointer;margin-bottom:50px"></i>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a class="lightbox" onclick="openModal();currentSlide(2)">
                        <img src="imagens/Foto3.png"style="margin-bottom:-2px;" alt="">
                    </a>
                    <i onclick="favoritado('item2');"  class="far fa-heart" id="item2" style="margin-left:93%; cursor: pointer;margin-bottom:50px"></i>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" onclick="openModal();currentSlide(3)">
                        <img src="imagens/Foto4.png" style="margin-bottom:-2px;" alt="">
                    </a>
                    <i onclick="favoritado('item3');"  class="far fa-heart" id="item3" style="margin-left:93%; cursor: pointer;margin-bottom:50px"></i>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" onclick="openModal();currentSlide(4)">
                        <img src="imagens/Foto5.png" style="margin-bottom:-2px;" alt="">
                    </a>
                    <i onclick="favoritado('item4');"  class="far fa-heart" id="item4" style="margin-left:93%; cursor: pointer;margin-bottom:50px"></i>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" onclick="openModal();currentSlide(5)">
                        <img src="imagens/Foto6.png" style="margin-bottom:-2px;" alt="">
                    </a>
                    <i onclick="favoritado('item5');"  class="far fa-heart" id="item5" style="margin-left:93%; cursor: pointer;margin-bottom:50px"></i>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" onclick="openModal();currentSlide(6)">
                        <img src="imagens/Foto7.png" style="margin-bottom:-2px;" alt="">
                    </a>
                    <i onclick="favoritado('item6');"  class="far fa-heart" id="item6" style="margin-left:93%; cursor: pointer;margin-bottom:50px"></i>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" onclick="openModal();currentSlide(7)">
                        <img src="imagens/Foto8.png" style="margin-bottom:-2px;" alt="">
                    </a>
                    <i onclick="favoritado('item7');"  class="far fa-heart" id="item7" style="margin-left:93%; cursor: pointer;margin-bottom:50px"></i>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox"onclick="openModal();currentSlide(8)">
                        <img src="imagens/Foto9.png" style="margin-bottom:-2px;" alt="">
                    </a>
                    <i onclick="favoritado('item8');"  class="far fa-heart" id="item8" style="margin-left:93%; cursor: pointer;margin-bottom:50px"></i>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" onclick="openModal();currentSlide(9)">
                        <img src="imagens/Foto10.png" style="margin-bottom:-2px;" alt="">
                    </a>
                    <i onclick="favoritado('item9');"  class="far fa-heart" id="item9" style="margin-left:93%; cursor: pointer;margin-bottom:50px"></i>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" onclick="openModal();currentSlide(10)">
                        <img src="imagens/Foto11.png" style="margin-bottom:-2px;" alt="">
                    </a>
                    <i onclick="favoritado('item10');"  class="far fa-heart" id="item10" style="margin-left:93%; cursor: pointer;margin-bottom:50px"></i>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox"onclick="openModal();currentSlide(11)">
                        <img src="imagens/Foto12.png" style="margin-bottom:-2px;" alt="">
                    </a>
                    <i onclick="favoritado('item11');"  class="far fa-heart" id="item11" style="margin-left:93%; cursor: pointer;margin-bottom:50px"></i>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" onclick="openModal();currentSlide(12)">
                        <img src="imagens/Foto13.png" style="margin-bottom:-2px;" alt="">
                    </a>
                    <i onclick="favoritado('item12');"  class="far fa-heart" id="item12" style="margin-left:93%; cursor: pointer;"></i>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" onclick="openModal();currentSlide(13)">
                        <img src="imagens/Foto14.png" style="margin-bottom:-2px;" alt="">
                    </a>
                    <i onclick="favoritado('item13');"  class="far fa-heart" id="item13" style="margin-left:93%; cursor: pointer;"></i>
                </div>
            </div>
            
            <!-- The Modal/Lightbox -->
            <div id="myModal" class="modal">
                <span class="close cursor" onclick="closeModal()">&times;</span>
                <div id="modalContent" class="modal-content">

                    <div class="mySlides bg-dark">
                        <div class="numbertext">1 / 13</div>
                        <img  src="imagens/Foto2.1.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">2 / 13</div>
                        <img  src="imagens/Foto3.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">3 / 13</div>
                        <img  src="imagens/Foto4.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">4 / 13</div>
                        <img  src="imagens/Foto5.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">5 / 13</div>
                        <img  src="imagens/Foto6.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">6 / 13</div>
                        <img  src="imagens/Foto7.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">7 / 13</div>
                        <img  src="imagens/Foto8.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">8 / 13</div>
                        <img  src="imagens/Foto9.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">9 / 13</div>
                        <img  src="imagens/Foto10.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">10 / 13</div>
                        <img  src="imagens/Foto11.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">11 / 13</div>
                        <img  src="imagens/Foto12.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">12 / 13</div>
                        <img  src="imagens/Foto13.png" style="width:100%">
                    </div>

                    <div class="mySlides">
                        <div class="numbertext">13 / 13</div>
                        <img src="imagens/Foto14.png" style="width:100%">
                    </div>



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
        //var p = document.getElementsByTagName("i");
        //
        //
        //    p.onmouseover = function(){
        //        p.classList.remove('far');
        //        p.classList.add('fas');
        //    }
        //    p.onmouseout = function(){
        //        p.classList.remove('fas');
        //        p.classList.add('far');
        //    }   

        var cont = 2;

        function favoritado(icone){
            console.log(icone);
            const i = document.getElementById(icone);
            document.getElementById(icone).classList.toggle('far');
            document.getElementById(icone).classList.toggle('fas');
            //p = document.getElementById(icone);
            cont++;

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