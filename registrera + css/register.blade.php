<!DOCTYPE html>
<html>
    <head>
        <title>Registrera</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      
            <!-- Latest compiled and minified CSS bootstrap -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
            <!-- Optional theme bootstrap-->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

            <!-- Latest compiled and minified JavaScript bootstrap-->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            <!-- kopplar till css. för att vara responisv i olika strolekar ändras css, därför olika css filer-->
           <link rel="stylesheet" type="text/css" href="css/register.css">
            
           



            <meta charset="utf-8">

        <style>
           
        </style>
    </head>
    <body>
       
    <div class="content">
 
        <div class="row">
            <img class="bakgrundsbild" alt="bakgrundsbild" src="img/login.png">

          <div class="col-sm-12"><!-- ligger i rowen. detta är är den lila rutan-->
            <img class="logotype" alt="logotype" src="img/Logotype1.png">
          <!-- text boxarna-->

        <form method="POST" action="../auth/welcome">
            {!! csrf_field() !!}

            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon1">Förnamn</span>
                <input type="text" name="fname" class="form-control" placeholder="Förnamn" aria-describedby="sizing-addon1">
            </div>

              <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon2">E-mail</span>
                 <input type="email" name="email" class="form-control" placeholder="exempel@student.hh.se" aria-describedby="sizing-addon2">
            </div>


            <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon2">Lösenord</span>
                 <input type="password" name="password" class="form-control" placeholder="******" aria-describedby="sizing-addon2">
            </div>

             <div class="input-group input-group-lg">
                <span class="input-group-addon" id="sizing-addon2">Upprepa lösenord</span>
                 <input type="password" name="password_confirmation" class="form-control" placeholder="******" aria-describedby="sizing-addon2">
            </div>

            <a href="">Logga in?</a>
<!-- knappen logga in -->
            <div class="btn-group" role="group" aria-label="...">
                <button type="sumbit" class="btn btn-default">Registrera</button>
            </div>
        </form>  
       
          </div>
        </div>
    </div>


            
               
            
     
  
    </body>
</html>