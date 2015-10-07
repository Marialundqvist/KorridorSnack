<!DOCTYPE html>
<html>
   <head>
      <title>KorridorSnack</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/main2.css">
      <meta charset="utf-8">
   </head>
   <body>
      <div class="content">
      <div class="innehall">
         <div class="row">
            <img class="bakgrundsbild" alt="bakgrundsbild" src="img/login.png">
            <div class="loggaut">
            <a href="{{url('loggaut')}}">Logga ut</a>
            </div>
            <img class="logotype" alt="logotype" width="150" src="img/Logotype1.png">
            <div class="col-sm-12">
                <div class="profil">
               <div class="col-sm-3">
                  <div class="sidebar">
                    <img class="profilbild" alt="profilbild" width="150" src="img/profilbild.png">
                     <div class="profiltext">
                     <h3></h3>
                   </div>
                     <a href="{{url('minainlagg')}}">Mina inlägg<a/>
                     </a>
                 </div>
                  </div>
               </div>
               <div class="col-sm-9">
                  <h3></h3>
                  <ul class="nav navbar-nav">
                    <li>
                      <a href="{{url('senaste')}}">Senaste</a>
                    </li>

                    <li>
                       <a href="{{url('popularaste')}}">Populärast</a>
                    </li>
                  </ul>
                  <!--
                  <div class="senaste">
                    <a href="#">Senaste</a><p>/</p><a href="#">Populärast</a>
                  </div>-->
               </div>
               <div class="forum">
               <div class="col-sm-3">
                <h3>Forum</h3>
                    <div class="forsta"> 
                    <a href="{{url('senaste')}}">Senaste<a/>
                    </div>
                    <div class="andra"> 
                    <a href="{{url('laxhjalp')}}">Läxhjälp<a/>
                    </div>
                    <div class="forsta"> 
                    <a href="{{url('hittaratt')}}">Hitta rätt<a/>
                    </div>
                    <div class="andra"> 
                    <a href="{{url('event')}}">Event<a/><br>
                    </div>
                    <div class="forsta"> 
                    <a href="{{url('ovrigt')}}">Övrigt<a/>
                    </div>
                    </a>
                    
              </div>
               </div>
               <div class="omoss">
               <div class="col-sm-3">
                  <h3>Om oss</h3>
                  <p>@Korridorsnack</p>
              </div>
               </div>
               <div class="kontakt">
               <div class="col-sm-3">
                  <h3>Kontakt</h3>
                  <p>info@korridorsnack.se</p>
              </div>
                </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>