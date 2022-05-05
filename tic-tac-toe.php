<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic-Tac-toe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1> Welcome To Tic Tac Toe Game</h1>
    </div>
    <h2>Please Enter Your Name</h2>
<form method="POST" action="play_game.php">
  <div class="form-group">
    <label for="first-player">First Player</label>
    <input type="text" class="form-control" id="first_player"  placeholder="First Player">
  </div>
  <div class="form-group">
    <label for="second-player">Second Player</label>
    <input type="text" class="form-control" id="second_player" placeholder="Second Player">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>

</html>