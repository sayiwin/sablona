<section class="container">
    <div class="row">
        <div class="col-100 text-center">
        <?php
            $hour = date('H');
            if ($hour < 12) {
              echo "<h3>Dobré ráno, pan Maksym</h3>";}
            elseif ($hour < 18) {
              echo "<h3>Dobrý deň, pan Maksym</h3>";} 
            else {
              echo "<h3>Dobrý večer, pan Maksym</h3>";}
        ?>
        </div>
    </div>
</section>

<?php
  if (!function_exists('generateslides')) {
    function generateslides($dir) {
      $files = glob($dir . "/*.jpg");
      $json = file_get_contents("data/banner.json");
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
    }
?>
