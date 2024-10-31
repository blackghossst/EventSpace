<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php';?>

<div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body center">
                   <h2> Descubre la magia de Finca del Carmen</h2>

Enclavada en un entorno natural de singular belleza, Finca del Carmen te ofrece un espacio único y lleno de encanto para celebrar tus eventos más especiales. Rodeada de exuberante vegetación y con la historia susurrando entre sus muros, nuestra finca es el lugar ideal para crear recuerdos inolvidables.
<p>
Un espacio versátil para tus necesidades
<p>
Finca del Carmen se adapta a tus sueños, ya sea que desees celebrar una boda romántica, un cumpleaños familiar, una reunión corporativa o un retiro espiritual. Nuestro espacio te ofrece:
<P>
Patio central con encanto: Un espacio abierto y acogedor, con una fuente que aporta frescura y serenidad, perfecto para recepciones, cócteles o cenas al aire libre.
Salones con historia: Disponemos de salones con diferentes capacidades, decorados con un estilo rústico y elegante, que conservan el encanto de la época colonial.
Jardines exuberantes: Rodeados de árboles centenarios y flores exóticas, nuestros jardines te ofrecen un escenario mágico para ceremonias, sesiones de fotos o simplemente disfrutar de la naturaleza.
Alojamiento con encanto: Para aquellos que deseen prolongar su estancia, ofrecemos cómodas habitaciones con un ambiente acogedor y vistas al jardín.
Servicios personalizados
<P>
<h2>En Finca del Carmen, nos esforzamos por hacer de tu evento una experiencia única. Te ofrecemos:</h2>
<p>
Asesoría en la planificación: Te ayudamos a organizar cada detalle de tu evento, desde la decoración hasta el catering.
Catering a tu medida: Trabajamos con los mejores proveedores para ofrecerte menús deliciosos y adaptados a tus preferencias.
Mobiliario y decoración: Contamos con una amplia variedad de mobiliario y elementos decorativos para crear la atmósfera perfecta.
Personal atento y profesional: Nuestro equipo se encargará de que todo salga a la perfección para que tú y tus invitados solo tengan que disfrutar.
Un lugar para conectar con la naturaleza y la historia
<P>
Finca del Carmen te invita a desconectar del bullicio de la ciudad y sumergirte en un ambiente de tranquilidad y belleza.  Aquí podrás disfrutar de la naturaleza, la historia y la magia de un lugar con alma.
<div class="single-rooms-three-wrap">
                            <div class="single-rooms-three">
                                <img src="<?php echo RUTA_PRINCIPAL . 'assets'; ?>/img/finca/finca2.jpg" alt="Image" ;>
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