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

    var site_box = document.getElementById("This Site");
    var cs_box = document.getElementById("Computer Science");
    var spanish_box = document.getElementById("Spanish");
    var pitt_box = document.getElementById("Pitt");
    var study_box = document.getElementById("Study Abroad");
    var vinyl_box = document.getElementById("Vinyl");
    var guitar_box = document.getElementById("Guitar");
    var audiophile_box = document.getElementById("Audiophile");
    var cats_box = document.getElementById("Cats");
    var other_box = document.getElementById("Other");

    var suggestion = document.forms["suggest-form"]["suggestion"].value;

    if (name == "") {
      alert("Name field in 'Suggestions' cannot be blank.");
      return false;
    }

    if (!site_box.checked ||
        !cs_box.checked ||
        !spanish_box.checked ||
        !pitt_box.checked ||
        !study_box.checked ||
        !vinyl_box.checked ||
        !guitar_box.checked ||
        !audiophile_box.checked ||
        !cats_box.checked ||
        !other_box.checked) {
      alert("A Suggestion For checkbox in 'Suggestions' must be checked.");
      return false;
    }

    if (suggestion == "") {
      alert("Suggestion Description field in 'Suggestions' cannot be blank.");
      return false;
    }
}
