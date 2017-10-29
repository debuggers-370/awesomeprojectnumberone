
<!DOCTYPE html>
<html>
<title>IT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif }
    body {margin-top: 50px}

</style>
<body class="w3-theme-l5">

<div w3-include-html="Nav.html"></div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="img/banner3.jpg" alt="New york" width="100%" >
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">

    <div class="w3-container w3-middle">
        <h1 class="w3-center">ITManage</h1>
    </div>
    <!-- The Grid -->
    <div class="w3-row">



        <!-- Middle Column -->
        <div class="w3-col m7">
            <header class="w3-display-container w3-content w3-wide w3-" style="max-width:1500px;max-height: 800px;" id="home">
                <img class="w3-image w3-center" src="../public/img/old-house-hotel-exterior.jpg" alt="pictureOfHouse" width="1500px" height="800px">
                <div class="w3-display-middle w3-margin-top w3-center">
                    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>ManageIT</b></span> </h1>
                </div>
            </header>

            <div class="w3-content w3-padding" style="max-width:1564px">


                <div class="w3-container w3-padding-32" id="intro">
                    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><h7>This is a simple Home Page</h7></h3>
                </div>
            </div>
            <!-- End Middle Column -->
        </div>

        <!-- Right Column -->
        <div class="w3-col m2">

            <!-- End Right Column -->
        </div>

        <!-- End Grid -->
    </div>

    <footer class="w3-container">
        <p class="w3-right w3-text-grey">&copy; 2017 Property Smart. All rights reserved.</p>
    </footer>
    <!-- End Page Container -->
</div>


<br>


<script>
    w3.includeHTML();

</script>

</body>

</html>

<?php

$user = array("CS");
array_push($user,$_POST['Major']);



$conn = mysqli_connect("localhost", "root", "Ainokea4u", "managedb");
if (mysqli_connect_errno())            # -----------  check connection error
{
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(1);
}
print("<br>");

$users = array("user1");
//hard coded.

foreach($users as $key => $value){

    $query = "select * from users";
    $result = mysqli_query($conn, $query);
    if ( ! ( $result = mysqli_query($conn, $query)) )      # Execute query
    {
        printf("Error: %s\n", mysqli_error($conn));
        exit(1);
    }

    $printed = false;

    while ($row = mysqli_fetch_assoc( $result ))
    {


        foreach ($row as $key => $value)
        {
            print $value . "\t";
        }
        print "<br>";
    }
}
?>

