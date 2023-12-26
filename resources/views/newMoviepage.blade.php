<!DOCTYPE html>

<?php 
    use App\Http\Controllers\NewMoviepageController;
?> 

<x-app-layout>
<html>
  <body >
  <h1 style="padding-top: 60px; text-align: center; color: white; font-size: 35px;">Create a new movie for the Movie Library</h1>
   <?php
        if(isset($_POST['submit'])){
            NewMoviepageController::createPerson();
        } 
    ?>
  <form method="post" enctype="multipart/form-data">
    <div style="border: 2px hidden; border-radius: 8px; padding: 15px; margin: 70px; margin-top: 30px; background-color: #a795e0;">
      <label class="pt-10 text-xl" for="title">Title: </label>
      <input style="border-radius: 8px; margin-bottom: 4px;" id="title" name="title" type="text" placeholder="Title" size="60%" style="color: black">
      <br>

      <label class="pt-10 text-xl" for="duration">Duration: </label>
      <input style="border-radius: 8px; margin-bottom: 4px;" id="duration" name="duration" type="text" placeholder="01-02-01" size="60%" style="color: black">
      <br>

      <label class="pt-10 text-xl" for="releaseYear">Release year: </label>
      <input style="border-radius: 8px;" id="releaseYear" name="releaseYear" type="text" placeholder="2004" size="60%" style="color: black">
      <br>

      <label class="pt-10 text-xl" for="descriptionShort">Short description: </label>
      <br>
      <textarea style="border-radius: 8px;" id="descriptionShort" name="descriptionShort" rows="1" cols="100">Insert short description here ...</textarea>
      <br>

      <label class="pt-10 text-xl" for="descriptionLong">Long description: </label>
      <br>
      <textarea style="border-radius: 8px;" id="descriptionLong" name="descriptionLong" rows="2" cols="100">Insert long description here ...</textarea>
      <br>

      <label class="pt-10 text-xl" for="fileUpload">Picture: </label>
      <input type="file" id="fileUpload" name="fileUpload">
      <br>

      <label class="pt-10 text-xl" for="rating">Rating: </label>
      <input style="border-radius: 8px;" id="rating" name="rating" type="number" min="1" max="10" size="60%" style="color: black">
      <br>
      
      <input style="padding: 5px; border-radius: 8px; background-color: #342d4a; color: white" type="submit" name="submit" value="Submit">
    </div>
            
    </form>


  </body>
</html>
</x-app-layout>


