<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php';?>

<div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body center">
                   <H2> Escápate a la tranquilidad y belleza de Rancho Canto de Mar</H2>

Ubicado en un entorno privilegiado frente al mar, Rancho Canto de Mar es el lugar ideal para disfrutar de unas vacaciones inolvidables en familia o con amigos. Nuestro rancho te ofrece la combinación perfecta de comodidad, tranquilidad y diversión, con todas las comodidades que necesitas para una estancia placentera.

Un espacio para crear recuerdos

Nuestro rancho cuenta con:
<P>
Amplias habitaciones: Con capacidad para alojar cómodamente a grupos grandes, cada habitación está diseñada para ofrecerte un descanso reparador con vistas al mar.
Cocina totalmente equipada: Prepara deliciosas comidas en nuestra cocina, que cuenta con todos los electrodomésticos y utensilios necesarios.
Terraza con vista panorámica: Disfruta de las impresionantes vistas al mar y la brisa fresca desde nuestra terraza, ideal para relajarse o compartir momentos especiales.
Piscina refrescante: Date un chapuzón en nuestra piscina y disfruta del sol mientras te rodeas de un ambiente tropical.
Acceso directo a la playa: Camina unos pasos y sumérgete en las aguas cristalinas del mar, perfecto para nadar, tomar el sol o practicar deportes acuáticos.
Jardín tropical: Relájate en nuestro exuberante jardín, rodeado de palmeras y flores exóticas, que crean un ambiente de paz y serenidad.
Gazebo para eventos: Celebra tus ocasiones especiales en nuestro gazebo, con espacio para reuniones, barbacoas o simplemente disfrutar de la sombra.
Crea momentos inolvidables
<P>
<H2> Rancho Canto de Mar es el lugar perfecto para:</H2>
<P>
Vacaciones familiares: Crea recuerdos inolvidables con tus seres queridos en un entorno seguro y relajante.
Escapadas románticas: Disfruta de la privacidad y la tranquilidad que ofrece nuestro rancho para una experiencia romántica.
Reuniones con amigos: Comparte momentos de diversión y alegría con tus amigos en un ambiente acogedor.
Eventos especiales: Celebra bodas, cumpleaños y otras ocasiones especiales en un entorno mágico frente al mar.
Reserva tu estancia
<P>
No esperes más para vivir la experiencia Rancho Canto de Mar. Contáctanos para reservar tu fecha y comenzar a planificar tus vacaciones soñadas.
<div class="single-rooms-three-wrap">
                            <div class="single-rooms-three">
                                <img src="<?php echo RUTA_PRINCIPAL . 'assets'; ?>/img/rancho/rancho1.jpg" alt="Image" ;>
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