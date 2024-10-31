<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php';?>

<div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body center">
                        <p>Un oasis de tranquilidad en el corazón de la ciudad

Bienvenido al Hotel Mediterráneo, un lugar donde el lujo y la comodidad se unen para crear una experiencia inolvidable. Nuestro hotel es el lugar perfecto para su próxima escapada romántica, reunión de negocios o simplemente para relajarse y disfrutar de la vida.

Nuestras habitaciones

Nuestras habitaciones son amplias y luminosas, y están equipadas con todas las comodidades que necesita para sentirse como en casa. Disfrute de una buena noche de sueño en nuestra cama de lujo, relájese en nuestra bañera de hidromasaje o simplemente disfrute de la vista desde su balcón privado.
                        </p>
Nuestras instalaciones

Nuestro hotel cuenta con una variedad de instalaciones para satisfacer todas sus necesidades. Relájese en nuestra piscina al aire libre, disfrute de un masaje en nuestro spa o haga ejercicio en nuestro gimnasio. También ofrecemos una variedad de servicios para reuniones y eventos, como salas de reuniones, un centro de negocios y un salón de banquetes.

Nuestra ubicación
                        </p>
El Hotel Mediterráneo está ubicado en el corazón de la ciudad, a poca distancia de los principales lugares de interés. También estamos a solo minutos del aeropuerto, lo que hace que sea fácil llegar a nuestro hotel.

Reserve su estancia hoy mismo

Para reservar su estancia en el Hotel Mediterráneo, por favor visite nuestro sitio web o llámenos al +503 1234-5678.

¡Esperamos darle la bienvenida pronto!
<p>
Características destacadas:
<p>
Habitaciones amplias y luminosas<p>
Bañeras de hidromasaje en algunas habitaciones<p>
Balcones privados<p>
Piscina al aire libre<p>
Spa<p>
Gimnasio<p>
Salas de reuniones<p>
Centro de negocios<p>
Salón de banquetes<p>
Ubicación céntrica<p>
A pocos minutos del aeropuerto  <p>  
                        <div class="single-rooms-three-wrap">
                            <div class="single-rooms-three">
                                <img src="<?php echo RUTA_PRINCIPAL . 'assets'; ?>/img/terraza/Terraza1.jpg" alt="Image" ;>
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

                                <?php }?>
                                    
                                </button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>

        </div>




<?php echo include_once 'views/template/footer-principal.php' ?>