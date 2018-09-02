<?php
include 'conn.php'
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
 <!DOCTYPE html>

  
 <div class="text-center footer" style="background-color: black">

    <div class="">
      <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

              <!-- Content -->
              <a class="btn " href="" role="button" style="background: rgb(0, 253, 13)"><h5 class="text-uppercase">Donate</h5></a>
              <p>It costs $10,000 to build a robot and attend a competition (on average) plus travel expenses. Please consider donating to 931 Perpetual Chaos </p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Pages</h5>

                <ul class="list-unstyled">
                    <li>
                      <a href="index.php">Home</a>
                  </li>

                  <li>
                      <a href="Robopage.php">Robots</a>
                  </li>
                  <li>
                      <a href="teammembers.php">Team Members</a>
                  </li>
                  <li>
                    <a href="#!">Donate</a>
                  </li>
                  <!-- <li>
                    <a href="#!">Link 4</a>
                  </li> -->
                </ul>

              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Follow Us!</h5>

                <ul class="list-unstyled">

<!--                  <li>
                    <a href="https://www.thebluealliance.com/team/931">The Blue Alliance</a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/Perpetual-Chaos-Team-931-123166844365971/">Facebook</a>
                  </li>-->
                  <?php 
                      ini_set("display_errors", 0);
$query = "Select s.medialink, s.medianame FROM `social media` s ";
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result)){
    $link = $row['medialink'];
    $medianame = $row['medianame'];
                 echo " <li>
                    <a href='$link'>$medianame</a>
</li>";}?>
                </ul>

              </div>
              <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        
        <!-- Footer Links -->
        <?php
session_start();
        if($_SESSION['loggedin'] == TRUE){
        
        echo'<a href="siteEditorhome.php"> <img src="pics/editlink.png" style="height:30px; width: 30px;"> admin sign out </a>';}
 else {        echo'<a href="login.php"> <img src="pics/editlink.png" style="height:30px; width: 30px;"> admin sign in </a>';
 
 }
                ?>


      </footer>
      <!-- Footer -->
    </div>

    </div>

  </body>

 </html>
