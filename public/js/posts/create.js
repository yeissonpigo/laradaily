var counter = 1;

/**
 * Loads the image in a new img tag inside a new div, and removes the button to add image.
 *
 * @param {*} event
 */
function loadFile(event) {
    var input = document.getElementById("fileName");
    var reader = new FileReader();
    reader.readAsDataURL(input.files[0]);
    reader.onload = function () {
        createDiv(1);
        var output = document.getElementById("output"+counter);
        var addButton = document.getElementById("input_image");
        output.src = reader.result;
        addButton.remove();
    };
}

/**
 * Creates div
 */
function createDiv(myCase) {
    var newNode = document.createElement("div");
    var referenceNode = document.getElementById("referenceNodeAdd");

    if (myCase == 1) {
        newNode.appendChild(createImg());

        referenceNode.before(newNode);
    } else if (myCase == 2) {
        newNode.id = "input_image";
        newNode.classList.toggle("image");

        newNode.innerHTML =
            '<input type="file" name="img[]" accept=".jpg,.jpeg,.png,.gif" id="fileName" onchange="loadFile(event)"/>';

        referenceNode.before(newNode);
        counter++;
    } else {
        newNode.innerHTML =
            '<input type="text" placeholder="Su contenido" name="txt[]" id="content" required>';
        referenceNode.before(newNode);
    }
}

/**
 * Creates img tag inside the div identified as referenceNode
 */
function createImg() {
    var newNode = document.createElement("img");

    var referenceNode = document.getElementById("referenceNodeAdd");

    newNode.id = "output" + counter;

    newNode.style.width = "100%";

    return newNode;
}
