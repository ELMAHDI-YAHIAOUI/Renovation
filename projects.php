<?php
    require "partials/header.php"
?>
    
    <section id="pageCover" class="row projectPage">
        
        <div class="row pageTitle">Projets</div>
        <div class="row pageBreadcrumbs">
            <ol class="breadcrumb">
              <li><a href="index.php">acceuil</a></li>
              <li class="active">projets</li>
            </ol>
        </div>
    </section>
    
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
    
    <?php
    require "partials/footer.php"
    ?>
