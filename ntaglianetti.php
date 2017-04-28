<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ntsuggestions";

  // Create connection
  $db = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($db->connect_error) {
      die("Connection failed: " . $db->connect_error);
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Pitt CS 1520 Project">
    <meta name="author" content="Nicholas C. Taglianetti">
    <link rel="icon" href="images/Electric-Guitar.ico">

    <title>Nick Taglianetti</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
    <link href="css/nick_style.css" rel="stylesheet">
  </head>

  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Nick Taglianetti</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#summary">Home</a></li>
                <li><a href="#computerScience">Computer Science</a></li>
                <li><a href="#spanish">Español</a></li>
                <li><a href="#interests">Interests</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#suggestions">Suggestions</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="files/NicholasTaglianetti_resume.pdf" target="_blank">Download Résumé</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">External Links</li>
                    <li><a href="https://www.iesabroad.org/study-abroad/blogs/author/202696" target="_blank">Official IES Madrid Blog</a></li>
                    <li><a href="https://github.com/nick16754" target="_blank">GitHub</a></li>
                    <li><a href="https://www.linkedin.com/in/nicholas-taglianetti" target="_blank">LinkedIn</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>

    <!-- COVERPHOTO (added by Nick, replaces carousel)-->
    <div class="cover-photo">
      <img class="featurette-image img-responsive center-block" src="images/guitar_fratican.jpg" alt="Cover Photo">
    </div>


    <div class="container marketing">


      <div class="row" id="summary">
        <div class="col-lg-4">
          <img class="img-rounded" src="images/pittCS.jpg" alt="Pitt Computer Science" width="200" height="200">
          <h2>Computer Scientist</h2>
          <p>I am a senior Computer Science major at the University of Pittsburgh. I write clean, well-tested code in a variety of different programming languages.</p>
          <p><a class="btn btn-default" href="#computerScience" role="button">Learn More! &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="img-circle" src="images/Spain-Flag.jpg" alt="Spanish Flag" width="200" height="200">
          <h2>Español</h2>
          <p>I am minoring in Spanish at the University of Pittsburgh. Practicing language and learning about different cultures all around the world are my passions.</p>
          <p><a class="btn btn-default" href="#spanish" role="button">¡Ven Conmigo! &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="img-rounded" src="images/cat_records.jpg" alt="I like both cats and records." width="200" height="200">
          <h2>Interests</h2>
          <p>I have a wide variety of interests and hobbies. In addition to my professional skills, I am an avid traveler, musician, audiophile, record collector and much more!</p>
          <p><a class="btn btn-default" href="#interests" role="button">See More! &raquo;</a></p>
        </div>
      </div>


      <hr class="featurette-divider">

      <div class="row featurette" id="computerScience">

        <div class="col-md-7">
          <h2 class="featurette-heading">Computer Science. <span class="text-muted">Software and QA Engineer.</span></h2>
          <p class="lead">
            I study Computer Science at the University of Pittsburgh and will graduate in December 2017. While at Pitt, I've programmed in various languages including Java, C, C++,
            and C# in a wide array of courses. I am currently learning how to code in Python, HTML, CSS, and JavaScript/JQuery. On the database side of things, I'm learning a little bit
            of MySQL and have lots of interest in Redis since I attended RedisConf 2016 in San Francisco last summer. I also have experience with various programming platforms and IDEs
            such as VIM, NetBeans, Microsoft Visual Studio, and Atom. Additionally, I have taken a Software Quality Assurance course at Pitt in which I learned Test Driven Development and various
            QA/testing techniques for different types of applications. I'm currently gaining experience in UI design while learning the Unity game engine through my CS Capstone project
            for the Pitt School of Pharmacy in the creation of a AR/VR training game for the practice of pharmacy sterile compounding.
          </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/sennott.jpg" alt="Sennott Square, home of the Pitt CS Department"><br>
          <img class="featurette-image img-responsive center-block" src="images/ARVR_game.png" alt="Screenshot of AR/VR sterile compounding game">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="spanish">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Español. <span class="text-muted">Global Citizen.</span></h2>
          <p class="lead">
            Tengo cuatro años de experiencia y competencia de español. Participé en un intercambio a Alcobendas, ES (cerca de Madrid) en la escuela secundaria en 2013.
            Luego, estudié en Madrid durante el primer semestre de 2014 en mi segundo año de la universidad. Allí, yo viví con una familia española que no hablaba ni palabra de inglés,
            entonces tenía que aprender cómo comunicar con ellos para sobrevivir en España por cuatro meses. Al mismo tiempo, asistí a clases de informática y español en la bilingüe Universidad Carlos III de Madrid.
            Mi estancia en Madrid era fantástica, entonces decidí a declarar una asignatura secundaria de español en la universidad de Pittsburgh. Espero utilizar mi conocimiento de español en mi carrera porque me
            encanta el idioma y las culturas que lo hablan.
          </p>
          <a href="https://www.iesabroad.org/study-abroad/blogs/author/202696" target="_blank">Visit My Official IES Madrid Blog!</a>
          <img class="featurette-image img-responsive center-block" src="images/blog_page1.jpg" alt="My IES Abroad Blog Page">
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="images/segovia_aqueduct.jpg" alt="Me at the Aqueduct in Segovia"><br>
          <iframe width="460" height="350" src="https://www.youtube.com/embed/aGSRh2SAku8" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="interests">
        <div class="col-md-7">
          <h2 class="featurette-heading">Interests. <span class="text-muted">Well-Rounded.</span></h2>
          <p class="lead">
            I love traveling and in the past four years have visited Germany, Belgium, France, Italy, Austria, Quebec, and of course Spain.
            My next trip is a return to Paris, France this upcoming June, and I cannot be more excited. I'm also a huge fan of music
            and have a vast vinyl record collection of albums spanning genres from Rock to Jazz to Folk to Motown. On that note,
            I am a MASSIVE Bruce Springsteen fan and have seen him live nine times! I also love to play the guitar (and pretend like
            I can play the piano), and I have an expanding collection of musical instruments. My prized possession is my Martin 00-15
            acoustic guitar, "Loretta". I also have an American Fender Telecaster Custom electric guitar, a Juan Alvarez classical guitar
            that I purchased in Madrid, a vintage Kay Venetian mandolin, and my family's brand new Cunningham Baby Grand Piano. I consider
            myself an audiophile with a love for analog equipment and electronics. I like to tinker with my Fender Excelsior tube guitar amp
            and have assembled a tube phono preamplifier in my free time.
          </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="images/guitar_brussels.jpg" alt="Strumming on a guitar in Brussels"><br>
          <img class="featurette-image img-responsive center-block" src="images/record_player.jpg" alt="Our family stereo system"><br>
          <img class="featurette-image img-responsive center-block" src="images/phono_preamp.jpg" alt="Tube phono preamp assembled by me">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="suggestions">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Suggestions. <span class="text-muted">Open-minded.</span></h2>
          <p class="lead">
            What should I do to improve? Send me your suggestions for this site, subjects I should study, musical gear
            you think I would like, records I should own...anything at all!!!
          </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <form name="suggest-form" onsubmit="return validateSuggest()" method="post" id="suggest">
            Name:<br>
            <input type="text" name="name" size="50"><br>
            Suggestion For:<br>
            <input type="checkbox" name="check_list[]" value="This Site">This Site&emsp;
            <input type="checkbox" name="check_list[]" value="Computer Science">Computer Science<br>
            <input type="checkbox" name="check_list[]" value="Spanish">Spanish&emsp;
            <input type="checkbox" name="check_list[]" value="Pitt">Pitt<br>
            <input type="checkbox" name="check_list[]" value="Study Abroad">Study Abroad&emsp;
            <input type="checkbox" name="check_list[]" value="Vinyl">Vinyl<br>
            <input type="checkbox" name="check_list[]" value="Guitar">Guitar&emsp;
            <input type="checkbox" name="check_list[]" value="Audiophile">Audiophile<br>
            <input type="checkbox" name="check_list[]" value="Cats">Cats&emsp;
            <input type="checkbox" name="check_list[]" value="Other">Other<br>
            Suggestion Description:<br>
            <textarea type="text" name="suggestion" rows="4" cols="52"></textarea><br>
            <input type="submit" name="submit-suggestion" value="Suggest It!">
          </form>
          <?php
            if (isset($_POST['submit-suggestion'])) {
              $flag = false;
              $name = $_POST['name'];
              $suggestion = $_POST['suggestion'];

              if(isset($_POST['submit-suggestion'])){
                if(!empty($_POST['check_list'])){
                    foreach($_POST['check_list'] as $selected) {
                      $sql = "INSERT INTO suggestion_table(suggestion_name,suggestion_type,suggestion_description) VALUES ('$name','$selected','$suggestion')";
                      $flag = true;
                    }
                    if($db->query($sql) === false) {
                      echo "ERROR: Could not able to execute $sql. " . $db->error;
                    }
                }
              }
              if($flag) {
                echo "<h3>Thank You For Your Suggestion!</h3>";
              }
            }
          ?>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- CONTACT FORM (added by Nick)-->
      <div class="row featurette" id="contact">
        <div class="col-md-7">
          <h2 class="featurette-heading">Contact Me. <span class="text-muted">Always Available.</span></h2>
          <p class="lead">
            If you'd like to reach me and discuss anything you've seen on this site, send me an email! I'd love to hear from you.
          </p>
        </div>
        <div class="col-md-5">
          <form name="email-message" action="mailto:nct11@pitt.edu" onsubmit="return validateContact()" method="post" enctype="text/plain">
            Name:<br>
            <input type="text" name="name" size="50"><br>
            E-Mail:<br>
            <input type="text" name="mail" size="50"><br>
            Message:<br>
            <textarea type="text" name="message" rows="4" cols="52"></textarea><br>
            <input type="submit" name="submit-email" value="Send">
          </form>
          <?php
            if (isset($_POST['submit-email'])) {
              echo "<h3>Thank You For Your Email!</h3>";
            }
          ?>
        </div>
      </div>

      <hr class="featurette-divider">

      <footer>
        <div class="container text-center">
          <a href="https://github.com/nick16754" target="_blank"><i class="fa fa-github-square fa-4x"></i></a>
          <a href="https://www.linkedin.com/in/nicholas-taglianetti" target="_blank"><i class="fa fa-linkedin-square fa-4x"></i></a>
        </div>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017 Nicholas C. Taglianetti.</p>
      </footer>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./javascript/validate.js"></script>
  </body>
</html>
