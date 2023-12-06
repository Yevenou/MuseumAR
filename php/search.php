<?php

//Including Database configuration file.
include "config.php";

//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {

//Search box value assigning to $Name variable.
   $name = $_POST['search'];

//Search query.
   $sql = "SELECT id, name, city, canton, website, type, category FROM Museums WHERE name LIKE '%$name%'";

//Query execution

   $ExecQuery = MySQLi_query($con, $sql);

//Creating unordered list to display result.

   echo '

   ';


   while ($Result = MySQLi_fetch_array($ExecQuery)) {

      ?>
      <div class="relative">
         <div onclick="openPopup(this)" id="company-<?php echo $Result['id'];?>" class="company-item">
            <h4><?php echo $Result['name'];?></h4>
            <a class="company-website" target="_blank" href="<?php echo $Result['website'];?>"><?php echo $Result['website'];?></a>
            <p class="company-location"><?php echo $Result['city'];?>, <?php echo $Result['canton'];?></p>
         </div>
      </div>
      <?php
      }}
   ?>

</div>