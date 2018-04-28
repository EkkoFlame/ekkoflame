<!DOCTYPE html>
<html>
<!-- HEADER Ekkoflame -->

<head>

  <!-- <meta charset="utf-8" /> -->
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <!--Import Google Icon Font-->
  <!--Import Google Icon Font-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Import jQuery before materialize.js -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js">
  </script>
   <!-- Import Jquery Validation plugin -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <!-- <script src="main.js"></script> -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EkkoFlame</title>
  <!-- Import Jquery (without the "slim" bcs it does not allow ajax) -->

  <!-- Import Jquery Validation plugin -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script> -->
  <!-- Google ReCaptcha Verification -->
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<!-- BODY Ekkoflame -->

<body id="home" class="scrollspy">
  <!-- HEADER Ekkoflame -->
  <header class="main-header">
    <div class="primary-overlay">
      <div class="navbar-fixed">
        <nav id="navigation" class="transparent">
          <div class="container">
            <div class="nav-wrapper">
              <a href="#home" class="brand-logo">EKKOFLAME</a>
              <a href="#" data-activates="mobile-nav" class="button-collapse">
                <i class="material-icons">menu</i>
              </a>
              <ul class="right hide-on-med-and-down">
                <!-- <li>
                  <a href="#home">Home</a>
                </li> -->
                <li>
                  <a href="#about">About</a>
                </li>
                <li>
                  <a href="#product">Product</a>
                </li>
                <!-- <li>
                  <a href="#testimonials">Testimonials</a>
                </li> -->
                <li>
                  <a href="#contact">Contact</a>
                </li>
                <li>
                  <a href="#" class="btn orange darken-4">Download Brochure</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!-- Side nav -->
      <ul class="side-nav" id="mobile-nav">
        <h4 class="blue-grey darken-3 center">EkkoFlame</h4>
        <li>
          <a href="" class="divider"></a>
        </li>
        <li>
          <a href=""javascript:window.location.href=window.location.href"">Home</a>
        </li>
        <li>
          <a href="#about">About</a>
        </li>
        <li>
          <a href="#product">Product</a>
        </li>
        <li>
          <a href="#testimonials">Testimonials</a>
        </li>
        <li>
          <a href="#contact">Contact</a>
        </li>
        <li>
          <a href="#" class="btn orange darken-4">Download Brochure</a>
        </li>
      </ul>
      <!-- Showcase -->
      <div class="showcase container">
        <div class="row">
          <div class="col s12 main-text">
            <h5>You found the...</h5>
            <h1>Perfect Spark</h1>
            <p class="flow-text">Enjoy the natural spark and feel of the finest kindle wood and return to the nature twice as much!</p>
            <br>
            <a href="#about" class="btn btn-large orange darken-4 white-text">Learn More</a>
            <a href="#contact" class="white-text">
              <!-- special class scroll-icon bcs need it for positioning in CSS main -->
              <i class="material-icons medium scroll-icon">arrow_drop_down_circle</i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- <div style="height:1100px"></div> FOR TESTING -->

  <!-- Section: Carousel -->
  <section class="carousel">
  <div class="carousel carousel-slider center" data-indicators="true">
      <a class="carousel-item" href="#one!">
        <img src="img/weforest_logo.png">
      </a>
      <a class="carousel-item" href="#two!">
        <img src="img/ef_forest_sun-78kb.jpg">
      </a>
      <a class="carousel-item" href="#three!">
        <img src="img/img3.jpg">
      </a>
      <a class="carousel-item" href="#four!">
        <img src="img/img4.jpg">
      </a>
    </div>
  </section>
  <!-- Section: Parallax1 -->


  <!-- Section: Product -->
  <section  class="section-product center scrollspy">
    <div class="container" >
      <div class="row">

        <div class="col s12 m6 l6">
          <div class="card orange darken-4">
            <div class="card-content white-text">
              <ul class="product-list">
                <li>
                  <span class="name">Packaging made from 100% recycled paper</span>
                  <span>
                  <i class="fa fa-recycle"></i></span>
                </li>
                <li>
                  <span class="name">Sustainable, patent-pending packaging process</span>
                  <span><i class="fa fa-trophy"></i></span>
                </li>
                <li>
                <span class="name">More than 80% of kindling wood made out of alredy dried out and dead trees</span>
                <span><i class="fa fa-check-square"></i></i></span>
              </li>
                <li>
                  <span class="name">For each tree we use, we give back 2 trees to the environment</span>
                  <span><i class="fa fa-tree"></i></span>
                </li>

              </ul>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- Section: Boxes -->
  <!-- <section class="section-boxes center">
    <div class="row">
      <div class="col s12 m6 l3 blue white-text box">
        <i class="material-icons medium">show_chart</i>
        <h4>Grow Your Business</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere accusantium optio quo expedita mollitia a ex reiciendis?
          Accusamus, quas iste?</p>
      </div>
      <div class="col s12 m6 l3 purple white-text box">
        <i class="material-icons medium">people</i>
        <h4>Professional Advisors</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere accusantium optio quo expedita mollitia a ex reiciendis?
          Accusamus, quas iste?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere accusantium optio quo expedita mollitia a ex reiciendis?
          Accusamus, quas iste?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere accusantium optio quo expedita mollitia a ex reiciendis?
          Accusamus, quas iste?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere accusantium optio quo expedita mollitia a ex reiciendis?
          Accusamus, quas iste?</p>
      </div>
      <div class="col s12 m6 l3 white-text box" id="box3">
        <i class="material-icons medium">verified_user</i>
        <h4>Secure Your Company</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere accusantium optio quo expedita mollitia a ex reiciendis?
          Accusamus, quas iste?</p>
      </div>
      <div class="col s12 m6 l3 orange darken-3 white-text box">
        <i class="material-icons medium">account_balance</i>
        <h4>Multiply Your Income</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere accusantium optio quo expedita mollitia a ex reiciendis?
          Accusamus, quas iste?</p>
      </div>
    </div>
  </section> -->

  <!-- Section: About -->
  <section id="about" class="section section-about center scrollspy">
    <div class="about-background">
      <div class="about-overlay">
        <div class="container">
          <h2 class="white-text">Our Mission</h2>
          <h3 class="flow-text white-text">
            <strong>We belive giving back to the nature is important. Because of this we aspire to bring you the traditional beauty
              and feel that only natural wood can do, while staying sustanable!</strong>
          </h3>
          <div class="row">
            <div class="col s12 m6 ">
              <div class="card">
                <div class="card-content card-weforest green darken-2 white-text z-depth-5">
                  <h5>Together with
                    <strong>WeForest</strong>, we help plant 2 trees for 1 tree we use in our product</h5>
                  <a class="weforest" href="https://www.weforest.org/" target="_blank">
                    <img src="img/weforest_logo.png" alt="" class="responsive-img circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="col s12 m6">
              <br>
              <br>
              <ul class="collection with-header z-depth-5">
                <li class="collection-header green lighten-5">
                  <h5>Sustainable Product</h5>
                </li>
                <li class="collection-item green lighten-4">
                  <i class="material-icons left icons">check</i>
                  <strong>100% recycled packaging</strong>
                </li>
                <li class="collection-item green lighten-5">
                  <i class="material-icons left">check</i>
                  <strong>> 80% from dried-out trees</strong>
                </li>

                <li class="collection-item green lighten-4">
                  <i class="material-icons left">check</i>
                  <strong>Renewable resource</strong>
                </li>
                <li class="collection-item green lighten-5">
                  <i class="material-icons left">check</i>
                  <strong>Energy-effiecinet resource</strong>
                </li>
                <li class="collection-item green lighten-4">
                  <i class="material-icons left">check</i>
                  <strong>1 tree used, 2 trees planted</strong>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- END CONTAINER -->
      </div>
    </div>
  </section>

  <!-- Section: Testimonials -->
  <!-- <section id="testimonials" class="section section-testimonials blue white-text center scrollspy">
    <div class="container">
      <h2>What Our Clients Say</h2>
      <div class="row">
        <div class="col s12 m4">
          <div class="card grey lighten-4 black-text z-depth-4">
            <div class="card-content">
              <p>
                <em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam pariatur dicta excepturi aliquid aliquam
                  optio nostrum quibusdam eos eum esse.</em>
              </p>
            </div>
            <div class="card-action">
              <p>John Doe From ABC, INC</p>
            </div>
          </div>

        </div>
        <div class="col s12 m4">
          <div class="card grey lighten-4 black-text z-depth-4">
            <div class="card-content">
              <p>
                <em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam pariatur dicta excepturi aliquid aliquam
                  optio nostrum quibusdam eos eum esse.</em>
              </p>
            </div>
            <div class="card-action">
              <p>John Doe From ABC, INC</p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card grey lighten-4 black-text z-depth-4">
            <div class="card-content">
              <p>
                <em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam pariatur dicta excepturi aliquid aliquam
                  optio nostrum quibusdam eos eum esse.</em>
              </p>
            </div>
            <div class="card-action">
              <p>John Doe From ABC, INC</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Section: Contact -->
  <!-- php global var calls PHP itself, when page called  -->
  <section id="contact" class="section section-contact center scrollspy">
  <div id="overlay"></div> <!-- Overlay for when  -->

    <div id="googlemap"></div>
    <!-- here place Google Maps-->
    <div class="container">
      <div class="row">
        <div class="col s10 offset-s2 m6 offset-m6">
          <div class="card-panel z-depth-5">
            <h4>Contact Us</h4>
            <!-- FORM STARTS class="form"-->
            <form class="form" id="contact-form" method="post" action="./php/sendmail4.php">
              <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <input  name="name" type="text" id="name" placeholder="Name" class="validate" required aria-required="true">
                <label for="name">Name</label>
                <label for="name" data-error="wrong" data-successful="right">Name</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input name="email" type="email" id="email" name="email" placeholder="Email" class="validate" required aria-required="true">
                <label class="active"for="email">Email</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">phone</i>
                <input type="tel" name="phone" id="phone" placeholder="Phone Number">
                <label for="phone">Phone</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">message</i>
                <textarea class="validate materialize-textarea" id="message" name="message" placeholder="Message" required aria-required="true"></textarea>
                <label for="message">Message</label>
              </div>
              <div class="input-field">
                <!-- <div id="msg"></div> -->
                <button class="btn waves-effect wave-light" data-position="top" type="submit" id="submit-btn">SEND MESSAGE</button>
                <!-- </div> -->
                <!-- <input type="submit" value="Submit" class="btn blue" id="contact-submit"> -->
                <!-- </div> -->
              </div>
              <br/>
              <div id="g-recaptcha">
              <div class="g-recaptcha" data-theme="light"  data-sitekey="6Lc_W1UUAAAAAODRRL5W9NMYlYB3zNjYKjo9_snr" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;display:table;margin:0 auto;"></div>
              </div>
              <!-- END FORM -->
            </form>
          </div>
        </div>
  </section>

  <!-- Footer -->
  <footer class="page-footer dark-header">
    <div class="container">
      <div class="row">
        <div class="col l6 s12 m6">
          <h5 class="white-text">Location</h5>
          <p class="grey-text text-lighten-4">Bosnia and Herzegovina, Banja Luka</p>
          <h5 class="white-text">Contact</h5>
          <p class="grey-text text-lighten-4">Email: ekkoflame.com@gmail.com</p>
        </div>
        <hr class="show-on-small-only" style="border: solid">
        <div class="col l4 offset-l2 s12 m5 offset-m1">
          <h5 class="white-text">Links</h5>
          <ul class="footer-links">
            <li>
              <a class="white-text" href="#home">Home</a>
            </li>
            <li>
              <a class="white-text" href="#about">About</a>
            </li>
            <li>
              <a class="white-text" href="#testimonials">Testimonials</a>
            </li>
            <li>
              <a class="white-text" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright orange darken-4">
      <div class="container">
        EkkoFLame © 2018
        <a class="grey-text text-lighten-4 right" href="#home">
          <i class="material-icons left">keyboard_arrow_up</i>Back To Top
        </a>
      </div>
    </div>
  </footer>

    <!-- <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script> -->
  <!-- Import materialize js -->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!-- Google Maps API -->
  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBrkMi5Cdu14S-PUt7eMdNIHM83AWUD5Uo"></script>

  <script>

    // global $
    $(document).ready(function () {

      // Carousel slider
      $('.carousel-slider').carousel({ fullWidth: false });

      $('.carousel').carousel({
        // padding: 200
      });
      function autoplay() {
         $('.carousel').carousel('next');
          setTimeout(autoplay, 3500);
          }
          autoplay();


      // Extension pour comptabilité avec materialize.css
      $.validator.setDefaults({
        errorClass: 'invalid',
        validClass: "valid",
        errorPlacement: function(error, element) {
          $(element)
            .closest("form")
            .find("label[for='" + element.attr("id") + "']")
            .attr('data-error', error.text());
        },
        submitHandler: function(form) {
          console.log('form ok');

          var form = $("#contact-form").serialize();
          var url = $("#contact-form").attr("action");
          $.ajax({
            type:"post",
            url: url,
            data: form,

            success: function(response){
              alert("email sent");

              // swal({
              //   position: 'center',
              //   type: 'success',
              //   title: 'Email Sent',
              //   showConfirmButton: false,
              //   timer: 1000
              // });

              $("#contact-form").trigger("reset");

              $("#overlay").hide();
            }
          }); // end ajax
        }
      });

      $("#contact-form").validate({
        rules: {
          name: {
            required: true,
            minlength: 3
          },
          dateField: {
            date: true
          }
        }
      });

      // END FORM VALIDATION
      // AJAX request for FORM submit button
      //  $("#submit-btn").click(function (event) {
      //   // $("#submit-btn").disabled = true; // so no multiple submissions
      //   event.preventDefault();
      //   $.ajax({
      //     // dataType: "JSON",
      //     url: $("#contact-form").attr("action"),
      //     type: "post",
      //     data: $("#contact-form").serialize(),
      //     // beforeSend: function (xhr) {
      //     //   $("#submit-btn").html("SENDING...");
      //     // },
      //     success: function(response){
      //       // display response in msg section
      //       alert("email sent");
      //       $("#contact-form").trigger("reset");
      //       $("#overlay").hide();
      //     }
      //   }); // END AJAX
      // }); // END SUBMIT BUTTON
      // Init Sidenav
      $(".button-collapse").sideNav();
      // Init Scrollspy
      $(".scrollspy").scrollSpy();
      // ScrollFire
      // const options = [
      //   {
      //     selector: ".main-text", offset: 1000, callback: function (el) {
      //       // Materialize.fadeInImage($(el))
      //       // Materialize.toast("Hello", 1000);
      //       $("nav").removeClass("transparent").addClass("blue-grey darken-3");
      //     }
      //   }
      // ];
      // Materialize.scrollFire(options);
      // Custom Fade in/Fade out Header
      // GoogleMaps initialization



      // Custom jQuery header color change
      $(window).on('scroll', function () {
        if ($(this).scrollTop() > 100) {
          $("#navigation").stop(true).removeClass("transparent").addClass("dark-header");
        } else {
          $("#navigation").stop(true).addClass("transparent");
        }
      });

      const position = [44.779431, 17.198926];
      const centerPosition = [44.779431, 17.261926];

      function showGoogleMaps() {
        // Map positions
        const latLng = new google.maps.LatLng(position[0], position[1]);
        const centerLatLng = new google.maps.LatLng(centerPosition[0], centerPosition[1]);
        // object with options
        const mapOptions = {
          zoom: 12,
          streetViewControl: false,
          scaleControl: true,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          center: centerLatLng
        }

        // create the map
        map = new google.maps.Map(document.getElementById('googlemap'), mapOptions);
        // Show Marker
        marker = new google.maps.Marker({
          position: latLng,
          map: map,
          draggable: false,
          animation: google.maps.Animation.DROP
        });
      }
      // Maps event listener
      google.maps.event.addDomListener(window, 'load', showGoogleMaps);


    });
  </script>
</body>

</html>
