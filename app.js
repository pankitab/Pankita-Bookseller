


// var slideIndex = 0;
// showSlides();
//
// function showSlides() {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("dot");
//   for (i = 0; i < slides.length; i++) {
//     slides[i].style.display = "none";
//   }
//   slideIndex++;
//   if (slideIndex > slides.length) {slideIndex = 1}
//   for (i = 0; i < dots.length; i++) {
//     dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
//   setTimeout(showSlides, 3000); // Change image every 3 seconds
// }


Contact info
$("#country_selector").countrySelect({
        preferredCountries: ['au', 'gb', 'us']
    });

<script language="JavaScript">
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("firstname","req","Please provide your name");
frmvalidator.addValidation("lastname","req","Please provide your name");
frmvalidator.addValidation("email","req","Please provide your email");
frmvalidator.addValidation("email","email",
  "Please enter a valid email address");
</script>
