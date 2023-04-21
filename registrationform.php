<?php

$insert = false;
if (isset($_POST['name'])){
  // set coneection variable

$server='localhost';
$username ='root';
$password ='';
$db = 'team';
// create a database connection
$con = mysqli_connect($server,$username,$password,$db);

// check connection success 
if(!$con)
      {
         die("connection to this database failed due to ".mysqli_connect_error());
      }
    // echo "success connceting to the database";

    // collect port variable
    $name = $_POST['name'] ;
    // $fname =$_POST['fname'];
    //  $mname =$_POST['mname'];
    $sex= $_POST['sex'];
    // $date = $_POST['date'];
    $collegename =$_POST['collegename'];
    $stream= $_POST['stream'];
    $room = $_POST['room'];
    $phoneno =$_POST['phoneno'];
    $address =$_POST['address'];
    $gmail =$_POST['gmail'];
    
    // echo $name;


    $sql = " INSERT INTO `contact` (`name`,`sex`,`collegename`, `stream`, `room`, `phoneno`, `address`, `gmail`) VALUES ('$name','$sex', '$collegename', '$stream', '$room', '$phoneno', '$address', '$gmail');"; 

    // INSERT INTO `contact` (`sno`, `name`, `fname`, `mname`, `gender`, `collegename`, `stream`, `room`, `phoneno`, `address`, `gmail`) VALUES (NULL, 'prakash', 'love', 'love you', 'male', 'psit', 'Bsc', 'single', '7880517657', 'banssi', 'shivam467@gmail.com');
    

    // INSERT INTO `contact` (`sno`, `name`, `sex`, `collegename`, `stream`, `room`, `phoneno`, `address`, `gmail`) VALUES (NULL, 'abhi', 'male', 'st aloysius', 'Bsc', 'single', '7880517657', 'bisanda ', 'shivam346@gmail.com');

    // INSERT INTO `contact` (`sno`, `name`, `sex`, `date`, `collegename`, `stream`, `room`, `phoneno`, `address`, `gmail`) VALUES (NULL, 'vani', 'male', '2023-02-12', 'prtu', 'Bsc', 'single', '7880517657', 'atarra', 'shivam234@gmail.com');



//    echo $sql;

// excute the query

    if($con->query($sql) == true){
        // echo "successfully inserted";

        // flag for successfull insertion
        $insert = true;
    }
    else{
        echo "error: $sql <br> $con->error";
    }

    // close the database connection
    $con->close();
   }
?>











<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responice.css">
    <title>ROOM PAO HOSTEL</title>
</head>

<body>

    <nav class="navbar  ">
        <ul class="nav-list">
            <div class="logo"><img src="img/hostel logo.jpg" alt="logo"  ></div>
            <li><a href="index.html">home</a></li>
            <li><a href="services.html">about</a></li>
            <li><a href="registrationform.html">registration</a></li>

            <!-- <div class="rightnav">
                <input type="text" name="search" id="search">
                <button class="chotabutton">search</button>
            </div> -->
        </ul>
    </nav>





    <section class=" bc reg">



    <?php
        if($insert == true)
         {
        echo "<p class='submitmsg'><b>Thanks for registration </b></p>";
         }
        ?>
       

        <h1 class="text-advance">registration from</h1>
        <div class="form">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
            <input class="form-input" type="char" required name="name" id="name " placeholder="enter your name ">
            <!-- <input class="form-input"type="text" required  name="fname " id="fname " placeholder="enter your father name ">
            <input class="form-input" type="text" required name="mname " id="mname " placeholder="enter your mather name "> -->
            <input type="text" class="form-input" required name="sex" placeholder="inter your sex">
            <!-- <input type="datetime" required name="date" class="form-input" placeholder="inter date in which you want"> -->
            <!-- <input class="form-input" type="char" required name="gender" id="gender" placeholder="enter your gender "> -->
           
            <input class="form-input" type="text" required name="collegename" id="collegename"
                placeholder="enter your college name ">
            <input class="form-input" type="char" required name="stream" id="stream" placeholder="enter your year and stream ">
            <input class="form-input" type="char" required  name="room" id="room"
                placeholder="Which types of room you want">
            <input class="form-input" type="varchar" required name="phoneno" id="inputphoneno" placeholder="enter your phone number">
            <input class="form-input" type="text" required name="address" id="inputaddress "
                placeholder="enter your  parmanent address ">
            <input class="form-input" type="varchar" requerid name="gmail" id="inputgmail4 " placeholder="enter your gmail ">
          

            <!-- <button class="" type="submit" name="submit" id="submit">sumbit</button> -->
            <!-- <button>submit</button> -->
            <!-- <input type="button" value="submit"/> -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary">sumbit</button>
            </div>
            <!-- <input type="submit"/> -->

            </form>
        </div>
    </section>
    <footer>

        <section class="contact">
            <h3>Room paao Hostel</h3>

            <p>Best Hostel for both Boys and Girls.</p>

            <ul class="socials">
                <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.google.com/"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="https://www.linkedin.com/in/shivam-gupta-8938911b2"><i class="bi bi-linkedin"></i></a></li>


            </ul>

            <div class="footer-bottom">
                <!-- add all information -->
                <p>copyright &copy;2022 <a href="#">Room paao Hostel</a> </p>

                <div class="footer-menu">
                    <ul class="f-menu">
                        <li><a href="/index.html">Home</a></li>
                        <li><a href="/services.html">services</a></li>
                        <li><a href="/registrationform.html">registration</a></li>
                    </ul>
                </div>

            </div>

        </section>
    </footer>



</body>

</html>