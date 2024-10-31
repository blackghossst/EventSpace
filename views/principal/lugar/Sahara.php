<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php';?>

<div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body center">
                    Celebra tus momentos especiales en Hotel Sahara

En Hotel Sahara, convertimos tus eventos en experiencias inolvidables. Nuestro espacio, con una vista panorámica impresionante y una atmósfera encantadora, es el escenario perfecto para bodas, cumpleaños, reuniones corporativas y cualquier ocasión que desees celebrar con estilo.
<p>
<h2> Terraza con encanto</h2>
<p>
Nuestra amplia terraza, adornada con detalles que evocan la magia del desierto, te ofrece un ambiente único y versátil.  Imagina tu boda bajo un cielo estrellado, un cumpleaños rodeado de la belleza natural de las montañas o una reunión de negocios en un entorno inspirador.
<p>
<h2> Servicios a tu medida</h2>
<p>
Nos adaptamos a tus necesidades para que tu evento sea tal como lo imaginaste. Ofrecemos:
<P>
Espacio adaptable: Configuramos la terraza según el tipo de evento y número de invitados.
Decoración personalizada: Te ayudamos a crear la atmósfera perfecta con detalles que reflejen tu estilo.
Catering de primera: Deleita a tus invitados con exquisitos menús elaborados con ingredientes frescos y de calidad.
Equipo audiovisual: Contamos con proyectores, pantallas y sistemas de sonido para tus presentaciones y entretenimiento.
Personal atento: Nuestro equipo se encarga de cada detalle para que tú y tus invitados disfruten al máximo.
Más que un evento, una experiencia

En Hotel Sahara, no solo alquilamos un espacio, te brindamos una experiencia completa. Nuestro compromiso es hacer de tu evento un recuerdo imborrable.
<div class="single-rooms-three-wrap">
                            <div class="single-rooms-three">
                                <img src="<?php echo RUTA_PRINCIPAL . 'assets'; ?>/img/hotel/hotel1.jpg" alt="Image" ;>
                                <div class="check-btn check-content mb-0">
                                <button class="default-btn" type="submit">

                                <?php if (!empty($_SESSION ['id_usuario'])) {?>

                                    <a href="<?php echo RUTA_PRINCIPAL . 'perfil' ?>" class="default-btn"></a>
                                    Procesar
                                    <i class="flaticon-right"></i>
                                <?php }else{?>
                                    <a href="<?php echo RUTA_PRINCIPAL . 'login' ?>" class="default-btn"></a>
                                    Login
                                    <i class="flaticon-right"></i>

                                    <?php }?></button>
<?php echo include_once 'views/template/footer-principal.php' ?>