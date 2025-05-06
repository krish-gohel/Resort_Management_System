<?php
include "include/header.php";
include "connect.php";
 ?>
 <link rel="stylesheet" type="text/css" href="style.css">

<center><h1>PARADISE ROYALE</h1>
   <center><img src="img/Resort.jpg" id="himg">

<br><br><br>


<div class="home">

   <div class="stars" >
     <form action="home.php" method="post">
       <h2><center>Review</center></h2>
       <input class="star star-5" id="star-5" type="radio" name="star" value="5"/>
       <label class="star star-5" for="star-5"></label>
       <input class="star star-4" id="star-4" type="radio" name="star" value="4"/>
       <label class="star star-4" for="star-4"></label>
       <input class="star star-3" id="star-3" type="radio" name="star" value="3"/>
       <label class="star star-3" for="star-3"></label>
       <input class="star star-2" id="star-2" type="radio" name="star" value="2"/>
       <label class="star star-2" for="star-2"></label>
       <input class="star star-1" id="star-1" type="radio" name="star" value="1"/>
       <label class="star star-1" for="star-1"></label>
       <input type="text" class="starinput" name="Comment" placeholder="Comment">
       <input type="submit" class="starbutton" name="review"  value="Submit">
    </form>
   </div>
   <?php

   if (isset($_POST['review'])) {
     //echo '<script type="text/javascript"> alert("review button click")</script>';

     $query = "INSERT INTO rating (star,comnt) VALUES ('".$_POST['star']."','".$_POST['Comment']."')";


     $query_run = mysqli_query ($con,$query);

     if ($query_run) {
         echo '<script type="text/javascript"> alert("Review Submitted")</script>';
     }
     else {
        echo '<script type="text/javascript"> alert("!! ERROR !!")</script>';
     }
   }

mysqli_close($con);

    ?>

      <div id="hdiscrp">
         <article >
            <h2><center>Description</center></h2>
            A short drive from Bombay Airport, discover a serene retreat where luxurious comfort 
            meets the vibrant culture and natural beauty of Lonavala. This lush, heritage-rich 
            oasis offers refined experiences on land and water—from traditional Ayurvedic 
            treatments in the spa to boating, birdwatching, or simply unwinding by the calm 
            shores of Maharashtra's most pristine lakes and rivers.
         </article>
      </div>

</div>


<div id="hbooknow">
   <center>
      <a href="room.php">Rooms</a>
      <a href="booking.php">Book Now</a>
   </center>
</div>


<?php
include "include/footer.php";
 ?>
