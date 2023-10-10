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
                  <form action="Client_Controllers/inserResultatQCM" class="row g-3" novalidate method="post">
                    <?php
                    $i = 0;
                    foreach ($question_reponses as $qr) {
                      ?>
                      <!-- check box qcm -->
                      <div class="row mb-3">
                        <h3>
                          <legend>Question
                            <?php echo $i ?>
                          </legend>
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
                                  name="check<?php echo $u ?>">
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