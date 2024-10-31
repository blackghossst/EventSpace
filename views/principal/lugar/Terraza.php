<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php'; ?>

<div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body center">
                        <p>Terraza Valencia
¡Bienvenidos a Terraza Valencia, el lugar perfecto para tus eventos más memorables! Ubicada en un espacio elevado con vistas panorámicas, nuestra terraza es el escenario ideal para cualquier tipo de celebración, ya sea bodas, cumpleaños, eventos corporativos o reuniones familiares.

¿Por qué elegir Terraza Valencia?
Vistas Espectaculares: Disfruta de atardeceres impresionantes con una vista que abarca desde el horizonte de la ciudad hasta las montañas lejanas. El ambiente mágico de las luces y la tranquilidad del lugar crean una atmósfera única para tus eventos.

Espacio Amplio y Elegante: Nuestra terraza cuenta con un espacio versátil y bien iluminado, decorado con luces que brindan un toque sofisticado. Su diseño moderno se adapta a eventos tanto formales como informales.

Equipamiento Completo: Ofrecemos mobiliario de alta calidad, iluminación ambiental y opciones de catering para que no tengas que preocuparte por ningún detalle.

Privacidad Garantizada: Ubicada en una zona exclusiva, Terraza Valencia ofrece un ambiente tranquilo y reservado, alejado del bullicio de la ciudad, pero con fácil acceso para tus invitados.

Servicios Adicionales
Decoración personalizada: Nuestro equipo puede adaptar el espacio según tu temática o necesidades específicas.
Asesoramiento en la planificación: Nos aseguramos de que cada detalle de tu evento esté perfectamente organizado.
Estacionamiento amplio: Acomodamos a todos tus invitados sin problemas de espacio.
¿Cómo Reservar?
Contacta con nosotros para conocer la disponibilidad y tarifas personalizadas. Nuestro equipo estará encantado de ayudarte a planificar un evento que quedará grabado en la memoria de todos los asistentes.</p>
    
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