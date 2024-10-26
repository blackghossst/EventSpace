<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php'; ?>

<section class="news-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span><?php echo $data['title']; ?></span>
            <h2><?php echo $data['subtitle']; ?></h2>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="alert alert-<?php echo ['tipo']; ?> alert-dismissible fade show"
                            role="alert">
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="alert"
                                aria-label="Close"></button>

                            <strong>Respuesta</strong><?php echo $data['mensaje']; ?>
                        </div>

                        <div id='calendar'></div>

                    </div>
                </div>

            </div>

            <div class="col-md-3">
                <div class="card">
                    <div class="car-body">
                        <!----- ----------------------------------------------------->
                        <form method="get" id="formulario" action="<?php echo RUTA_PRINCIPAL . 'reserva/verify'; ?>">

                            <div class="check-content">
                                <p>Fecha de Reserva</p>
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker-1">
                                        <i class="flaticon-calendar"></i>
                                        <input type="text" class="form-control" name="f_reserva" id="f_reserva" value="<?php echo $data['disponible']['f_reserva'] ?>">
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-th"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="check-content">
                                <div class="form-group">
                                    <label for="lugares" class="form-label">LUGARES</label>
                                    <select
                                        name="lugares"
                                        class="select-auto"
                                        id="lugares"
                                        style="width: 100%;">
                                        <option value="">seleccionar</option>
                                        <?php foreach ($data['lugares'] as $lugar) { ?>
                                            <option value="<?php echo $lugar['id'] ?>" <?php echo ($lugar['id'] ==  $data['disponible']['lugares']) ? 'selected' : ''; ?>>
                                                <?php echo $lugar['nombre'] ?>
                                            </option>
                                        <?Php } ?>

                                    </select>
                                </div>
                            </div>


                            <div class="check-btn check-content mb-0">
                                <button class="default-btn" type="submit">
                                    Verificar
                                    <i class="flaticon-right"></i>
                                </button>
                            </div>
                        </form>
                        <!---------------------------------------->
                        <div class="single-rooms-three-wrap">
                            <div class="single-rooms-three">
                                <img src="<?php echo RUTA_PRINCIPAL . 'assets'; ?>/img/lugares/img5.jpg" alt="Image" ;>
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


    </div>
    </div>
</section>


<?php echo include_once 'views/template/footer-principal.php' ?>

<script src="<?php echo RUTA_PRINCIPAL . 'assets/principal/js/pages/reservas.js'; ?>"></script>

</body>

</html>