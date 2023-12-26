<!DOCTYPE html>

<?php 
    use App\Http\Controllers\NewPersonpageController;
?> 

<x-app-layout>
<html>
  <body >
  <h1 style="padding-top: 60px; text-align: center; color: white; font-size: 35px;">Create a new person for the Movie Library</h1>
  
    <?php
        if(isset($_GET['submit'])){
            NewPersonpageController::createPerson($_GET['name']);
        } 
    ?>
  <form method="get">
    <div style="border: 2px hidden; border-radius: 8px; padding: 15px; margin: 70px; margin-top: 30px; background-color: #a795e0;">
      <label class="pt-10 text-xl" for="name">Name: </label>
      <input style="border-radius: 8px; margin-bottom: 4px;" id="name" name="name" type="text" placeholder="John Doe" size="60%" style="color: black">
      <br>

      <label class="pt-10 text-xl" for="birthday">Birthday: </label>
      <input style="border-radius: 8px; margin-bottom: 4px;" id="birthday" name="birthday" type="text" placeholder="01-01-1970" size="60%" style="color: black">
      <br>

      <label class="pt-10 text-xl" for="nationality">Nationality: </label>
      <input style="border-radius: 8px;" id="nationality" name="nationality" type="text" placeholder="Denmark" size="60%" style="color: black">
      <br>

      <label class="pt-10 text-xl" for="biography">Biography: </label>
      <br>
      <textarea style="border-radius: 8px;" id="biagraphy" name="biography" rows="4" cols="50">Insert biography here ...</textarea>
      <br>

      <label class="pt-10 text-xl" for="fileUpload">Picture: </label>
      <input type="file" id="fileUpload" name="fileUpload">
      <br>
      
      <input style="padding: 5px; border-radius: 8px; background-color: #342d4a; color: white" type="submit" name="submit" value="Submit">
    </div>
            
    </form>


  </body>
</html>
</x-app-layout>


