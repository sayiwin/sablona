<?php
  function generateslides($dir) {
    $files = glob($dir . "/*.jpg");
    $json = file_get_contents("data/datas.json");
    $data = json_decode($json, true);
    $text = $data["text_banner"];
    foreach ($files as $file) {
      echo '<div class="slide fade">';
      echo '<img src="' . $file . '">';
      echo '<div class="slide-text">';
      
      echo ($text[basename($file)]);
      echo '</div>';
      echo '</div>';
      }
  }
?>

<?php
  function pozdrav() {
    $hour = date('H');
    if ($hour < 12) {
      echo "<h3>Dobré ráno, pan Maksym</h3>";}
    elseif ($hour < 18) {
      echo "<h3>Dobrý deň, pan Maksym</h3>";} 
    else {
      echo "<h3>Dobrý večer, pan Maksym</h3>";}
    }
?>

<?php
  function generateport() {
    echo '<div class="row">';
    for ($i = 1; $i < 5; $i++){
      echo '<div class="col-25 portfolio text-white text-center" id=portfolio-' . $i . '>
      Web stránka ' . $i .
      '</div>';
    }
    echo '</div>';
    echo '<div class="row">';
    for ($i = 5; $i < 9; $i++){
      echo '<div class="col-25 portfolio text-white text-center" id=portfolio-' . $i . '>
      Web stránka ' . $i .
      '</div>';
    }
    echo '</div>';
  }
?>


<?php
   function insertQnA(){
     $json = file_get_contents("data/datas.json");
     $data = json_decode($json, true);
     $otazky = $data["otazky"];
     $odpovede = $data["odpovede"];
     echo '<section class="container">';
       for ($i = 0; $i < count($otazky); $i++) {
           echo '<div class="accordion">
             <div class="question">'.
               $otazky[$i].'
               </div>
               <div class="answer">'.
               $odpovede[$i].'
               </div>
           </div>';
           }
       echo '</section>';
   }
 ?>