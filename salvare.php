<!-- c:/laragon/www/HTTP-start-java/public/salvare.php -->
<?php
header("Access-Control-Allow-Origin: *");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $text = $_POST['text'];

  // Citirea conținutului existent al fișierului
  $existingText = file_get_contents('body.txt');

  // Combina textul existent cu textul nou
  $newText = $existingText . "\n" . $text;

  // Rescrierea întregului conținut în fișier
  file_put_contents('body.txt', $newText);

  // Emiti un răspuns AJAX de succes
  echo "success";
}
?>
