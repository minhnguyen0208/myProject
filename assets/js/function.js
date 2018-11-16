function setSprinklerLv1() {
    document.getElementById("imgSprinkler").src = "assets/img/sprinkler1.jpg";

}

function setSprinklerLv2() {
    document.getElementById("imgSprinkler").src = "assets/img/sprinkler2.jpg";

}

function setSprinklerLv3() {
    document.getElementById("imgSprinkler").src = "assets/img/sprinkler3.jpg";
    
}

function showBtnGroupLevel() {
    document.getElementById("btnGroupLevel").style.display="inline";
}

function switcherOn() {
    // Get the checkbox
    var sprinklerSwitch = document.getElementById("switcher");
    // Get the output text
    var sprinklerStateText = document.getElementById("sprinklerState");
  
    var sprinkerImg = document.getElementById("imgSprinkler");

    // If the checkbox is checked, display the output text
    if (sprinklerSwitch.checked == true){
        document.getElementById("btnGroupLevel").style.display="inline";
        sprinklerStateText.innerHTML="BẬT";
        sprinkerImg.src="assets/img/sprinkler1.jpg";
    } else {
        document.getElementById("btnGroupLevel").style.display="none";
        sprinklerStateText.innerHTML="TẮT";
        sprinkerImg.src="assets/img/sprinkler0.jpg";
    }
  } 
