<!DOCTYPE html>

<?php 
    use App\Http\Controllers\NewMoviepageController;
?> 

<x-app-layout>
<html>
  <body >
  <img style="float:left; margin-bottom:15px;" width="100px" height="100px" src="{{ asset('pictures/' . $movie->imageReference) }}"/>
  <h1 style="padding-top: 60px; text-align: center; color: white; font-size: 35px;">Update movie {{ $movie->title}} </h1>
  
   <?php
        if(isset($_POST['submit'])){
            NewMoviepageController::updateMovie();
        } 
    ?>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        document.getElementsByName('delete')[0].addEventListener('click', function() {
            var confirmDelete = confirm('Are you sure you want to delete {{ $movie->title }}?');
            
            if (confirmDelete) {                
                window.location.href = '/deleteMovie/{{ $movie->id }}';
            }
        });
      });
    </script>

  <form method="post" enctype="multipart/form-data">
    <div style="border: 2px hidden; border-radius: 8px; padding: 15px; margin: 70px; margin-top: 30px; background-color: #a795e0;">
      <label class="pt-10 text-xl" for="name">Title: </label>
      <input style="border-radius: 8px; margin-bottom: 4px;" id="title" name="title" type="text" value="{{ $movie->title}}" size="60%" style="color: black">
      <br>

      <label class="pt-10 text-xl" for="birthday">Duration: </label>
      <input style="border-radius: 8px; margin-bottom: 4px;" id="duration" name="duration" type="text" value="{{ $movie->duration}}" size="60%" style="color: black">
      <br>

      <label class="pt-10 text-xl" for="nationality">Release year: </label>
      <input style="border-radius: 8px;" id="releaseYear" name="releaseYear" type="text" value="{{ $movie->releaseYear}}" size="60%" style="color: black">
      <br>

      <label class="pt-10 text-xl" for="descriptionShort">Short description: </label>
      <br>
      <textarea style="border-radius: 8px;" id="descriptionShort" name="descriptionShort" rows="1" cols="100">{{ $movie->descriptionShort }}</textarea>
      <br>

      <label class="pt-10 text-xl" for="descriptionLong">Long description: </label>
      <br>
      <textarea style="border-radius: 8px;" id="descriptionLong" name="descriptionLong" rows="2" cols="100">{{ $movie->descriptionLong }}</textarea>
      <br>

      <label class="pt-10 text-xl" for="fileUpload">Upload a new picture: </label>
      <input type="file" id="fileUpload" name="fileUpload">
      <br>

      <label class="pt-10 text-xl" for="rating">Rating: </label>
      <input style="border-radius: 8px;" id="rating" name="rating" type="number" min="1" max="10" value="{{ $movie->rating }}" size="60%" style="color: black">
      <br>
      
      <input style="padding: 5px; border-radius: 8px; background-color: #342d4a; color: white" type="submit" name="submit" value="Update"> 
      <input style="float: right; padding: 5px; border-radius: 8px; background-color: red; color: black" type="button" name="delete" value="Delete {{ $movie->title }} "> 

    </div>
            
    </form>


  </body>
</html>
</x-app-layout>


