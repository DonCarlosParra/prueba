<!DOCTYPE html>
<html lang="en">


<?php include('head.php'); ?>

<?php include('data_sesion.php'); ?>
<style>
   
    .container2 {
        display: flex;
        justify-content: center;
        align-items: flex-end;
        max-width: 80%;
        height: 300px;
        padding: 20px;
        border: 1px solid #ccc;
        background-color: #f7f7f7;
        margin: 0 auto;
        flex-wrap: wrap;
        background-image: url('img/grafica.png');
        background-size: contain;
        /* Ajusta la imagen para que se mantenga dentro del contenedor */
        background-repeat: no-repeat;
        /* Evita que la imagen se repita */
        background-position: center;
        /* Centra la imagen en el contenedor */
    }

    @media (max-width: 768px) {
        .container2 {
            height: 200px;
            /* Puedes ajustar la altura para tamaños de pantalla más pequeños */
        }
    }

    @media (max-width: 576px) {
        .container2 {
            height: 150px;
            /* Ajusta la altura para pantallas aún más pequeñas */
        }
    }

    /* Responsividad para la gráfica */
    /* .container2 {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            max-width: 80%;
            height: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f7f7f7;
            margin: 0 auto;
            flex-wrap: wrap;
        } */

    /* @media (max-width: 805px) {
            .bar {
                width: 27%;
            }
            .container2 {
            height: auto;
        }
        } */

    /* .hour {
        width: 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 5px;
    }

    .bar {
        width: 100%;
        margin-bottom: 5px;
        background: linear-gradient(to bottom, #ff0000, #007bff);
    }

    .bar.level-1 {
        height: 20px;
    }

    .bar.level-2 {
        height: 40px;
    }

    .bar.level-3 {
        height: 60px;
    }

    .bar.level-4 {
        height: 80px;
    }

    .bar.level-5 {
        height: 100px;
    }

    .bar.level-6 {
        height: 120px;
    } */

    .card {
        font-size: 2em;
        /* Aumenta el tamaño del texto dentro de las tarjetas */
    }

    .card-body {
        padding: 2em;
        /* Ajusta el relleno interno de las tarjetas */
    }
</style>

<body>
    <?php include('menu.php'); ?>
    <section id="about" class="about section" style="margin-top: 100px;">
        <div class="container section-title" data-aos="fade-up">
            <center>
                <h2><?php echo $lang['about_title']; ?></h2>
                <p><?php echo $lang['about_subtitle']; ?></p>
            </center>
        </div>
        <section class="services" data-aos="fade-up" style="margin-top: 1px;">
            <div class="container" data-aos="fade-up">
                <div class="row">

                    <div class="col-12 col-md-12 col-lg-4 mb-3">
                        <div class="card text-white text-center bg-max1 pb-2">
                            <div class="card-body">
                                <p><?php echo $lang['card_text_1']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-4 mb-3">
                        <div class="card text-white text-center bg-max2 pb-2">
                            <div class="card-body">
                                <p><?php echo $lang['card_text_2']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-4 mb-5">
                        <div class="card text-white text-center bg-max3 pb-4">
                            <div class="card-body">
                                <p><?php echo $lang['card_text_3']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-4 mb-3">
                        <div class="card text-white text-center bg-max4 pb-2">
                            <div class="card-body">
                                <p><?php echo $lang['card_text_4']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-4 mb-3">
                        <div class="card text-white text-center bg-max5 pb-2">
                            <div class="card-body">
                                <p><?php echo $lang['card_text_5']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-4 mb-3">
                        <div class="card text-white text-center bg-max6 pb-2">
                            <div class="card-body">
                                <p><?php echo $lang['card_text_6']; ?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p><?php echo $lang['about_text_1']; ?></p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> <span><?php echo $lang['list_item_1']; ?></span></li>
                        <li><i class="bi bi-check2-circle"></i> <span><?php echo $lang['list_item_2']; ?></span></li>
                        <li><i class="bi bi-check2-circle"></i> <span><?php echo $lang['list_item_3']; ?></span></li>
                    </ul>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <p><?php echo $lang['about_text_2']; ?></p>
                </div>
            </div>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="row">
            </div>
            <center>
                <h1><?php echo $lang['busiest_hours_title']; ?></h1>
            </center>
        </div>

    </section>
    <div class="container2"></div>
    <!-- Contenido de la página -->
    <!-- <section style="margin-bottom: 50px;">
        <div class="container2">

            <div class="hour">
                <div class="bar level-1"></div>
                <span>8:00 AM</span>
            </div>
            <div class="hour">
                <div class="bar level-2"></div>
                <span>9:00 AM</span>
            </div>
            <div class="hour">
                <div class="bar level-3"></div>
                <span>10:00 AM</span>
            </div>
            <div class="hour">
                <div class="bar level-4"></div>
                <span>11:00 AM</span>
            </div>
            <div class="hour">
                <div class="bar level-6"></div>
                <span>12:00 PM</span>
            </div>
            <div class="hour">
                <div class="bar level-6"></div>
                <span>1:00 PM</span>
            </div>
            <div class="hour">
                <div class="bar level-5"></div>
                <span>2:00 PM</span>
            </div>
            <div class="hour">
                <div class="bar level-4"></div>
                <span>3:00 PM</span>
            </div>
            <div class="hour">
                <div class="bar level-3"></div>
                <span>4:00 PM</span>
            </div>
            <div class="hour">
                <div class="bar level-3"></div>
                <span>5:00 PM</span>
            </div>
            <div class="hour">
                <div class="bar level-2"></div>
                <span>6:00 PM</span>
            </div>
            <div class="hour">
                <div class="bar level-1"></div>
                <span>7:00 PM</span>
            </div>
        </div>
    </section> -->
    <?php include('celcular.php'); ?>

    <?php include('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navbar = document.getElementById('navbar');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        });
    </script>
</body>

</html>