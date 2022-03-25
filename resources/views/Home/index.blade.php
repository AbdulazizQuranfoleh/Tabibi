<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tabibi</title>
    <link
      rel="stylesheet"
      href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css') }}"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <script src="{{ asset('https://kit.fontawesome.com/695389b5b3.js') }}" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('dist/scss/style.css') }}" />
  </head>
  <body>
        
      @include('layout.homenav')

      <header>
            <div class="infoHeader">
                  <h3>Choose the best octor from our website </h1>
                  <a href="/doctors" >Find your doctor!</a>
            </div>
            <div class="backgroundHeader">
                  <img src="{{ asset('dist/img/home/mainbg.png') }}" alt="">
            </div>
      </header>
      <section class="howWork pb-5">
            <h3>4 easy steps to get your Doctor!</h3>
            <div class="containerHowWork">
                  <div class="steps step1">
                        <div class="infoStep">
                              <i class="fa-solid fa-magnifying-glass-location"></i>
                        </div>
                        <div class="bodyStep">
                              <P>Search doctor</P>
                              <p class="bsDes">Search for your problem or majer or name for Doctor</p>
                        </div>
                  </div>
                  <div class="steps step2">
                        <div class="infoStep">
                              <i class="fa-solid fa-id-card-clip"></i>
                        </div>
                        <div class="bodyStep">
                              <p>Check doctor Profile</p>
                              <p class="bsDes">can know about the doctor befor booking </p>
      
                        </div>
                  </div>
                  <div class="steps step3">
                        <div class="infoStep">
                              <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="bodyStep">
                              <p>
                              Schedule Appointment
                              </p>
                              <p class="bsDes">You can book a private appointment with the doctor</p>
      
                        </div>
                  </div>
                  <div class="steps step4">
                        <div class="infoStep">
                              <i class="fa-solid fa-lightbulb"></i>
                        </div>
                        <div class="bodyStep">
                              <p>
                                    Done!
                              </p>
                              <p class="bsDes">will be contacted to confirm the appointment</p>
      
                        </div>
                  </div>
            </div>
            <a href="/doctors">Search now!</a>
      </section>

      <section class="findr">
            <div class="infoFindDr">
                  <h1>Are you a provider interested in reaching new patients?</h1>
                  <p class="FindDrDesc">
                  Reach patients in your area looking for a new provider
Fill last-minute openings in your schedule
Strengthen your online reputation with verified reviews
                  </p>
                  <p class="findDrArrow"><span><i class="fa-solid fa-circle-check"></i></span> Tabibi is health core, but easy</p>
                  <p class="findDrArrow"><span><i class="fa-solid fa-circle-check"></i></span> Top-searched specialties</p>
                  
            </div>
            <div class="imgFindDr">
                  <img src="{{ asset('dist/img/home/findDr.png') }}" alt="">
            </div>
      </section>

      <section class="contact" id="contact">
            <h2 class="text-left ml-5">Contact us</h2>
            <div class="containerContact">
                  <div class="contactImg">
                        <img src="{{ asset('dist/img/home/contactImg.svg') }}" alt="">
                  </div>
                  <form action="" method="post">
                        <div class="nameAndEmail">
                              <input type="text" name="name" class="inputForm border" placeholder="Your name here...">
                              <input type="email" name="email" class="inputForm border" placeholder="Your email here...">
                        </div>
                        <div class="msg">
                              <textarea name="msg" class="inputForm border"  placeholder="Enter your message here..."></textarea>
                        </div>
                        <button type="submit">Send message <i class="fa-solid fa-paper-plane"></i></button>
                  </form>
            </div>
      </section>


      @include('layout.homefooter')


    <script
      src="{{ asset('https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js') }}"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js') }}"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
