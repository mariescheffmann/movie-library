<?php
use Illuminate\Support\Facades\Auth;

// Retrieve the currently authenticated user...
$user = Auth::user();

// Retrieve the currently authenticated user's ID...
$id = Auth::id();
?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Text Display</title>
</head>

<body>
    <p>
        <?php echo $user->name; 
        echo "\n";
        echo $id;
        ?>
    </p>
</body>

</html>