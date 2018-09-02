<?php
?>



<body >
      
              <div id="demo" class="carousel slide text-center" data-ride="carousel">


                 
                    <div class="carousel-inner">
                         <div class="carousel-item active">
                      <img src="pics/931 logo.png" alt="lifting" style="height: 500px">
                      </div>
                        <?php
$query = "Select c.url, c.alt FROM `carpics` c ";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result)){
$url = $row['url'];
$alt = $row['alt'];
                     echo" <div class='carousel-item'>
                        <img src='$url' alt='$alt' style='height:500px'>
                      </div>";
                      
                              
}
                              ?>
                    </div>
                  
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
                  
                  </div>
              <div class="jumbotron">

<div class="container">

  <div class="row">
    <div class="col text-center">
        <?php                include 'conn.php';
        $nquery = "SELECT f.url, f.alt FROM `frontpic` f WHERE f.idfrontpic = (SELECT MAX(f.idfrontpic) FROM frontpic)";
$nresult = mysqli_query($con, $nquery);
while($nrow = mysqli_fetch_array($nresult)){
    $nurl = $nrow['url'];
    $nalt = $nrow['alt'];
    echo "<img src='$nurl' alt='$nalt'>";

}

?><br>
<a href='Robopage.php'><button class="btn">Meet the Robots!</button></a>

<a href='teammembers.php'><button class="btn">Meet the Team!</button></a>
    </div>
      
    
  </div>
    <div class="col text-center">
    Watch our completed matches <a href="thebluealliance.com/team/931">here</a><br>
      Live stream us <a href="https://frc-events.firstinspires.org/watch">here</a>
  </div>
  </div>
</div>

</body>
