<header id="site-header" class="site-header header-overlay sticky-header header-style-2 header-fullwidth">
            <!-- Main Header start -->
            
            <div class="octf-main-header">
                <div class="octf-area-wrap">
                    <div class="container-fluid octf-mainbar-container">
                        <div class="octf-mainbar">
                            <div class="octf-mainbar-row octf-row">
                                <div class="octf-col logo-col">
                                    <div id="site-logo" class="site-logo">
                                        <a href="<?=$app_path;?>">
                                           <span class="logo-text">Schtick <br />Technologies</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="octf-col menu-col">
                                    <nav id="site-navigation" class="main-navigation">
                                        <ul class="menu nav-style-2">
                                            <li class="<?php if($page_title=="home"){echo "current-menu-item";}?>">
                                                <a href="<?= $app_path ?>">Home</a>
                                            </li>
                                            <li class="<?php if($page_title=="about"){echo "current-menu-item";}?>">
                                                <a href="<?= $app_path ?>about.php">What is SchtickBox </a>
                                            </li>
                                            <li class="<?php if($page_title=="privacy"){echo "current-menu-item";}?>">
                                                <a href="<?= $app_path ?>privacy-policy.php">Privacy Policy</a>
                                            </li>
                                            <li class="<?php if($page_title=="contact"){echo "current-menu-item";}?>">
                                                <a href="<?= $app_path ?>contact.php">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="octf-col cta-col text-right">
                                <!-- Call To Action -->
                                    <div class="octf-btn-cta hstyle-2">

                                        <div class="octf-header-module">
                                            <div class="btn-cta-group btn-cta-header">
                                                <a class="octf-btn octf-btn-second" href="">Apple</a>
                                            </div>
                                        </div>

                                        <div class="octf-header-module">
                                            <div class="btn-cta-group btn-cta-header">
                                                <a class="octf-btn octf-btn-third" href="">Google Play</a>
                                            </div>
                                        </div>
                                        
                                    </div>                              
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header_mobile">
                <div class="container">
                    <div class="mlogo_wrapper clearfix">
                        <div class="mobile_logo">
                            <a href="">
                                <span class="logo-text">Schtick <br />Technologies</span>
                            </a>
                        </div>
                        <div id="mmenu_toggle">
                            <button></button>
                        </div>
                    </div>
                    <div class="mmenu_wrapper">
                        <div class="mobile_nav collapse">
                            <ul id="menu-main-menu" class="mobile_mainmenu">
                             <li class="<?php if($page_title=="home"){echo "current-menu-item";}?>">
                                <a href="<?= $app_path ?>">Home</a>
                            </li>
                            <li class="<?php if($page_title=="about"){echo "current-menu-item";}?>">
                                <a href="<?= $app_path ?>about.php">What is SchtickBox </a>
                            </li>
                            <li class="<?php if($page_title=="faq"){echo "current-menu-item";}?>">
                                <a href="<?= $app_path ?>faq.php">FAQ</a>
                            </li>
                            <li class="<?php if($page_title=="privacy"){echo "current-menu-item";}?>">
                                <a href="<?= $app_path ?>privacy-policy.php">Privacy Policy</a>
                            </li>
                            <li class="<?php if($page_title=="contact"){echo "current-menu-item";}?>">
                                <a href="<?= $app_path ?>contact.php">Contact</a>
                            </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>