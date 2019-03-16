
// THIS IS MY COUNTER  which KNOWS HOW MANY ELEMENTS I HAVE

  var content = document.querySelectorAll("#listicle_slide");
  var number_of_listicle_slides = content.length;
  var i;

//Loop to get all "list_total" classes
  for (i=0; i < 1 ; i++){ document.getElementsByClassName("list_total")[i].innerHTML = number_of_listicle_slides;}

// setting a default value to the first listicle_slide
  var listicle_slideIndex = 1;
  showDivs(listicle_slideIndex);


  function plusDivs(n) {
    for (i=0; i < number_of_listicle_slides ; i++){
     content[i].className = "move_right";
    }
    showDivs(listicle_slideIndex += n);
  }


  function minusDivs(n){
    for (i=0; i < number_of_listicle_slides ; i++){
     content[i].className = "move_left";
    }
    showDivs(listicle_slideIndex += n);
  }

  function currentDiv(n){
    showDivs(listicle_slideIndex = n);
  }

// function responsible for showing the selected div
  function showDivs(n) {
    var current_slide_number = document.querySelectorAll("#listicle_slide");

// the following IFS were created to prevent all buttons showing at the same time
    if (n >= current_slide_number.length) {
      document.getElementById("nextArrow").style.display = "none";
      document.getElementById("next").style.display = "none";
      document.getElementById("nextPost").style.display = "inline";
      document.getElementById("nextPostArrow").style.display = "inline";
    }

    else if (n <= 1) {
      document.getElementById("prevArrow").style.display = "none";
      document.getElementById("prev").style.display = "none";
      document.getElementById("prevPost").style.display = "inline";
      document.getElementById("prevPostArrow").style.display = "inline";
    }

   else {
     document.getElementById("nextArrow").style.display = "inline";
     document.getElementById("prevArrow").style.display = "inline";
     document.getElementById("next").style.display = "inline";
     document.getElementById("prev").style.display = "inline";
     document.getElementById("nextPost").style.display = "none";
     document.getElementById("prevPost").style.display = "none";
     document.getElementById("nextPostArrow").style.display = "none";
     document.getElementById("prevPostArrow").style.display = "none";
   }

//Loop responsible for hidding non selected divs
    for (i = 0; i < current_slide_number.length; i++) {
      current_slide_number[i].style.display = "none";
    }

//loop which gets all list_number class elements
    for (i=0; i < 1 ; i++){ document.getElementsByClassName("list_number")[i].innerHTML = listicle_slideIndex;}

//it Shows the selected listicle_slide
    current_slide_number[listicle_slideIndex-1].style.display = "block";
  }
