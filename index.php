<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel = "stylesheet" style="text/css" href = "global.css">
        <title>Page Title</title>
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-3">
                    <?php
                    echo "<form action=login.php method=POST class='form-container'>";
                    echo "<h4 class= 'text-center font-eight-bold'>COMAS LOGIN</h4>";
                    echo "<div class='form-group'>";
                    echo "<label for= 'exampleInputEmail1'>Email address</label>";
                    echo "<div class='form-group'>";
                    echo "<input type='email' name='email' class='form-control' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='Enter email'>";
                    echo "</div>";
                    echo"<div class='form-group'>";
                    echo"<label for='exampleInputPassword1'>Password</label>";
                    echo "<input type='password' class='form-control' id='exampleInputPassword1' name ='password' placeholder='Password'>";
                    echo  "</div>";
                    echo "<input type = 'submit' class='btn btn-primary btn-block' value = 'Login' name ='submit'></button>";
                    echo "</form>";
                        ?>
                </section>
            </section>
        </section>

    </body>
</html> 
<!--
<h4 class="text-center font-eight-bold">COMAS LOGIN</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="button" class="btn btn-primary btn-block" onclick="window.location= 'admin-homepage.html'">Submit</button>
-->