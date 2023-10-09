
    <div class="templateux-cover" style="background-image: url(<?php echo base_url("assets/images/hero_1.jpg"); ?>);">
      <div class="container">
        <div class="row align-items-lg-center">

          <div class="col-lg-6 order-lg-1 text-center mx-auto">
            <h1 class="heading mb-3 text-white" data-aos="fade-up"><?php echo $detailAnnonce["titre_annonce"]; ?></h1>
            <p class="lead mb-5 text-white" data-aos="fade-up"  data-aos-delay="100"><?php echo $detailAnnonce["date_annonce"]; ?> &bullet; <a href="#" class="text-white">John Smith</a></p>
          </div>

        </div>
      </div>
    </div> <!-- .templateux-cover -->
<div id="blog" class="templateux-section">
      <div class="container">

        <div class="row">

          <div class="col-md-8">
            <h2 class="mb-3"><?php echo $detailAnnonce["titre_annonce"]; ?></h2>

            <!-- <p><img src="images/hero_1.jpg" alt="" class="img-fluid"></p> -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
            <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
            <p>
              <img src="<?php echo base_url("assets/images/slider-1.jpg"); ?>" alt="" class="img-fluid">
            </p>
            <p><a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#productModal">Remplir votre CV</a></p>
            <div class="modal" id="productModal">
              <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content"  style="width : 100%;">
                  <div class="modal-header">
                    <h5 class="modal-title">Votre CV :</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- <div class="modal-body">
                    <form action="<?php echo base_url("Medicament_Controller/newFournisseur") ?>" method="post">
                      <div class="form-group">
                        <label for="fournisseur">
                          Nouveau fournisseur : 
                        </label>
                        <input type="text" name="fournisseur" id="fournisseur" placeholder="Entrer le fournisseur" class="form-control">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="form-control">
                          Enregistrer
                        </button>
                      </div>
                    </form>
                  </div> -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                  </div>
                </div>
              </div>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <div class="categories">
                <h3>Profil requis</h3>
                <li><a href="#">Diplome <span>
                    <?php 
                        echo $detailAnnonce["nom_diplome"]; 
                    ?>
                </span></a></li>
                <li><a href="#">Experience <span><?php echo $detailAnnonce["experience_requis"]; ?></span></a></li>
                <li><a href="#">Position <span> <?php echo $detailAnnonce["distance_entreprise"] ?> </span></a></li>
                <li><a href="#">Genre :  
                    <span>
                        <?php
                            echo $detailAnnonce["genre"];
                        ?>
                    </span></a></li>
                <li><a href="#">Filiere <span> <?php echo $detailAnnonce["nom_filiere"]; ?> </span></a></li>
                <li><a href="#">Age min <span> <?php echo $detailAnnonce["age_min"]; ?> </span></a></li>
                <li><a href="#">Age max <span> <?php echo $detailAnnonce["age_max"]; ?> </span></a></li>
              </div>
            </div>
            <div class="sidebar-box">
              <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4 rounded">
              <h3>A propos du service</h3>
              <p><?php echo $detailAnnonce["description_annonce"]; ?></p>
              <p><a href="#" class="btn btn-primary btn-lg">En savoir plus</a></p>
            </div>

            <div class="sidebar-box">
              <h3>Competences techniques</h3>
              <div class="tagcloud">
                <?php
                    for($i=0; $i<count($competenceTechnique); $i++) {
                        ?>
                        <a href="#" class="tag-cloud-link"><?php echo $competenceTechnique[$i]["nom_competence_technique"]; ?></a>
                    <?php }
                ?>
              </div>
            </div>

            <div class="sidebar-box">
              <h3>Competences linguistiques</h3>
              <div class="tagcloud">
              <?php
                    for($i=0; $i<count($competenceLinguistique); $i++) {
                        ?>
                        <a href="#" class="tag-cloud-link"><?php echo $competenceLinguistique[$i]["nom_competence_linguistique"]; ?></a>
                    <?php }
                ?>
              </div>
            </div>

            <!-- <div class="sidebar-box">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div> -->
          </div>
        </div>


      </div>
    </div>