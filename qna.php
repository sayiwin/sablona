<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moja stránka</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/accordion.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
      include "header.php";
    ?>
  <main>
    <section class="banner">
      <div class="container text-white">
        <h1>Q&A</h1>
      </div>
    </section>
    <section class="container">
      <div class="row">
        <div class="col-100 text-center">
          <p><strong><em>Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui. Mollit deserunt culpa incididunt laborum commodo in culpa.</em></strong></p>
        </div>
      </div>
    </section>
    <?php
      include "functions.php";
      insertQnA();
    ?>
    <?php
    require_once __DIR__ . '/classes/QnA.php';

    use sablona\classes\QnA;

    $qna = new QnA();
    $questions = $qna->getAllQuestions();

    echo "<pre>";
    // print_r($questions);
    echo "</pre>";
    ?>
  </div>
  </main>
  <?php
    include "footer.php";
  ?>
<script src="js/accordion.js"></script>
<script src="js/menu.js"></script>
</body>
</html>