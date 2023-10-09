    <div class="templateux-cover" style="background-image: url(images/hero_1.jpg);">
      <div class="container">
        <div class="row align-items-lg-center">

          <div class="col-lg-6 order-lg-1 text-center mx-auto">
            <h1 class="heading mb-3 text-white" data-aos="fade-up">Blog Single Post</h1>
            <p class="lead mb-5 text-white" data-aos="fade-up"  data-aos-delay="100">July 3, 2018 &bullet; by <a href="#" class="text-white">John Smith</a></p>
          </div>

        </div>
      </div>
    </div> <!-- .templateux-cover -->

    <!-- Contenu -->
    <div class="col-md-5 m-auto">
        <h3 class="mb-5">Remplir vos criteres d'annonce</h3>
        <form action="<?php echo site_url("Responsable_Controller/newCritereAnnonce"); ?>" class="p-5 bg-light" method="post">
          <h2><label for="genre">Genre</label></h2>
            <div class="form-group" id="genre">
              <?php
                for($i=0; $i<count($genre); $i++) {
                  ?>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="<?php echo $genre[$i]["id_genre"]; ?>" id="flexCheckDefault" onclick="noteGenre(this)">
                    <label class="form-check-label" for="flexCheckDefault">
                      <?php echo $genre[$i]["nom_genre"]; ?>
                    </label>
                  </div>
                <?php }
              ?>
            </div>
            <h2><label for="competence_requise">Competence technique requise</label></h2>
            <div class="form-group" id="competence_requise">
              <?php
                for($i=0; $i<count($competenceTechnique); $i++) {
                  ?>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="<?php echo $competenceTechnique[$i]["id_competence_technique"]; ?>" id="flexCheckDefault" onclick="noteCompetenceTechnique(this)">
                    <label class="form-check-label" for="flexCheckDefault">
                      <?php echo $competenceTechnique[$i]["nom_competence_technique"]; ?>
                    </label>
                  </div>
                <?php }
              ?>
            </div>
            <h2><label for="competence_linguistique">Competence linguistique requise</label></h2>
            <div class="form-group" id="competence_linguistique">
              <?php
                for($i=0; $i<count($competenceLinguistique); $i++) {
                  ?>
                  <div class="form-check" id="<?php echo "competenceLinguistique".$i ?>">
                    <input class="form-check-input" type="checkbox" value="<?php echo $competenceLinguistique[$i]["id_pays_competence_linguistique"]; ?>" id="<?php echo $i; ?>" onclick="noteLinguistique(this)">
                    <label class="form-check-label" for="<?php echo $i; ?>">
                      <?php echo $competenceLinguistique[$i]["nom_competence_pays"]; ?>
                    </label>
                  </div>
                <?php }
              ?>
            </div>
            <h2><label for="nationalite">Nationalite</label></h2>
            <div class="form-group" id="nationalite">
              <?php
                for($i=0; $i<count($allPays); $i++) {
                  ?>
                  <div class="form-check" id="<?php echo "allPays".$i ?>">
                    <input class="form-check-input" type="checkbox" value="<?php echo $allPays[$i]["id_pays"]; ?>" id="<?php echo $i; ?>" onclick="noteNationalite(this)">
                    <label class="form-check-label" for="<?php echo $i; ?>">
                      <?php echo $allPays[$i]["appelation"]; ?>
                    </label>
                  </div>
                <?php }
              ?>
            </div>
            <h2><label for="casier_judiciaire">Casier Judiciaire</label></h2>
            <div class="form-group" id="casier_judiciaire">
              <label for="oui">Oui </label>
              <input type="number" class="form-control" id="oui" name="casier1">
              <label for="non">Non </label>
              <input type="number" class="form-control" id="non" name="casier0">
            </div>
            <!-- <h2><label for="age">Age</label></h2>
            <div class="form-group" id="age">
              <input type="number" class="form-control" id="" name="scoredepart" placeholder="Entrer le score de depart">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="augmentation" id="augmentation1">
                <label class="form-check-label" for="augmentation1">
                  Augmentation
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="augmentation" id="augmentation2">
                <label class="form-check-label" for="augmentation2">
                  Diminution
                </label>
              </div>
              <input type="number" class="form-control" id="" name="augmentation" placeholder="Augmentation ou diminution du score"> 
              <input type="number" class="form-control" id="" name="annee" placeholder="Par combien d'annee">
            </div> -->
            <h2><label for="diplome">Diplome</label></h2>
            <div class="form-group" id="diplome">
              <?php
                for($i=0; $i<count($allDiplome); $i++) {
                  ?>
                  <label for=<?php echo "diplome".$i; ?>>
                    <?php echo $allDiplome[$i]["nom_diplome"]; ?>
                  </label>
                  <input type="number" class="form-control" name="<?php echo "noteDiplome".$allDiplome[$i]["id_diplome"]; ?>" id="<?php echo "diplome".$i; ?>">
                <?php }
              ?>
            </div>
            <h2><label for="experience">Experience</label></h2>
            <div class="form-group" id="experience">
                <label for="min">Note : </label>
                <input type="number" class="form-control" id="min" name="note_experience"> par
                <label for="an">Combien d'annee : </label>
                <input type="number" class="form-control" id="an" name="annee_experience">
            </div>

            <h2><label for="position">Position</label></h2>
            <div class="form-group" id="position">
              <label for="min">Note : </label>
              <input type="number" class="form-control" id="min" name="note_position">
              <label for="an">Combien de km : </label>
              <input type="number" class="form-control" id="an" name="distance_km">
            </div>

            <input type="hidden" name="id_annonce" value="<?php echo $id_annonce; ?>">

            <div class="form-group">
              <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
            </div>

        </form>
      </div>