<?php
/*
    VR Theme | Front Page
    Project  | VR for Disabled
	Copyright: 2019, Jan Hamara, 2184316h@student.gla.ac.uk
    Wordpress v5.3
*/
?>

<?php get_header(); ?>

    <main id="vr-main">
        <header id="vr-header">
            <?php get_template_part( 'template-parts/header/page', 'header' ); ?>
        </header>

        <section id="vr-main-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 vr-main-menu-item">
                        <a href="#WhatIsVR">
                            <div class="vr-mm-item vr-mm-1">
                                <div class="vr-mm-item-content">
                                    <!--    Main Heading    -->
                                    <h3>
                                        <i aria-hidden="true" class="fa fa-question-circle" title="Question icon"></i>
                                        &nbsp;
                                        What is Virtual Reality?
                                    </h3>

                                    <!--    Sub-Heading    -->
                                    <h4>
                                        <span>Click</span> to learn about Virtual Reality<br/>
                                        technology and how you can use it
                                    </h4>

                                    <!--    Text-to-Speech Switch    -->
                                    <i aria-hidden="true" class="fa fa-volume-up text-to-speech-icon" title="Text-to-Speech Icon"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 vr-main-menu-item">
                        <a href="#HistoryOfVR">
                            <div class="vr-mm-item vr-mm-2">
                                <div class="vr-mm-item-content">
                                    <!--    Main Heading    -->
                                    <h3>
                                        <i aria-hidden="true" class="fa fa-question-circle" title="Question icon"></i>
                                        &nbsp;
                                        History of Virtual Reality
                                    </h3>

                                    <!--    Sub-Heading    -->
                                    <h4>
                                        <span>Click</span> to learn about history of<br/>
                                        Virtual Reality technology
                                    </h4>

                                    <!--    Text-to-Speech Switch    -->
                                    <i aria-hidden="true" class="fa fa-volume-up text-to-speech-icon" title="Text-to-Speech Icon"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 vr-main-menu-item">
                        <a href="#DevicesVR">
                            <div class="vr-mm-item vr-mm-3">VR Devices</div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 vr-main-menu-item">
                        <a href="#AppsVR">
                            <div class="vr-mm-item vr-mm-4">VR Apps</div>
                        </a>
                    </div>
                    <div class="col-lg-4 vr-main-menu-item">
                        <a href="#DonateVR">
                            <div class="vr-mm-item vr-mm-5">Donate</div>
                        </a>
                    </div>
                    <div class="col-lg-4 vr-main-menu-item">
                        <a href="#ContactVR">
                            <div class="vr-mm-item vr-mm-6">Contact Us</div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>