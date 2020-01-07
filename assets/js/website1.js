// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}


function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var moreText2 = document.getElementById("more2");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more>>"; 
    moreText.style.display = "none";
    moreText2.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less<<"; 
    moreText.style.display = "inline";
    moreText2.style.display = "inline";
  }
}