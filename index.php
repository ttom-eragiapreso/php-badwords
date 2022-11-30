<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Words</title>
</head>
<style>
  input {
    width: 250px;
  }
</style>
<body>
  
  <form action="censor.php" method="GET">
    <textarea type="text" name="paragrafo" placeholder="Scrivi il tuo paragrafo"></textarea>
    <input type="text" name="parola" placeholder="Scrivi la parola che vuoi censurare">
    <button type="submit">Vai</button>
  </form>

</body>
</html>