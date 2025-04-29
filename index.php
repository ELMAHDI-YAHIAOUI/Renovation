<?php
    require "partials/header.php"
?>
     
    <section id="nr_slider" class="row">
        <div class="mainSliderContainer">
            <div class="mainSlider" >
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide1.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="center" 
                           data-y="140" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                            <h2>Nous couvrons tous vos besoins de <strong>Renovation</strong>
                       </div>
                       <div class="caption sfl stl"  
                           data-x="center" 
                           data-y="225" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                            <div class="cont-row">Optimisation de l'habitat  de <span class="bb3">l'inutile</span> au <span class="bb1">fonctionnel.</span></div>
                       </div>
                       <div class="caption skewfromleft skewtoleft"  
                           data-x="center" 
                           data-y="310"
                           data-hoffset="-176" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack"><div class="ico_box"><img src="images/slider/ico1.png" alt="brifcase"></div>
                       </div>
                       <div class="caption sfb stb"  
                           data-x="center" 
                           data-y="310" 
                           data-hoffset="0"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack"><div class="ico_box"><img src="images/slider/ico2.png" alt="brifcase"></div>
                       </div>
                       <div class="caption skewfromright skewtoright"  
                           data-x="center" 
                           data-y="310" 
                           data-hoffset="176"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack"><div class="ico_box"><img src="images/slider/ico3.png" alt="brifcase"></div>
                       </div>                       
                    </li>  
                    <!-- SLIDE 2 -->
                    <li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide2.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="-100" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack"> 
                           <h3>Votre partenaire de confiance pour la</h3>
                       </div>
                       <div class="caption sfl stl"  
                           data-x="-100" 
                           data-y="190" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                            <h4> <strong>Plomberie</strong> Et les  essentielles <strong>Installations</strong></h4>
                       </div>
                       <div class="caption skewfromleft skewtoleft"  
                           data-x="-100" 
                           data-y="265"
                           data-hoffset="-176" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                           <p>Bénéficiez de notre expertise spécialisée en plomberie, avec des solutions<br> adaptées à vos besoins spécifiques. De l'installation de systèmes de plomberie <br> aux réparations et à la maintenance,</p>
                       </div>
                       <div class="caption sfb stb"  
                           data-x="-100" 
                           data-y="375" 
                           data-hoffset="0"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                           <a type="button" class="btn btn-default" href="plomberie.php">En savoir plus</a>
                       </div>         
                    </li>  
                    <!-- SLIDE 3 -->
                    <li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide3.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="-100" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                           <h3>Des solutions optimales de</h3>
                       </div>
                       <div class="caption sfl stl"  
                           data-x="-100" 
                           data-y="190" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                            <h4><strong>Climatisation </strong> pour votre confort. <strong></strong></h4>
                       </div>
                       <div class="caption skewfromleft skewtoleft"  
                           data-x="-100" 
                           data-y="265"
                           data-hoffset="-176" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                           <p>Nous vous proposons des services de climatisation sur mesure, adaptés<br> à vos besoins spécifiques. Notre équipe compétente vous garantit <br>une climatisation efficace et confortable,pour votre espace professionnel.</p>
                       </div>
                       <div class="caption sfb stb"  
                           data-x="-100" 
                           data-y="375" 
                           data-hoffset="0"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                           <a type="button" class="btn btn-default" href="climatisation.php">En savoir plus</a>
                       </div>              
                    </li>                          
                </ul>
            </div>
        </div>
        
        <div class="container sliderAfterTriangle"></div> <!--Triangle After Slider-->
    </section> <!--Slider-->
    
    <section id="nr_services" class="row">
        <div class="container">
            <div class="row sectionTitles">
                <h2 class="sectionTitle">Nos Services</h2>
                <div class="sectionSubTitle">Ce que nous offrons</div>
            </div>
            <div class="row m0 text-center">
                <div class="col-sm-3">
                    <div class="row m0 service" >
                        <div class="row m0 innerRow">
                        <a href="prestation.php">
                            <i class="fa fa-cogs"></i>
                            <div class="serviceName" data-hover="Prestation">Prestation</div>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row m0 service">
                        <div class="row m0 innerRow">
                        <a href="electricite.php">
                        <i class="fa fa-plug"></i> 
                            <div class="serviceName" data-hover="Électricité dépannage et installation">Électricité dépannage et installation</div>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row m0 service">
                        <div class="row m0 innerRow">
                        <a href="plomberie.php">
                            <i class="fa fa-tools"></i>
                            <div class="serviceName" data-hover="Plomberie dépannage et installation">Plomberie dépannage et installation</div>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row m0 service">
                        
                        <div class="row m0 innerRow">
                        <a href="climatisation.php">

                            <i class="fa fa-fan"></i>
                            <div class="serviceName" data-hover="Climatisation">Climatisation </div>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--Services-->
    
    <section id="projectsRow" class="row fullWidth">
        <div class="row sectionTitles m0">
            <h2 class="sectionTitle">Nos Projets</h2>
            <div class="sectionSubTitle">Derniers Travaux</div>
        </div>
        <div class="row filtersRow m0">
            <button type="button" class="collapsed project_filderButton visible-xs" data-toggle="collapse" data-target="#filters">
                <span class="btn-text"><i class="fa fa-filter"></i> Projet Filtre</span>
            </button>
            <ul class="list-inline text-center collapse navbar-collapse filters" id="filters">
                <li class="active" data-filter="*"><i class="fa fa-th"></i>Tout</li>
                <li data-filter=".catprestation">Prestation</li>
                <li data-filter=".catelectricite">Electricité dépannage et installation</li>
                <li data-filter=".catplomberie">Plomberie dépannage et installation</li>
                <li data-filter=".catclimatisation">Climatisation</li>
            </ul>
        </div>
        <div class="row projects m0" id="container">
            <div class="project catprestation">
                
             <img src="images/projects/project1.jpg" alt="Project 1" class="projectImg">
                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">Construction , Réparation</div>
                    </div>
                    <div class="fright projectIcons btn-group" role="group">
                        <a href="images/projects/project1.jpg" data-lightbox="project" data-title="Construction , Réparation" class="btn btn-default"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="project catplomberie">
                
             <img src="images/projects/project2.jpg" alt="Project 2" class="projectImg">
                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">Tuyaux , Plomberie</div>
                    </div>
                    <div class="fright projectIcons btn-group" role="group">
                        <a href="images/projects/project2.jpg" data-lightbox="project" data-title="Tuyaux , Plomberie" class="btn btn-default"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="project catplomberie">
                
                <img src="images/projects/project3.jpg" alt="Project 3" class="projectImg">
                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">Aménagement , Potager</div>
                    </div>
                    <div class="fright projectIcons btn-group" role="group">
                        <a href="images/projects/project3.jpg" data-lightbox="project" data-title="Aménagement , Potager" class="btn btn-default"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="project catelectricite">
                    <img src="images/projects/project5.jpg" alt="Project 5" class="projectImg">
                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">Installation filaire</div>
                    </div>
                    <div class="fright projectIcons btn-group" role="group">
                        <a href="images/projects/project5.jpg" data-lightbox="project" data-title="Installation filaire" class="btn btn-default"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="project catelectricite">
                    <img src="images/projects/project4.jpg" alt="Project 4" class="projectImg">
                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">Compteur électrique</div>
                    </div>
                    <div class="fright projectIcons btn-group" role="group">
                        <a href="images/projects/project4.jpg" data-lightbox="project" data-title="Compteur électrique" class="btn btn-default"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <div class="project catclimatisation">
                    <img src="images/projects/project6.jpg" alt="Project 6" class="projectImg">
                <div class="projectDetails row m0">
                    <div class="fleft nameType">
                        <div class="row m0 projectName">Ventilateur , Climat</div>
                    </div>
                    <div class="fright projectIcons btn-group" role="group">
                        <a href="images/projects/project6.jpg" data-lightbox="project" data-title="Ventilateur , Climat" class="btn btn-default"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
        </div>        
    </section> <!--Projects-->
    
    <section id="latestPosts" class="row">
        <div class="container">
            <div class="row sectionTitles">
                <h2 class="sectionTitle">Derniers Posts</h2>
                <div class="sectionSubTitle">Actualités</div>
            </div>
            <div class="row">
                <div class="col-sm-4 blog latest-blog">
                    <div class="row m0 blogInner">
                        <div class="row m0 blogDateTime">
                            <i class="fa fa-calendar"></i> 18 November 2014, 11:50 AM
                        </div>
                        <div class="row m0 featureImg">
                            <a href="single-post.php">
                                <img src="images/blog/blog1.jpg" alt="Faceted Search Has Landed" class="img-responsive">
                            </a>
                        </div>
                        <div class="row m0 postExcerpts">
                            <div class="row m0 postExcerptInner">
                                <a href="single-post.php" class="postTitle row m0"><h4>Service électrique complet</h4></a>
                                <p>Nos professionnels qualifiés sont prêts à répondre à tous vos besoins électriques, que ce soit pour l'installation, la réparation ou la maintenance.</p>
                                <a href="single-post.php" class="readMore">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 blog latest-blog">
                    <div class="row m0 blogInner">
                        <div class="row m0 blogDateTime">
                            <i class="fa fa-calendar"></i> 16 November 2014, 12:20 AM
                        </div>
                        <div class="row m0 featureImg">
                            <a href="single-post.php">
                                <img src="images/blog/blog2.jpg" alt="Faceted Search Has Landed" class="img-responsive">
                            </a>
                        </div>
                        <div class="row m0 postExcerpts">
                            <div class="row m0 postExcerptInner">
                                <a href="single-post.php" class="postTitle row m0"><h4>Plomberie fiable et efficace</h4></a>
                                <p>Des services de plomberie. Qu'il s'agisse de fuites, de problèmes de canalisation ou d'installation sanitaire, Nos solutions sur mesure sont adaptées. </p>
                                <a href="single-post.php" class="readMore">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 blog latest-blog">
                    <div class="row m0 blogInner">
                        <div class="row m0 blogDateTime">
                            <i class="fa fa-calendar"></i> 14 November 2014, 10:50 AM
                        </div>
                        <div class="row m0 featureImg">
                            <a href="single-post.php">
                                <img src="images/blog/blog3.jpg" alt="Faceted Search Has Landed" class="img-responsive">
                            </a>
                        </div>
                        <div class="row m0 postExcerpts">
                            <div class="row m0 postExcerptInner">
                                <a href="single-post.php" class="postTitle row m0"><h4>Climatisation professionnelle</h4></a>
                                <p>Notre équipe qualifiée assure une installation de qualité. Profitez d'une climatisation fiable et performante grâce à notre expertise.</p>
                                <a href="single-post.php" class="readMore">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--Latest Blog-->
    
    <section id="testimonials" class="row">
        <div class="container">
            <div class="row sectionTitles">
                <h2 class="sectionTitle whiteTC">Latest Posts</h2>
                <div class="sectionSubTitle whiteTC">fresh news</div>
            </div>
            <div class="row">
                <div class="owl-carousel testimonialSlider row m0">
                    <div class="item">
                        <div class="clientPhoto row m0">
                            <img src="images/testimonial/photo.png" alt="">
                        </div>
                        <div class="clientNameTitle row m0">John Smith, CEO at Evanto</div>
                        <div class="arrow row m0">
                            <img src="images/testimonial/arrow.png" alt="arrow down">
                        </div>
                        <div class="testimonial row m0">This is Photoshop's version of Lorem Ipsum Proin gravida nibh vel velit auctor aliquet. Aenean Sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</div>
                    </div>
                    <div class="item">
                        <div class="clientPhoto row m0">
                            <img src="images/testimonial/photo.png" alt="">
                        </div>
                        <div class="clientNameTitle row m0">John Smith, CEO at Evanto</div>
                        <div class="arrow row m0">
                            <img src="images/testimonial/arrow.png" alt="arrow down">
                        </div>
                        <div class="testimonial row m0">This is Photoshop's version of Lorem Ipsum Proin gravida nibh vel velit auctor aliquet. Aenean Sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum,</div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <?php
    require "partials/footer.php"
    ?>
