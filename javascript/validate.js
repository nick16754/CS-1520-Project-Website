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
    var email = document.forms["suggest-form"]["mail"].value;
    var suggestion = document.forms["suggest-form"]["suggestion"].value;

    if (name == "") {
      alert("Name field in 'Suggestions' cannot be blank.");
      return false;
    }

    if (email == "") {
      alert("E-Mail field in 'Suggestions' cannot be blank.");
      return false;
    }

    if (suggestion == "") {
      alert("Suggestion field in 'Suggestions' cannot be blank.");
      return false;
    }
}
