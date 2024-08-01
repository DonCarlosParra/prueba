<!DOCTYPE html>
<html lang="en">
<style>
    .dropdown-menu .dropdown-item:hover {
        background-color: blue; /* Cambia el color aquí */
    color:#fff;
    }



      .navbar-nav .nav-link {
        font-size: 1.3em; /* Cambia el tamaño de la fuente aquí */
          margin-right: 15px; /* Espacio a la derecha de cada elemento del menú desplegable */
        margin-left: 15px;
         display: flex;
    align-items: center;
    gap: 5px;
        }

    .dropdown-menu .dropdown-item {
        font-size: 1.3em; /* Cambia el tamaño de la fuente aquí */
    }

    .dropdown-menu.show {
        display: block;
    }


.nav-link i {
    font-size: 2em; /* Adjust the size of the icon */
    color: #25D366;   /* Green color for WhatsApp icon */
    margin-right: 5px; /* Space between the icon and text */
}

.whatsapp-link {
    font-size: 1.3em; /* Adjust the size of the text */
}

.nav-link i:hover {
    color: #128C7E;   /* Darker green on hover */
}
.nav-link {
    display: flex;
    align-items: center;
    gap: 5px;
}



 .carousel-item img {
        max-width: 100%;
        height: auto;
        max-height: 50%; /* Ajusta el valor según el tamaño deseado */
        margin: 0 auto; /* Centra horizontalmente */
        display: block;
    }

    /* Centra verticalmente el contenido de .carousel-caption */
    .carousel-caption {
        top: 50%;
        transform: translateY(-50%);
    }
 /* Estilos para el fondo negro del carrusel */
    .carousel {
        background-color: black;
    }

   
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autopartes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>

<body>

  
<?php include ('menu_under.php'); ?>
    <!--Carousel Indicators-->






<div class="container">
    <img src="img/under.png" class="img-fluid" style="margin-bottom: 10%; margin-top: 1%; margin-left: 18%; width: 50%;">
</div>




    
<?php include ('footer.php'); ?>



   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<script>
   $(document).ready(function() {
        let dropdownLink = document.querySelectorAll(".nav-link.dropdown-toggle");

        dropdownLink.forEach(function (element) {
            let dropdownMenu = element.nextElementSibling;

            element.addEventListener("mouseover", function () {
                dropdownMenu.classList.add("show");
                this.parentNode.classList.add("show");
            });

            element.addEventListener("mouseout", function () {
                dropdownMenu.classList.remove("show");
                this.parentNode.classList.remove("show");
            });

            dropdownMenu.addEventListener("mouseover", function () {
                this.classList.add("show");
                this.parentNode.classList.add("show");
            });

            dropdownMenu.addEventListener("mouseout", function () {
                this.classList.remove("show");
                this.parentNode.classList.remove("show");
            });
        });


});
   
</script>
</script>
