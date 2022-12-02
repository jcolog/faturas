  //-------------------------------------------------------------------

  function openPage2(pageName2, elmnt2, color2) {
    // Hide all elements with class="tabcontent" by default */
    var i2, tabcontent2, tablinks2;
    tabcontent2 = document.getElementsByClassName("tabcontent2");
    for (i2 = 0; i2 < tabcontent2.length; i2++) {
      tabcontent2[i2].style.display = "none";
    }
  
    // Remove the background color of all tablinks/buttons
    tablinks2 = document.getElementsByClassName("tablink2");
    for (i2 = 0; i2 < tablinks2.length; i2++) {
      tablinks2[i2].style.backgroundColor = "";
    }
  
    // Show the specific tab content
    document.getElementById(pageName2).style.display = "block";
  
    // Add the specific color to the button used to open the tab content
    elmnt2.style.backgroundColor = color2;
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen2").click();