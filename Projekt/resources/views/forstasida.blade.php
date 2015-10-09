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
            <a href="{{URL::route('../auth/login')}}" class="btn btn-default">Logga ut</a>
            </div>
            
            <img class="logotype" alt="logotype" width="150" src="img/Logotype1.png">
            <div class="col-sm-12">
                <div class="profil">
               <div class="col-sm-3">
                  <div class="sidebar">
                    <img class="profilbild" alt="profilbild" width="150" src="img/profilbild.png">
                     <div class="profiltext">

                  <!--- Gör så att det syns vem som är inloggad -->
                  @if(Auth::check())
                  {{ Auth::User()->fname }}
                  @endif

                  <!--- Gör så att det syns vilket program den inloggade läser -->
                   @if(Auth::check())
                  {{ Auth::User()->program }}
                  @endif

                     <p>Webbdesign</p>
                   </div>
                     <a href="{{url('minainlagg')}}">Mina inlägg<a/>
                     </a>
                 </div>
                  </div>
               </div>
               <div class="col-sm-9">
                  <h3>Senaste</h3>
                  <ul class="nav navbar-nav">
                    <li>
                      <a href="{{url('senaste')}}">Senaste</a>
                    </li>

                    <li>
                       <a href="{{url('popularaste')}}">Populärast</a>
                    </li>
                  </ul>


    
      <div class="dropdown">

      <label for="sel1">Forum</label>
      <select class="form-control" id="sel1">
        <option>Senaste</option>
        <option>Läxhjälp</option>
        <option>Hitta rätt</option>
        <option>Event</option>
        <option>Övrigt</option>
      </select>
</div>
        <div id="inlaggsruta">
        <textarea class="form-control" rows="5" id="comment" placeholder="Inlägg"></textarea>
        </div>

        <div id="forstaknapp">
        <button type="submit" class="btn btn-default">Skicka</button>
        </div>        

    
<div class="container-fluid" id="morklilaruta">
  <p>här ska inlägg kallas in</p>
   
</div><!-- mörklila ruta stängs -->

<div class="container-fluid" id="ljuslilaruta">
   <input type="text" class="form-control" placeholder="Svara">
   <button type="submit" class="btn btn-default">Skicka</button> 
   
</div><!-- ljuslila ruta stängs -->

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
