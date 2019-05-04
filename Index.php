<?php
$cookie_name = "notaflag";
$placeholder="Njg3NDc0NzA3MzNhMmYyZjc3Nzc3NzJlNzk2Zjc1NzQ3NTYyNjUyZTYzNmY2ZDJmNzc2MTc0NjM2ODNmNzYzZDY0NTE3NzM0NzczOTU3Njc1ODYzNTE=";
setcookie($cookie_name, $placeholder, time() + (30), "/"); // 86400 = 1 day
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simple Calculator</title>
        <link rel="stylesheet" href="des.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">-->
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body text = "white">
      <center>
        <div class="container">
          <h2 align="center">&nbsp; Simple Calculator</h2>
  <div class="imagebg">

  </div>

            <div class="container">


                <div class="form-container z-depth-5">


                  <center>
                    <div class="row">
                      <form method="post" action="CTF.php">
                        <form class="col s12" id="reused_form">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name = "num1" placeholder="Enter Number">

                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">

                                  <select name = "operator">
                                    <option> Add</option>
                                    <option> Subtract</option>
                                    <option> Multiply</option>
                                    <option> Division</option>
                                  </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input type="text" name = "num2" placeholder="Enter Number">

                                </div>
                            </div>
                            <div>
                                <center><input type="submit" name="sub" value="Calculate"></center>
                            </div>
                        </form>

                    </div>
                  </center>
                </div>
            </div>
            <!--Import jQuery before materialize.js-->
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
        </div>
      </center>
    </body>
</html>
