<div>
    <section data-bs-version="5.1" class="features1 structurem5 cid-tmYS81vPFo" id="afeatures1-3">
        <div class="container-fluid card_qcm">
            <div>
                <center>
                    <h1 class="creation">Créer un QCM</h1>
                </center>
            </div>
            <div class="main-container" style="height: 600px;">
                <br>
                <button type="button" id="add-question"> Ajouter une question</button>
                <div class="qcm-container card_qcm">
                    <form id="qcm-form" method="POST" action="<?php echo site_url("RH_Controllers/insertQuestionnaire")?>">
                        <center>
                            <div id="qcmTitle">
                                <?php 
                                $services=$this->DaoM->getAll("services");
                                ?>
                                <select name="departement">
                                    <?php 
                                    for($i=0;$i<count($services);$i++){
                                    ?>
                                    <option value="<?php echo $services[$i]['id_service'] ;?>"><?php echo $services[$i]['nom_service'];?></option>
                                    <?php } ?>                               
                                </select>
                                <input type="text" name="qcmTitle" placeholder="entrer le titre de la fiche" required>
                                <br>
                            </div>
                        </center>
                        <div id="questions-container">
                            <!-- Les questions seront ajoutées dynamiquement ici -->
                        </div>
                        <input type="submit" value="  soumetre" id="QCMSubmition">
                    </form>
                    <script type="text/javascript">
                        let questionCounter = 1;
                        let dropdownCounter = 1;
                        let answerCounter = 1;
                        let checkboxCounter = 1;
                        ajouterQuestion("qcm-form", "questions-container", "add-question", "question",questionCounter,dropdownCounter,answerCounter,checkboxCounter);

                    
                    </script>
                    <?php
                    if (isset($qcm)) {
                        echo '<pre>';
                        print_r($qcm);
                        echo '</pre>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>