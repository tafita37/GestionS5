function ajouterQuestion(idForm, idContainer, idBouton, classeQuestion, phpScriptWithExtension) {
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
        questionDiv.appendChild(questionInput);

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

            // Créer une case à cocher pour spécifier si la réponse est correcte ou non
            const isCorrectCheckbox = document.createElement("input");
            isCorrectCheckbox.type = "checkbox";
            isCorrectCheckbox.textContent = "Correcte";

            const lineBreak = document.createElement("br");
            // Ajouter les éléments de réponse au conteneur des réponses
            answersDiv.appendChild(answerInput);
            answersDiv.appendChild(isCorrectCheckbox);
            answersDiv.appendChild(lineBreak);
        });

        // Ajouter le conteneur des réponses et le bouton "Ajouter une réponse" à la question
        questionDiv.appendChild(answersDiv);
        questionDiv.appendChild(addAnswerButton);

        // Ajouter la question au conteneur des questions
        questionsContainer.appendChild(questionDiv);
    });
    //////////////////////////////////////////////////////////////

    // Écoutez l'événement de soumission du formulaire
    form.addEventListener("submit", (e) => {
        e.preventDefault();

        // Créez une structure pour stocker les questions et les réponses
        const qcmData = [];

        // Parcourez les éléments de questions
        const questionElements = questionsContainer.getElementsByClassName(classeQuestion);
        for (const questionElement of questionElements) {
            const questionText = questionElement.querySelector('input[type="text"]').value;
            const answerElements = questionElement.getElementsByClassName("answers");

            // Créez un tableau pour stocker les réponses
            const answers = [];
            for (const answerElement of answerElements) {
                const answerText = answerElement.querySelector('input[type="text"]').value;
                const isCorrect = answerElement.querySelector('input[type="checkbox"]').checked;

                // Ajoutez la réponse à la liste des réponses
                answers.push({
                    text: answerText,
                    correct: isCorrect
                });
            }
            // Ajoutez la question et ses réponses à la structure de données
            qcmData.push({
                question: questionText,
                answers: answers
            });
        }
        var xhr = new XMLHttpRequest();
        xhr.open("POST", phpScriptWithExtension, true);
        xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        xhr.send(JSON.stringify(qcmData));
    });


}