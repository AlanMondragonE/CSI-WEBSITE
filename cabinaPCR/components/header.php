<?php require dirname(dirname(__DIR__)) . '/website-assets/components/head.php'; ?>

<body id="body">

    <?php require dirname(dirname(__DIR__)) . '/website-assets/components/loader.php'; ?>

    <div id="content-body" class="body" style="display: none;">
        <?php require dirname(dirname(__DIR__)) . '/website-assets/components/menu.php'; ?>
        <header class="header">

            <div class="header-video">
                <video loading="lazy" type="video/mp4" loop autoplay muted playsinline data-wf-ignore="true" data-object-fit="fill">
                    <source src="img/videos/pcrVid.mp4" data-wf-ignore="true" />
                </video>
            </div>
            
            <div class="header-content animate__animated animate__fadeInDown">
                <div class="header-options">
                    <div class="btn-action">
                        <span class="btn-action-icon"><i class="fas fa-tablets"></i></span>
                        <div class="btn-action-content">
                            
                            <span class="btn-action-title">Cabina de PCR-HEPA</span>
                        </div>
                    </div>
                    <div class="btn-action">
                        <span class="btn-action-icon"><i class="fas fa-syringe"></i></span>
                        <div class="btn-action-content">
                            
                            <span class="btn-action-title">Cabina de PCR-UV</span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </header>
