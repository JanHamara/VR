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
                                <div class="vr-mm-item-content" aria-label="Overview of Virtual Reality">
                                    <!--    Main Heading    -->
                                    <h3>
                                        <i aria-hidden="true" class="far fa-question-circle" title="Question icon"></i>
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
                                <div class="vr-mm-item-content" aria-label="History of Virtual Reality">
                                    <!--    Main Heading    -->
                                    <h3>
                                        <i aria-hidden="true" class="fa fa-landmark" title="History icon"></i>
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
                            <div class="vr-mm-item vr-mm-3">
                                <div class="vr-mm-item-content" aria-label="List of devices for Virtual Reality">
                                    <!--    Main Heading    -->
                                    <h3>
                                        <i aria-hidden="true" class="fas fa-vr-cardboard" title="Store icon"></i>
                                        &nbsp;
                                        Virtual Reality Devices
                                    </h3>

                                    <!--    Sub-Heading    -->
                                    <h4 class="indent-1">
                                        <span>Click</span> to browse or buy various<br/>
                                        Virtual Reality devices
                                    </h4>

                                    <!--    Text-to-Speech Switch    -->
                                    <i aria-hidden="true" class="fa fa-volume-up text-to-speech-icon" title="Text-to-Speech Icon"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 vr-main-menu-item">
                        <a href="#AppsVR">
                            <div class="vr-mm-item vr-mm-4">
                                <div class="vr-mm-item-content" aria-label="List of Applications">
                                    <!--    Main Heading    -->
                                    <h3>
                                        <i aria-hidden="true" class="far fa-play-circle" title="Application icon"></i>
                                        &nbsp;
                                        VR Applications
                                    </h3>

                                    <!--    Sub-Heading    -->
                                    <h4>
                                        <span>Click</span> to browse a list of applications<br/>
                                        you can play in Virtual Reality
                                    </h4>

                                    <!--    Text-to-Speech Switch    -->
                                    <i aria-hidden="true" class="fa fa-volume-up text-to-speech-icon" title="Text-to-Speech Icon"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 vr-main-menu-item">
                        <a href="https://gf.me/u/wxwfz5" target="_blank">
                            <div class="vr-mm-item vr-mm-5">
                                <div class="vr-mm-item-content" aria-label="Donation Option">
                                    <!--    Main Heading    -->
                                    <h3>
                                        <i aria-hidden="true" class="fas fa-coins" title="Donation icon"></i>
                                        &nbsp;
                                        Make a donation
                                    </h3>

                                    <!--    Sub-Heading    -->
                                    <h4>
                                        <span>Click</span> if you want to donate money<br/>
                                        or buy VR device for disabled people
                                    </h4>

                                    <!--    Text-to-Speech Switch    -->
                                    <i aria-hidden="true" class="fa fa-volume-up text-to-speech-icon" title="Text-to-Speech Icon"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 vr-main-menu-item">
                        <a href="#ContactVR">
                            <div class="vr-mm-item vr-mm-6">
                                <div class="vr-mm-item-content" aria-label="Contact Option">
                                    <!--    Main Heading    -->
                                    <h3>
                                        <i aria-hidden="true" class="fas fa-envelope" title="Contact icon"></i>
                                        &nbsp;
                                        Have a question?
                                    </h3>

                                    <!--    Sub-Heading    -->
                                    <h4>
                                        <span>Click</span> if you want to ask a question,<br/>
                                        or if you require any help
                                    </h4>

                                    <!--    Text-to-Speech Switch    -->
                                    <i aria-hidden="true" class="fa fa-volume-up text-to-speech-icon" title="Text-to-Speech Icon"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>