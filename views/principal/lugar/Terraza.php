<?php include_once 'views/template/header-principal.php';
include_once 'views/template/portada.php'; ?>

<div class="col-md-9">

            <section class="service-details-area pt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-1">
                        </div>
                        <div class="col-lg-10">
                            <div class="service-details-wrap ">
                                <div class="service-img-wrap owl-carousel owl-theme mb-100">
                                    <div class="single-services-imgs">
                                        <img src="<?php echo RUTA_PRINCIPAL . 'assets/img'; ?>/terraza/terraza3.jpg" alt="Image">
                                    </div>
                                    <div class="single-services-imgs">
                                        <img src="<?php echo RUTA_PRINCIPAL . 'assets/img'; ?>/terraza/terraza2.jpg" alt="Image">
                                    </div>
                                    <div class="single-services-imgs">
                                        <img src="<?php echo RUTA_PRINCIPAL . 'assets/img'; ?>/terraza/terraza1.jpg" alt="Image">
                                    </div>
                                </div>
                                <h3>The charming view of the city</h3>
                                
                            </div>
                        </div>
                        
                    </div>
                    <p></p>
                    <button class="default-btn" type="submit" >

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

                
            </section>
        </div>
    </div>


    
</div>



<?php echo include_once 'views/template/footer-principal.php' ?>