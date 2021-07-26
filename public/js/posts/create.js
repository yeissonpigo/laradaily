var counter_text = 1;
var counter_img = 1;

/**
 * Loads the image in a new img tag inside a new div, and removes the button to add image.
 *
 * @param {*} event
 */
function loadFile(event) {
    var input = document.getElementById("fileName" + counter_text + counter_img);
    var reader = new FileReader();
    reader.readAsDataURL(input.files[0]);
    reader.onload = function () {
        createDiv(1);
        var output = document.getElementById("output" + counter_text + counter_img);
        var addButton = document.getElementById('input_image'+counter_text+counter_img);
        output.src = reader.result;
        addButton.style.display = "none";
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
        counter_img++;
        newNode.id = 'input_image'+counter_text+counter_img;
        newNode.classList.toggle("image");

        newNode.innerHTML =
            '<input type="file" name="content[part'+counter_text+'][img]['+counter_img+']" accept=".jpg,.jpeg,.png,.gif" id="fileName' + counter_text + counter_img +'" onchange="loadFile(event)"/>';

        referenceNode.before(newNode);
    } else {
        counter_text++;
        counter_img = 0;
        newNode.innerHTML =
            '<input type="text" placeholder="Su contenido" name="content[part'+counter_text+'][txt]" id="content" required>';
        referenceNode.before(newNode);
    }
}

/**
 * Creates img tag inside the div identified as referenceNode
 */
function createImg() {
    var newNode = document.createElement("img");

    var referenceNode = document.getElementById("referenceNodeAdd");

    newNode.id = "output" + counter_text + counter_img;

    newNode.style.width = "100%";

    return newNode;
}
