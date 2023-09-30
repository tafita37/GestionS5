<div>
      <section data-bs-version="5.1" class="features1 structurem5 cid-tmYS81vPFo" id="afeatures1-3">
        <div class="container-fluid">
          <div>
            <center>
              <h1 class="creation">Créer un QCM</h1>
            </center>>
          </div>
          <div class="main-container" style="height: 600px;">
            <br>
            <div class="qcm-container">
              <form id="qcm-form">
                <div id="questions-container">
                  <!-- Les questions seront ajoutées dynamiquement ici -->
                </div>
                <button type="button" id="add-question"> Ajouter une question</button>
                <button type="submit" id="QCMSubmition">Soumettre</button>
              </form>

              <script>
                ajouterQuestion("qcm-form", "questions-container", "add-question", "question");
              </script>
            </div>
          </div>
        </div>
      </section>
    </div>