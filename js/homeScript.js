function loadData(name) {
  if (name == "btn1") {
    document.getElementById("home-js-txt1").innerHTML =
      "<h2>Find Your Dream land</h2>";
    document.getElementById("Homepage_Mainimg").src = "images/landhead.JPEG";
  } else if (name == "btn2") {
    document.getElementById("home-js-txt1").innerHTML =
      "<h2>Unlock the Doors of Your Dream House</h2>";
    document.getElementById("Homepage_Mainimg").src = "images/househead1.JPG";
  } else if (name == "btn3") {
    document.getElementById("home-js-txt1").innerHTML =
      "<h2>Reach the sky with luxury Apartments</h2>";
    document.getElementById("Homepage_Mainimg").src =
      "images/apartmenthead.JPG";
  } else if (name == "btn4") {
    document.getElementById("home-js-txt1").innerHTML =
      "<h2>Sell Fast And Find the best price for your Property</h2>";
    document.getElementById("Homepage_Mainimg").src = "images/sellinghead.JPEG";
  } else {
    alert("Invalid!!!");
  }
}
