<!-- Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Censor</title>
</head>
<body>
  
<?php 

$paragraph = $_GET['paragrafo'];
$word = $_GET['parola'];

$p_length = strlen($paragraph);
$p_censored = str_replace($word, '***', $paragraph);

?>

<h2>Paragrafo non censurato</h2>
<p><?php echo $paragraph ?></p>
<span>Questo paragrafo è lungo <?php echo $p_length ?> caratteri</span>

<hr>

<h2>Paragrafo censurato</h2>
<p><?php echo $p_censored ?></p>
<span>Questo paragrafo è lungo <?php echo strlen($p_censored)?> caratteri</span>

</body>
</html>