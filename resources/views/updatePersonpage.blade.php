<!DOCTYPE html>

<?php 
    use App\Http\Controllers\NewPersonpageController;
?> 

<x-app-layout>
<html>
  <body >
  <img style="float:left; margin-bottom:15px;" width="100px" height="100px" src="{{ asset('pictures/' . $person->imageReference) }}"/>
  <h1 style="padding-top: 60px; text-align: center; color: white; font-size: 35px;">Update person {{ $person->name}} </h1>
  
   <?php
        if(isset($_POST['submit'])){
            NewPersonpageController::updatePerson();
        } 
    ?>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        document.getElementsByName('delete')[0].addEventListener('click', function() {
            var confirmDelete = confirm('Are you sure you want to delete {{ $person->name }}?');
            
            if (confirmDelete) {                
                window.location.href = '/deletePerson/{{ $person->id }}';
            }
        });
      });
</script>

  <form method="post" enctype="multipart/form-data">
    <div style="border: 2px hidden; border-radius: 8px; padding: 15px; margin: 70px; margin-top: 30px; background-color: #a795e0;">
      <label class="pt-10 text-xl" for="name">Name: </label>
      <input style="border-radius: 8px; margin-bottom: 4px;" id="name" name="name" type="text" value="{{ $person->name}}" size="60%" style="color: black">
      <br>

      <label class="pt-10 text-xl" for="birthday">Birthday: </label>
      <input style="border-radius: 8px; margin-bottom: 4px;" id="birthday" name="birthday" type="text" value="{{ $person->birthday}}" size="60%" style="color: black">
      <br>

      <label class="pt-10 text-xl" for="nationality">Nationality: </label>
      <input style="border-radius: 8px;" id="nationality" name="nationality" type="text" value="{{ $person->nationality}}" size="60%" style="color: black">
      <br>

      <label class="pt-10 text-xl" for="biography">Biography: </label>
      <br>
      <textarea style="border-radius: 8px;" id="biagraphy" name="biography" rows="4" cols="50"> {{ $person->biography}} </textarea>
      <br>

      <label class="pt-10 text-xl" for="fileUpload">Upload a new picture: </label>
      <input type="file" id="fileUpload" name="fileUpload">
      <br>
      
      <input style="padding: 5px; border-radius: 8px; background-color: #342d4a; color: white" type="submit" name="submit" value="Update"> 
      <input style="float: right; padding: 5px; border-radius: 8px; background-color: red; color: black" type="button" name="delete" value="Delete {{ $person->name }} "> 

    </div>
            
    </form>


  </body>
</html>
</x-app-layout>


