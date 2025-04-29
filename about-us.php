<?php
    require "partials/header.php"
?>
    
    <section id="pageCover" class="row aboutUs">
        <div class="row pageTitle">A Propos</div>
        <div class="row pageBreadcrumbs">
            <ol class="breadcrumb">
            <li><a href="index.php">acceuil</a></li>
            <li class="active">à propos</li>
            </ol>
        </div>
    </section>
    
    <section id="aboutus" class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row aboutContent">
                        <div class="row aboutUsTexts m0 member">
                            <div class="fleft textsPart">
                                <h2>A Propos de nous</h2>
                                <p>Notre société se spécialise dans les services d'électrotechnique, de plomberie et de climatisation. Grâce à notre expertise approfondie dans ces trois domaines, 
                                    nous offrons une gamme complète de prestations de haute qualité pour répondre à tous vos besoins. Que ce soit pour l'installation électrique, 
                                    la résolution de problèmes de plomberie ou l'amélioration de votre système de climatisation, notre équipe de professionnels qualifiés est à votre service.
                                    Nous nous engageons à vous fournir des solutions sur mesure, performantes et durables, en utilisant les technologies les plus avancées tout en respectant les normes de sécurité les plus strictes. 
                                    Placez votre confiance à notre entreprise pour bénéficier de services fiables et performants en matière d'électrotechnique, de plomberie et de climatisation.</p>
                            </div>
                            <div class="fleft aboutImg">
                                <img src="images/team/about-us.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row partnersSlide">
                        <h2>Partenaires</h2>
                        <div class="owl-carousel partnerSlider">
                            <div class="item"><img src="images\partner\Suez.png" alt=""></div>
                            <div class="item"><img src="images\partner\Daikin.png" alt=""></div>
                            <div class="item"><img src="images\partner\ingelec.png" alt=""></div>
                            <div class="item"><img src="images\partner\LG.png" alt=""></div>
                            <div class="item"><img src="images\partner\Viessmann.png" alt=""></div>
                            <div class="item"><img src="images\partner\Buderus.png" alt=""></div>
                            <div class="item"><img src="images\partner\Schneider_Electric.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <aside class="col-sm-3 sidebar">
                    <div class="row m0 recentPostWidget widgetS">
                        <h4>Recent Posts</h4>
                        <div class="row m0 recentblogs">
                            <div class="media recentblog">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/blog/recent1.png" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h5 class="media-heading">This is PhotoShop's version of Lorem Ipsum</h5></a>
                                </div>
                            </div>
                            <div class="media recentblog">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/blog/recent2.png" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h5 class="media-heading">This is PhotoShop's version of Lorem Ipsum</h5></a>
                                </div>
                            </div>
                            <div class="media recentblog">
                                <div class="media-left">
                                    <a href="#">
                                        <img class="media-object" src="images/blog/recent3.png" alt="">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <a href="#"><h5 class="media-heading">This is PhotoShop's version of Lorem Ipsum</h5></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m0 contactWidget widgetS">
                        <h4>Contact us</h4>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-phone"></i> +33 7 77 30 41 66</li>
                            <li><i class="fa fa-envelope"></i> contact@yourdomain.com</li>
                            <li><i class="fa fa-home"></i> 16 RUE ANATOLE FRANCE 95190 GOUSSAINVILLE</li>
                        </ul>
                    </div>
                </aside>
            </div>            
        </div>
    </section>
    
    <?php
    require "partials/footer.php"
    ?>