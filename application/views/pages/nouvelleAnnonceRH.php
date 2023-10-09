<div class="templateux-cover" style="background-image: url(images/hero_1.jpg);">
      <div class="container">
        <div class="row align-items-lg-center">

          <div class="col-lg-6 order-lg-1 text-center mx-auto">
            <h1 class="heading mb-3 text-white" data-aos="fade-up">Blog Single Post</h1>
            <p class="lead mb-5 text-white" data-aos="fade-up"  data-aos-delay="100">July 3, 2018 &bullet; by <a href="#" class="text-white">John Smith</a></p>
            <a href="">Voir toutes les annones</a>
          </div>

        </div>
      </div>
    </div> <!-- .templateux-cover -->

    <!-- Contenu -->
    <div class="col-md-5 m-auto">
        <h3 class="mb-5 m-auto">
            Nouvelle annonce    
        </h3>
        <form action="<?php echo site_url("RH_Controller/newAnnonce"); ?>" class="p-5 bg-light" method="post">
            <div class="form-group">
                <label for="service">
                    Choisissez un service
                </label>
                <select name="service" id="service" class="form-control">
                    <option value="">
                        Choisissez un service
                    </option>
                    <?php
                        for($i=0; $i<count($allService); $i++) {
                            ?>
                            <option value="<?php echo $allService[$i]["id_service"]; ?>">
                                <?php echo $allService[$i]["nom_service"]; ?>
                            </option>
                        <?php }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="titre_annonce">Titre de l'annonce *</label>
                <input type="text" class="form-control" id="titre_annonce" name="titre_annonce">
            </div>
            <div class="form-group">
                <label for="age_min">Age minimum *</label>
                <input type="text" class="form-control" id="age_min" name="age_min">
            </div>
            <div class="form-group">
                <label for="age_max">Age maximum *</label>
                <input type="text" class="form-control" id="age_max" name="age_max">
            </div>
            <div class="form-group">
                <label for="filiere">Filiere *</label>
                <select name="filiere" id="filiere" class="form-control">
                    <option value="">
                        Choisissez une filiere
                    </option>
                    <?php
                        for($i=0; $i<count($allFiliere); $i++) {
                            ?>
                            <option value="<?php echo $allFiliere[$i]["id_filiere"]; ?>">
                                <?php 
                                    echo $allFiliere[$i]["nom_filiere"];
                                ?>
                            </option>
                        <?php }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="diplome">Diplome *</label>
                <select name="diplome" id="diplome" class="form-control">
                    <option value="">
                        Choisissez un diplome
                    </option>
                    <?php
                        for($i=0; $i<count($allDiplome); $i++) {
                            ?>
                            <option value="<?php echo $allDiplome[$i]["id_diplome"]; ?>">
                                <?php 
                                    echo $allDiplome[$i]["nom_diplome"];
                                ?>
                            </option>
                        <?php }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="experience_requis">Niveau d'experience minimum</label>
                <input type="number" class="form-control" id="experience_requis" name="experience_requis">
            </div>
            <div class="form-group">
                <label for="distance_maximum">Distance maximum de l'entreprise</label>
                <input type="number" class="form-control" id="distance_maximum" name="distance_maximum">
            </div>
            <div class="form-group">
                <label for="duree_contrat">Duree du contrat</label>
                <input type="number" class="form-control" id="duree_contrat" name="duree_contrat">
            </div>
            <div class="form-group">
                <label for="salaire_min">Salaire minimum</label>
                <input type="number" class="form-control" id="salaire_min" name="salaire_min">
            </div>
            <div class="form-group">
                <label for="salaire_max">Salaire maximum</label>
                <input type="number" class="form-control" id="salaire_max" name="salaire_max">
            </div>
            <div class="form-group">
                <label for="v_horaire">Volume horaire</label>
                <input type="number" class="form-control" id="v_horaire" name="v_horaire"> par 
            </div>
            <div class="form-group">
                <select name="journalier" id="" class="form-control">
                    <?php
                        for($i=0; $i<count($allJournalier); $i++) {
                            ?>
                            <option value="<?php echo $allJournalier[$i]["id_journalier"]; ?>">
                                <?php echo $allJournalier[$i]["nom_journalier"]; ?>
                            </option>
                        <?php }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="date_depot_final">Date de depot final</label>
                <input type="date" class="form-control" id="date_depot_final" name="date_depot_final">
            </div>

            <div class="form-group">
                <label for="description_annonce">Description de l'annonce</label>
                <textarea name="description_annonce" id="description_annonce" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
            </div>

        </form>
        
        <a href="<?php echo site_url("RH_Controller/listeAnnonce") ?>" class=" btn-primary py-3 px-4 mr-3">Voir la liste des annonces non configures</a>
        <a href="<?php echo site_url("RH_Controller/listeAllAnnonce") ?>" class=" btn-primary py-3 px-4 mr-3">Voir toutes les annonces</a>
    </div>
</div>