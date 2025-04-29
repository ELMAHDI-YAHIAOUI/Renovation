<?php
    require "partials/header.php"
?>
    
    <section id="pageCover" class="row servicePage" style='background: url("images/prestation.jpg") no-repeat scroll center center;'>
        <div class="row pageTitle">Climatisation</div>
        <div class="row pageBreadcrumbs">
            <ol class="breadcrumb">
              <li><a href="index.php">acceuil</a></li>
              <li class="active">services</li>
            </ol>
        </div>
    </section>
    
    <section id="services" class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="row m0 whyUs">
                            <div class="col-sm-12">
                                <div class="row m0 whyUsInner">
                                    <div class="col-sm-7">
                                        <h3>Pourquoi ce service<i class="fa fa-question"></i></h3>
                                        <p>Assurer votre confort thermique, en particulier pendant les mois chauds. Des spécialistes de la climatisation vous proposent des solutions adaptées à votre espace, effectuent l'installation, les réparations et l'entretien régulier pour optimiser les performances de votre système de climatisation et garantir votre confort tout au long de l'année.</p>
                                    </div>
                                    <div class="col-sm-5">
                                    <ul class="list-inline tagFeatures">
                                            <li><span class="badge"><i class="fa fa-check"></i></span>Service client 24/7 </li>
                                            <li><span class="badge"><i class="fa fa-check"></i></span> Gain de temps</li>
                                            <li><span class="badge"><i class="fa fa-check"></i></span> Renouvellement complet</li>
                                            <li><span class="badge"><i class="fa fa-check"></i></span>Protection optimale</li>
                                            <li><span class="badge"><i class="fa fa-check"></i></span> Maximisation de l'efficacité</li>
                                            <li><span class="badge"><i class="fa fa-check"></i></span> Qualité de service</li>
                                            <li><span class="badge"><i class="fa fa-check"></i></span> Sécurité garantie</li>
                                            <li><span class="badge"><i class="fa fa-check"></i></span>Votre confort fourni</li>
                                            
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row m0 whatOffer" id="prestation">
                            <div class="col-sm-12">
                                <div class="row m0 whatOfferInner">
                                    <h3>Service de Climatisation</h3>
                                    <p><span class="fleft bigLetter">C</span> <span>limatisation</span> 
                                    Le service de climatisation englobe à la fois l'installation et le dépannage des systèmes de climatisation. Les techniciens spécialisés dans ce domaine sont compétents pour installer,
                                     réparer et entretenir différents types de systèmes de climatisation, tels que les climatiseurs centraux, les climatiseurs split, les climatiseurs de fenêtre, etc. Ils sont responsables
                                      de la mise en place de l'unité de climatisation, de l'installation du système de ventilation approprié, de la connexion des conduites d'air et de l'ajustement des réglages pour assurer
                                       un refroidissement efficace et confortable de l'espace. En cas de problème ou de panne, ils effectuent le dépannage des systèmes de climatisation en diagnostiquant les dysfonctionnements.
                                 </p>
                                </div>
                            </div>
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
            <div class="col-md-8">
            <div class="row m0 commentForm">
            <h3>Demande de Devis</h3>
                    <form class="row m0" id="contactForm" method="post" name="contact" action="contact_process.php">
                    
                                <div class="col-sm-6 p0 commenterInfoInputs">
                                    <div class="row m0">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" name="name" id="name"  placeholder="Nom et Prénom">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                            <input type="text"  name="adresse" id="url" class="form-control" placeholder="Adresse">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="text"  name="phone" id="url" class="form-control" placeholder="Téléphone">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-6 p0">
                                    <div class="row m0"> 
                                    <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-calendar-days"></i></span>
                                            <input type="text"  name="url" id="url" class="form-control" placeholder="Date Prévue">
                                        </div>                               
                                    <div class="input-group">
                                            <textarea placeholder="Description du projet " name="message" id="message" class="form-control"></textarea>
                                    </div>
                                    <button class="btn btn-default" type="submit">Envoyer</button>
                                    </div>
                                </div>
                            </form>
                <div id="success">
                    <span class="green textcenter">
                        <p>Your message was sent successfully! I will be in touch as soon as I can.</p>
                    </span>
                </div>
                <div id="error">
                    <span>
                        <p>Something went wrong, try refreshing and submitting the form again.</p>
                    </span>
                </div>
            </div>
        </div>           
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <?php
    require "partials/footer.php"
    ?>