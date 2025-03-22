<?php
include "./parts/header.php";
include "./parts/nav.php";
?>
  <main>
    <section class="banner">
      <div class="container text-white">
        <h1>Kontakt</h1>
      </div>
    </section>
    <section>
      <div class="container">
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-50"> 
          <h3>Máte otázky?</h3>
          <p>Incididunt mollit quis eiusmod tempor voluptate duis eu enim amet excepteur cupidatat magna velit. </p> 
          <p>Velit id ad laborum velit commodo.</p>
          <p>Consectetur laborum aliqua nulla anim cupidatat consectetur est veniam cupidatat.</p>
        </div>
        <div class="col-50 text-right">
        <h3>Napíšte nám</h3>
          <form id="contact" method="post" action="db/pracaformulara.php">
              <input type="text" placeholder="Vaše meno" name="meno" id="meno" required><br>
              <input type="email" placeholder="Váš email" name="email" id="email" required><br>
              <textarea placeholder="Vaša správa" name="sprava" id="sprava"></textarea><br>
              <input type="checkbox" name="suhlas" id="suhlas" required>
              <label for="suhlas"> Súhlasím so spracovaním osobných údajov.</label><br>
              <input type="submit" value="Odoslať">
          </form>
        </div>
      </div>
    </section>
  </main>

    <?php
    $include_path = "./parts/footer.php";
    if (!include($include_path)) {
        echo "Failed to include $include_path";
    }
    ?>

  <script src="js/menu.js"></script>
</body>
</html>