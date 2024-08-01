<!DOCTYPE html>
<html lang="en">
<style>
    .dropdown-menu .dropdown-item:hover {
        background-color: blue;
        /* Cambia el color aquí */
        color: #fff;
    }



    .navbar-nav .nav-link {
        font-size: .8em;
        /* Cambia el tamaño de la fuente aquí */
        margin-right: 15px;
        /* Espacio a la derecha de cada elemento del menú desplegable */
        margin-left: 15px;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .dropdown-menu .dropdown-item {
        font-size: .8em;
        /* Cambia el tamaño de la fuente aquí */
    }

    .dropdown-menu.show {
        display: block;
    }


    .nav-link i {
        font-size: .8em;
        /* Adjust the size of the icon */
        color: #25D366;
        /* Green color for WhatsApp icon */
        margin-right: 5px;
        /* Space between the icon and text */
    }

    .whatsapp-link {
        font-size: .8em;
        /* Adjust the size of the text */
    }

    .nav-link i:hover {
        color: #128C7E;
        /* Darker green on hover */
    }

    .nav-link {
        display: flex;
        align-items: center;
        gap: 5px;
    }




    .map-responsive {
        overflow: hidden;
        padding-bottom: 56.25%;
        /* Proporción 16:9 */
        position: relative;
        height: 0;
        margin-left: 20%;
    }

    .map-responsive iframe {
        left: 0;
        top: 0;
        height: 50%;
        width: 250%;
        position: absolute;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autopartes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>

<body>
    <?php include('menu_under.php'); ?>

    <br>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Contact</h1>

        <hr>
        <h3 class="mt-4">LOCATION:</h3>
        <div class="map-responsive">
            <!-- Reemplaza la URL del mapa con el mapa de tu ubicación -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3377.297838371218!2d-110.97964362385356!3d32.169242314796904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86d67a0d0b7dfa3b%3A0xda85ea96a0b7cab!2s4535%20S%2012th%20Ave%2C%20Tucson%2C%20AZ%2085714%2C%20EE.%20UU.!5e0!3m2!1ses-419!2smx!4v1718657469972!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <?php include('footer.php'); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let dropdownLink = document.querySelectorAll(".nav-link.dropdown-toggle");

        dropdownLink.forEach(function(element) {
            let dropdownMenu = element.nextElementSibling;

            element.addEventListener("mouseover", function() {
                dropdownMenu.classList.add("show");
                this.parentNode.classList.add("show");
            });

            element.addEventListener("mouseout", function() {
                dropdownMenu.classList.remove("show");
                this.parentNode.classList.remove("show");
            });

            dropdownMenu.addEventListener("mouseover", function() {
                this.classList.add("show");
                this.parentNode.classList.add("show");
            });

            dropdownMenu.addEventListener("mouseout", function() {
                this.classList.remove("show");
                this.parentNode.classList.remove("show");
            });
        });


        // Inicializar el carrusel
        $('#carouselE1').carousel();

        // Avanzar automáticamente cada 3 segundos
        setInterval(function() {
            $('#carouselE1').carousel('next');
        }, 3000); // 3000 milisegundos = 3 segundos
    });
</script>
</script>