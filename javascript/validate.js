/*Author: Nick Taglianetti*/
function validateContact() {
    var name = document.forms["email-message"]["name"].value;
    var email = document.forms["email-message"]["mail"].value;
    var message = document.forms["email-message"]["message"].value;

    if (name == "") {
      alert("Name field in 'Contact Me' cannot be blank.");
      return false;
    }

    if (email == "") {
      alert("E-Mail field in 'Contact Me' cannot be blank.");
      return false;
    }

    if (message == "") {
      alert("Message field in 'Contact Me' cannot be blank.");
      return false;
    }
}

function validateSuggest() {
    var name = document.forms["suggest-form"]["name"].value;
    var suggestion = document.forms["suggest-form"]["suggestion"].value;
    var form = document.getElementById("suggest");
    if (name == "") {
      alert("Name field in 'Suggestions' cannot be blank.");
      return false;
    }

    if(!this.form.check_list.checked) {
         alert("A checkbox in 'Suggestions' must be checked.");
         return false;
    }

    if (suggestion == "") {
      alert("Suggestion Description field in 'Suggestions' cannot be blank.");
      return false;
    }
}

$(".nav a").on("click", function(){
  console.log("inside on-click");
   $(".nav").find(".active").removeClass("active");
   $(this).parent().addClass("active");
});
