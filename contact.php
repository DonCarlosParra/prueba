<!DOCTYPE html>
<html lang="en">

<?php include('head.php'); ?>
<?php include('data_sesion.php'); ?>
<style>
    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .contact-icon {
        flex: 0 0 auto;
        margin-right: 10px;
    }

    .contact-icon img {
        width: 35px;
        /* Ajusta el tamaño del icono según sea necesario */
        height: auto;
    }

    .contact-info {
        flex: 1 1 auto;
    }

   

    .map-responsive {
        overflow: hidden;
        padding-bottom: 40%;
        /* Ajusta este valor según el tamaño deseado del mapa */
        position: relative;
        height: 0;
        margin-bottom: 20px;
        /* Añade un margen inferior para el espacio antes del footer */
    }

    .map-responsive iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }
</style>

<body>
    <?php include('menu.php'); ?>
    <section id="contact" class="about section" style="margin-top: 100px;">
        <div class="container section-title">
            <center>
                <h2><?php echo $lang['contact_title']; ?></h2>
                <p><?php echo $lang['contact_subtitle']; ?></p>
            </center>
        </div>
    </section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 contact-item">
                <div class="contact-icon">
                    <img src="img/email.png" alt="Email Icon">
                </div>
                <div class="contact-info">
                    <h3><?php echo $lang['contact_email_title']; ?></h3>
                    <p><?php echo $lang['contact_email']; ?></p>
                </div>
            </div>
            <div class="col-md-4 contact-item">
                <div class="contact-icon">
                    <img src="img/phone.png" alt="Phone Icon">
                </div>
                <div class="contact-info">
                    <h3><?php echo $lang['contact_phone_title']; ?></h3>
                    <p><?php echo $lang['contact_phone']; ?></p>
                </div>
            </div>
            <div class="col-md-4 contact-item">
                <div class="contact-icon">
                    <img src="img/mapa.png" alt="Address Icon">
                </div>
                <div class="contact-info">
                    <h3><?php echo $lang['contact_address_title']; ?></h3>
                    <p><?php echo $lang['contact_address']; ?></p>
                </div>
            </div>
        </div>
        <hr>
        <h3 class="mt-4"><?php echo $lang['contact_location_title']; ?></h3>
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3377.297838371218!2d-110.97964362385356!3d32.169242314796904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86d67a0d0b7dfa3b%3A0xda85ea96a0b7cab!2s4535%20S%2012th%20Ave%2C%20Tucson%2C%20AZ%2085714%2C%20EE.%20UU.!5e0!3m2!1ses-419!2smx!4v1718657469972!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>


    <?php include('celcular.php'); ?>
    <?php include('footer.php'); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>

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
</script>