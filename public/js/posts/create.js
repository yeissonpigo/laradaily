function loadFile(event) {
    var input = document.getElementById("fileName");
    var reader = new FileReader();
    reader.readAsDataURL(input.files[0]);
    reader.onload = function () {
        createDivImg();
        var output = document.getElementById("output");
        output.src = reader.result;
    };
}

function createDivImg(){
    var newNode = document.createElement('div');

    var referenceNode = document.getElementById('referenceNode');

    newNode.id = 'referenceNode';

    referenceNode.id = "";

    referenceNode.after(newNode);

    createImg();
}

function createImg() {
    var newNode = document.createElement('img');

    var referenceNode = document.getElementById('referenceNode');

    newNode.id = 'output';

    newNode.style.width = '100%';

    referenceNode.appendChild(newNode);
}