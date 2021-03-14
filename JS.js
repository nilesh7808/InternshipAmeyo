// random color change using the function in JS

var x = document.querySelector("h2")
x.style.color = "Black"

function getRandomColor() {
    var letters = "0123456789ABCDEF";
    var color = "#";
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color

}

function changeHEadColor() {
    colorInput = getRandomColor()
    x.style.color = colorInput;

}
setInterval("changeHEadColor()", 300);

// JS on previous date of contact
// var prevDate = document.getElementById("cntd").hidden = true;

// var count = 0;

// function prevDate() {


// }

var Selection = ["Meeting", "Query", "About Company", "Product"];
var n = Selection.length;


function ac(value) {
    document.getElementById('datalist').innerHTML = '';
    l = value.length;
    for (var j = 0; j < n; j++) {
        if (((Selection[j].toLowerCase()).indexOf(value.toLowerCase())) > -1) {
            var node = document.createElement("option");
            var val = document.createTextNode(Selection[j]);
            node.appendChild(val);
            document.getElementById("datalist").appendChild(node);

        }
    }

}