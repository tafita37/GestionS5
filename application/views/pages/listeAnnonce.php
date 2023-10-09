    <div class="templateux-cover" style="background-image: url('<?php echo base_url("assets/images/hero_1.jpg"); ?>');">
      <div class="container">
        <div class="row align-items-lg-center">

          <div class="col-lg-6 order-lg-1 text-center mx-auto">
            <h1 class="heading mb-3 text-white" data-aos="fade-up">Company's Blog</h1>
            <p class="lead mb-5 text-white" data-aos="fade-up"  data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <!-- <a href="<?php echo site_url("Responsable_Controller/formAnnonce") ?>" class=" btn-primary py-3 px-4 mr-3">Rajouter une annonce</a> -->
            <a href="<?php echo site_url("Responsable_Controller/formAnnonce") ?>" class="btn btn-primary btn-lg active" title="Lien 1">Rajouter une annonce</a>
          </div>
          
        </div>
      </div>
    </div> <!-- .templateux-cover -->

    <div class="templateux-section">
      <form action="<?php echo site_url("Autre_Controller/listeAnnonce"); ?>" method="post">
        <select name="id_service" id="">
          <option value="">
            Choisissez un service
          </option>
          <?php
            for($i=0; $i<count($allService); $i++) {
              ?>
              <option value="<?php echo $allService[$i]["id_service"]; ?>"><?php echo $allService[$i]["nom_service"]; ?></option>
            <?php }
          ?>
        </select>
        <input type="submit" value="Rechercher">
      </form>
      <div class="container">
        <div class="row">
          <?php
            for($i=0; $i<count($allAnnonce); $i++) {
              ?>
              <div class="col-md-6 col-lg-4 mb-4">
                <a href="<?php echo site_url("Autre_Controller/detailAnnonce/".$allAnnonce[$i]["id_annonce"]); ?>" class="block-thumbnail-1 one-whole show-text height-sm" style="background-image: url('<?php echo base_url("assets/images/slider-2.jpg"); ?>'); " data-aos="fade" data-aos-delay="300">
                  <div class="block-thumbnail-content">
                    <h2><?php echo $allAnnonce[$i]["titre_annonce"]; ?></h2>
                    <span class="post-meta">Sortie : <?php echo $allAnnonce[$i]["date_annonce"]; ?></span> <br>
                    <span class="post-meta">Deadline : <?php echo $allAnnonce[$i]["date_depot_final"]; ?></span>
                  </div>
                </a>
              </div>
            <?php }
          ?>
        </div> <!-- .row -->

        <div class="row mt-5">
          <div class="col-md-12 pt-5">
            <ul class="pagination custom-pagination">
              <li class="page-item prev"><a class="page-link" href="#"><i class="icon-keyboard_arrow_left"></i></a></li>
              <li class="page-item active"><a class="page-linkx href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item next"><a class="page-link" href="#"><i class="icon-keyboard_arrow_right"></i></a></li>
            </ul>


          </div>
        </div>

      </div>
    </div> <!-- .templateux-section -->

