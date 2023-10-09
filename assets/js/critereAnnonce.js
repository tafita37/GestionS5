function noteLinguistique(checkbox) {
    var parent = checkbox.parentNode;
    if(checkbox.checked) {
        var inputElement = document.createElement("input");
        inputElement.type = "number";
        inputElement.id = "scoreLinguistique"+checkbox.value;
        inputElement.name = "scoreLinguistique"+checkbox.value;
        inputElement.placeholder="Note";
        parent.appendChild(inputElement);
    } else {
        var input=document.getElementById("scoreLinguistique"+checkbox.value);
        var parentE=input.parentElement;
        input.remove();
    }
}

function noteCompetenceTechnique(checkbox) {
    var parent = checkbox.parentNode;
    if(checkbox.checked) {
        var inputElement = document.createElement("input");
        inputElement.type = "number";
        inputElement.id = "competenceTechnique"+checkbox.value;
        inputElement.name = "competenceTechnique"+checkbox.value;
        inputElement.placeholder="Note";
        parent.appendChild(inputElement);
    } else {
        var input=document.getElementById("competenceTechnique"+checkbox.value);
        var parentE=input.parentElement;
        input.remove();
    }
}

function noteNationalite(checkbox) {
    var parent = checkbox.parentNode;
    if(checkbox.checked) {
        var inputElement = document.createElement("input");
        inputElement.type = "number";
        inputElement.id = "scoreNationalite"+checkbox.value;
        inputElement.name = "scoreNationalite"+checkbox.value;
        inputElement.placeholder="Note";
        parent.appendChild(inputElement);
    } else {
        var input=document.getElementById("scoreNationalite"+checkbox.value);
        var parentE=input.parentElement;
        input.remove();
    }
}

function noteGenre(checkbox) {
    var parent = checkbox.parentNode;
    if(checkbox.checked) {
        var inputElement = document.createElement("input");
        inputElement.type = "number";
        inputElement.id = "genre"+checkbox.value;
        inputElement.name = "genre"+checkbox.value;
        inputElement.placeholder="Note";
        parent.appendChild(inputElement);
    } else {
        var input=document.getElementById("genre"+checkbox.value);
        var parentE=input.parentElement;
        input.remove();
    }
}