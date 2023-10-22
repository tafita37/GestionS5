<!-- ##### mirenty section #####-->

<div>
  <section data-bs-version="5.1" class="features1 structurem5 cid-tmYS81vPFo" id="afeatures1-3">
    <div class="container-fluid">
      <main id="main" class="main">
        <section class="section">
          <div class="row">


            <div class="col-lg-6">

              <div class="card corpFormulaire">
                <div class="card-body">
                  <h5 class="card-title">
                    <?php echo $fiche[0]['nom_fiche'] ?>
                  </h5>

                  <!-- Vertical Form -->
                  <form action="inserResultatQCM" class="row g-3" method="post">
                    <input type="hidden" value=<?php echo $id_cv = 1; ?> name="id_cv">
                    <input type="hidden" value=<?php echo json_encode(html_entity_encode $question_reponses); ?> name="question_reponses">
                    <?php
                    $i = 0;
                    foreach ($question_reponses as $qr) {
                      ?>
                      <!-- check box qcm -->
                      <div class="row mb-3">
                        <h3>
                          <legend>Question
                            <?php echo $i +1 . "<br>"; ?>
                          </legend>
                          <input type="hidden" value=<?php echo $qr['question']['nbpoint']; ?> name="nbpointQ<?php echo $i+1?>">
                        </h3>
                        <br>
                        <h6>
                          <?php
                          echo $qr['question']['question'];
                          $u = 1;
                          ?>
                        </h6>
                        <?php foreach ($qr['reponses'] as $reponse) {
                          ?>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <p class="questionCheck">
                                <input class="form-check-input" type="checkbox" id="gridCheck1"
                                  name="checkQ<?php echo $i+1 ?>R<?php echo $u?>">
                                <label class="form-check-label" for="gridCheck1">
                                  <?php
                                  echo $reponse['reponse'];
                                  ?>
                                </label>
                              </p>
                            </div>
                          </div>
                          <?php
                          $u++;
                        } ?>
                      </div>
                      <?php
                      $i++;
                    }
                    ?>
                    <!-- end check box qcm -->
                    <input type="hidden" value=<?php echo $i; ?> name="nombreQuestion">
                    <input type="hidden" value=<?php echo $u; ?> name="nombreReponse">
                    <div class="text-center">
                      <button type="reset" class="btn btn-secondary">annuler</button>
                      <button type="submit" class="btn btn-primary">valider</button>
                    </div>
                  </form><!-- Vertical Form -->
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
  </section>
</div>

<!-- ##### mirenty section #####-->