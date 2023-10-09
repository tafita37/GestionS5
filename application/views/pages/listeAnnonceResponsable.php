<div class="templateux-cover" style="background-image: url('<?php echo base_url("assets/images/hero_1.jpg"); ?>');">
    <div class="container">
    <div class="row align-items-lg-center">

        <div class="col-lg-6 order-lg-1 text-center mx-auto">
        <h1 class="heading mb-3 text-white" data-aos="fade-up">Company's Blog</h1>
        <p class="lead mb-5 text-white" data-aos="fade-up"  data-aos-delay="100">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        <p data-aos="fade-up" data-aos-delay="200"><a href="<?php echo site_url("RH_Controller") ?>" class=" btn-primary py-3 px-4 mr-3">Rajouter une annonce</a></p>
        </div>
        
    </div>
    </div>
</div>
<h2>
    Liste des annonces non configures
</h2>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Date de sortie</th>
      <th scope="col">Duree du contrat</th>
      <th scope="col">Volume horaire par jour</th>
      <th scope="col">Date de depot final</th>
    </tr>
  </thead>
  <tbody>
    <?php
        for($i=0; $i<count($allAnnonce); $i++) {
            ?>
            <tr>
                <th scope="row">
                    <?php
                        echo $allAnnonce[$i]["titre_annonce"];
                    ?>
                </th>
                <td>
                    <?php
                        echo $allAnnonce[$i]["date_annonce"];
                    ?>
                </td>
                <td>
                    <?php
                        echo $allAnnonce[$i]["duree_contrat"];
                    ?>
                </td>
                <td>
                    <?php
                        echo $allAnnonce[$i]["v_horaire_jour"];
                    ?>
                </td>
                <td>
                    <?php
                        echo $allAnnonce[$i]["date_depot_final"];
                    ?>
                </td>
                <td>
                    <a href="<?php echo site_url("RH_Controller/critereAnnonce/".$allAnnonce[$i]["id_annonce"]); ?>">
                        Configurer l'annonce
                    </a>
                </td>
            </tr>
        <?php }
    ?>
  </tbody>
  
</table>
  <a href="<?php echo site_url("RH_Controller/formAnnonce") ?>" class=" btn-primary py-3 px-4 mr-3 m-auto">Rajouter une annonce</a>