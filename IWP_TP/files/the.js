function disp(){
    document.getElementsByClassName("tf").disabled = true;
    document.getElementsByClassName("dd").disabled = true;
    document.getElementsByClassName("rd").disabled = true;

    var f = document.getElementById("fName").value;
    var m = document.getElementById("mName").value;
    var l = document.getElementById("lName").value;
    var fullName = f + m + l;

    var outName = document.getElementById("fullName");
    var dp = document.getElementById("dp");
    
    outName.style.fontSize = "32px";
    outName.style.marginBottom = "50px";
    outName.style.height = "100px";
    outName.style.maxHeight = "200px";
    outName.style.width = "auto";
    outName.style.maxWidth = "auto";

    dp.style.marginBottom = "50px";
    dp.style.height = "100px";
    dp.style.maxHeight = "200px";
    dp.style.width = "auto";
    dp.style.maxWidth = "auto";

    console.log("TextField disabled");
    console.log("css loaded");
    console.log(fullName + "Printed");
}