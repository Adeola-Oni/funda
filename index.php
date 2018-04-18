<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="fundadb";

    $conn = mysqli_connect($servername, $username, $password, $db);

    // if($conn->connect_error){
    //     die("connection failed: ". $conn->connect_error);
    // }
    // echo "connection successful";

    if(isset($_POST['submit_form'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $fundaname = $_POST['fundaname'];

        $sql = "INSERT INTO signup( username, mail, userpassword, fundaname) 
        VALUES ('$name', '$email', '$password','$fundaname')";

        if ($conn->query($sql) === TRUE) {
            echo "New Record Created";
        } 
        else{
            echo "Error" . mysqli_error($conn);
        }
        mysqli_close($conn);

        // $administrator_mail = "oniadeola33@gmail.com";

        // $user_message= "Thanks for joining the funda family".$name. ".";
        // $admin_message = "hey " . $email. " just joined funda";
         
        //  $send = mail($email,$user_message,$name);
        //  $send = mail($administrator_mail,$admin_message,$name);
    }
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="funda1.css">
    <link rel="stylesheet" href="css/vegas.min.css">
    <script src="js/funda1.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body class ="fixed-sn mdb-skin">

    <nav id="naviz" class="pages">
        <div class="col-12">
            <ul class="col-12">
                <li><a href="#">FUNDA.COM</a></li>
         </div>
    </nav>



    <article class="homepage col-12 mainlandpage pages slider-banner hm-white-slight" id="landpage">
        <br><br>
        <div class="col-25 homet"> <p></p> </div>

        <div class="col-5 homet">
        </div>

        <div class="col-25 homet"> <p></p> </div>

        <div class="col-6 homet">
                <form class="form-signin" method="POST">
                    <h2>SIGNUP</h2>
                    <input type="text" name="name" class=" inp form-control" placeholder="Name" required="required"><br>
                    <input type="text" name="email" class=" inp form-control sr-only" placeholder="Email address" required="required"><br>
                    <input type="password" name="password"class="inp form-control sr-only" placeholder="Password" required="required"><br>
                    <input type="text" name="fundaname" class=" inp form-control" placeholder="Username/Fundaname" required="required"><br>
                    <br>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me" required="required"> 
                            I agree to the terms and condition of Funda.
                        </label>
                    </div>
                    <br>
                    <button class="btn" type="submit" name="submit_form" >SIGN UP</button>
                </form>
                    <div class="belowform">
                        <button class="btn" type="submit" name="sub" onclick="showlogin()">SIGN IN</button>
                    </div>
                <br> <br>
                
  
         </div>
    </article>




    <div class="homepage col-12 pages slider-banner" id="landpage2">

        <div class="col-12 homet2">
            <form class="form-signin2 form-signin" class="col-12">
                <br><br><br>
                <h2 class="form-signin-heading">FUNDA SIGNIN</h2>
                <input type="text" name="email" class=" inp form-control sr-only" placeholder="Email address" required="required"><br>
                <input type="password" name="password"class="inp form-control sr-only" placeholder="Password" required="required"><br>
                <input type="text" name="fundaname" class=" inp form-control" placeholder="Username/Fundaname" required="required"><br>
                <button class="btn" type="submit" name="submit_form_login" ><a href="landingpage.html">LOGIN </a></button>
                <button class="btn" type="submit" onclick="landpagenav()"><a href="index.php">BACK</a></button>
            </form>
            <br><br><br><br>
        </div>   
     </div>



    <header class="col-2 sidenav pages" id="headerbar">
        <ul>
        <br><br><br>
        <li><br>
            <a href="landingpage.html" > 
            <p> HOME</p>
            </a>
        </li>

        <li>
            <a href="account.html"> 
            <p>ACCOUNT</p>
            </a>
        </li>

        <li>
            <a href="novels.html"> 
            <p>NOVELS</p>
            </a>
        </li>

        <li>
            <a href="comics.html" > 
            <!-- onclick="showComicsPage()" -->
            <p>COMICS</p>
            </a>
        </li>

        <li>
            <a href="#"> 
            <p>JOURNALS</p>
            </a>
        </li>

        <li>
            <a href="#"> 
            <p>TEXTBOOKS</p>
            </a>
        </li>

        <li>
            <a href="#"> 
            <p>PROOFREAD CLUB</p>
            </a>
        </li>

        <li>
            <a href="#"> 
            <p>BOOK REVIEW</p>
            </a>
        </li>

        <li>
            <a href="#"> 
            <p>GROUP</p><br>
            </a>
        </li>

        <li>
            <a href="#"> 
            <p>JOIN A CLUB</p><br>
            </a>
        </li>
        <br>
        <br>
        </ul>
        <!-- <marquee><p>funda.com (don't stop)</p></marquee> -->
    </header>


    <!-- ACCOUNT PAGE -->

 

    



    <!-- <aside class="col-10 recent main " id="ComicsPage">
        <div class="col-12">
        <br>
            <div class="col-2">
                <img src="images/391256.jpg"  width="100%"><br><br>
                <img src="images/391256.jpg"  width="100" ><br><br>
                <img src="images/263237.jpg"  width="100" ><br>
            </div>

            <div class="imgf col-2">
                <img src="images/391256.jpg"  width="100" >
            
            </div>

            <div class="imgf col-2">
                <img src="images/im4.jpg"  width="100" >
            
            </div>

            <div class="imgf col-2">
                <img src="images/im5.jpg"  width="100" >
            </div>

            <div class="imgf col-2">
                <img src="images/im7.jpg" width="100" >
            </div> -->
            <!-- <br>
            <img src="images/391256.jpg"  class="col-2" width="100"><br>
            <img src="images/391256.jpg"  class="col-2" width="100"><br>
            <img src="images/391256.jpg"  class="col-2" width="100"><br>
            <img src="images/391256.jpg"  class="col-2" width="100"><br>
            <img src="images/391256.jpg"  class="col-2" width="100"> -->

            <!-- <div class="imgf col-2">
                <img src="images/im2.jpg"  width="100" >
            
            </div>

            <div class="imgf col-2">
                <img src="images/im4.jpg"  width="100" >
            
            </div>

            <div class="imgf col-2">
                <img src="images/im5.jpg"  width="100" >
            </div>
        </div> -->

        <!-- <div id="comicsimg" >
                <img src="images/-633551358.jpg" title="FUNDA.COM" >
                <h1>WELCOME TO FUNDA</h1>
                <button onclick="otherpages" class="button form-control btn-primary">OKAY</button>
            </div>
        </div> -->
    <!-- </aside> -->
<div class="sc">
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script type="text/javascript" src="js/vegas.min.js"></script>




    <script>
        $(".slider-banner").vegas({
            slides:[
            {src: "images/113.jpg"},
             {src: "images/112.jpg"},
              {src: "images/114.jpg"},
              {src: "images/115.jpg"},
            ],
        });

    $(document).ready(function() {
        $('.mdb-select').material_select();
    });

        $('#modal-contact').on('shown.bs.modal', function () {
          $('#myInput').focus()
        })

       
        $('a[data-toggle="list"]').on('shown.bs.tab', function (e) {
        e.target
        e.relatedTarget 
        })

    </script>

    <script>
        new WOW().init();

    </script>
    </div>
    
</body>
</html>
