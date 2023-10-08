function ajouterQuestion(idForm, idContainer, idBouton, classeQuestion, questionCounter, dropdownCounter, answerCounter, radioCounter) {
    // Récupérez les éléments du formulaire, du conteneur des questions et du bouton "Ajouter une question"
    const form = document.getElementById(idForm);
    const questionsContainer = document.getElementById(idContainer);
    const addQuestionButton = document.getElementById(idBouton);

    // Écoutez l'événement de clic pour ajouter une question
    addQuestionButton.addEventListener("click", () => {
        // Créer un élément de question
        const questionDiv = document.createElement("div");
        questionDiv.classList.add(classeQuestion); // Ajouter une classe CSS à la question
        // Créer un champ de texte pour la question
        const questionInput = document.createElement("input");
        questionInput.type = "text";
        questionInput.placeholder = "Entrez la question";
        questionInput.name = "question" + questionCounter;
        questionCounter++;
        questionDiv.appendChild(questionInput);

        // Créer un dropdown pour les points de cette question
        const pointsDropdown = document.createElement("select");
        pointsDropdown.name = "nbpoint" + dropdownCounter;
        dropdownCounter++;
        pointsDropdown.classList.add("points-dropdown"); // Ajouter une classe CSS
        pointsDropdown.innerHTML = `
            <option value="1">1 point</option>
            <option value="2">2 points</option>
            <option value="3">3 points</option>
            <option value="4">4 points</option>
            <option value="5">5 points</option>
        `;

        // Ajouter le dropdown des points à la question
        questionDiv.appendChild(pointsDropdown);

        // Créer un conteneur pour les réponses
        const answersDiv = document.createElement("div");
        answersDiv.classList.add("answers"); // Ajouter une classe CSS au conteneur des réponses

        // Créer un bouton pour ajouter une réponse
        const addAnswerButton = document.createElement("button");
        addAnswerButton.textContent = "Ajouter une réponse";
        addAnswerButton.type = "button";
        addAnswerButton.addEventListener("click", () => {
            // Créer un champ de texte pour la réponse
            const answerInput = document.createElement("input");
            answerInput.type = "text";
            answerInput.placeholder = "Entrez une réponse";
            answerInput.name = "reponse" + answerCounter;
            answerCounter++;

            const radioGroup = document.createElement("div");

            // Créer le label pour le bouton radio correct
            const correctLabel = document.createElement("label");
            correctLabel.textContent = "vrai :";
            correctLabel.setAttribute("for", "radio-correct" + radioCounter);
            radioGroup.appendChild(correctLabel);

            // Créer le bouton radio pour une réponse correcte
            const correctRadio = document.createElement("input");
            correctRadio.classList.add("trueradio");
            correctRadio.required = true;
            correctRadio.type = "radio";
            correctRadio.name = "radio" + radioCounter;
            correctRadio.value = "correct";
            radioGroup.appendChild(correctRadio);

            // Créer le label pour le bouton radio incorrect
            const incorrectLabel = document.createElement("label");
            incorrectLabel.textContent = "Faux :";
            incorrectLabel.setAttribute("for", "radio-incorrect" + radioCounter);
            radioGroup.appendChild(incorrectLabel);

            // Créer un groupe de boutons radio pour spécifier si la réponse est correcte ou non
            const incorrectRadio = document.createElement("input");
            incorrectRadio.classList.add("falseradio");
            incorrectRadio.style.cssText = "required";
            incorrectRadio.type = "radio";
            incorrectRadio.name = "radio" + radioCounter;
            incorrectRadio.value = "incorrect";
            radioGroup.appendChild(incorrectRadio);



            radioCounter++;

            const lineBreak = document.createElement("br");

            // Ajouter les éléments de réponse au conteneur des réponses
            answersDiv.appendChild(answerInput);
            answersDiv.appendChild(radioGroup);
            answersDiv.appendChild(lineBreak);
        });

        // Ajouter le conteneur des réponses et le bouton "Ajouter une réponse" à la question
        questionDiv.appendChild(answersDiv);
        questionDiv.appendChild(addAnswerButton);

        // Ajouter la question au conteneur des questions
        questionsContainer.appendChild(questionDiv);

        // Créer un conteneur pour les réponses
        answersDiv.style.maxHeight = "200px"; // Exemple de hauteur maximale
        answersDiv.style.overflowY = "auto"; // Barre de défilement verticale si nécessaire
    });
}
