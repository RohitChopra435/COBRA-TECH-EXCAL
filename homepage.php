<?php include "header.php"; ?>
<?php session_start(); ?>
<?php
if (isset($_SESSION['admin_name']))
  include "admin_navigation.php";
else if (isset($_SESSION['user_name']))
  include "user_navigation.php";
else
  include "main_navigation.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="/dist/output.css" rel="stylesheet">

  <!-- footer -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/styles.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- <link href="css/sb-admin.css" rel="stylesheet"> -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/summernote.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">

            <a href="medicine.php?m_cat=Antibiotics&p_id=3"><img style="height: 225px; width: 360px;" src="images/antibiotic.jpg" alt="image"></a>

            <center style="font-weight: bold;">Antibiotic</center>
            <div class="card-body">
              <p class="card-text">An antibiotic is a type of antimicrobial substance active against bacteria.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://en.wikipedia.org/wiki/Antibiotic">Read more</a></button>

                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">

            <a href="medicine.php?m_cat=Antiseptic&p_id=3"><img style="height: 225px; width: 360px;" src="images/antiseptic.jpg" alt="image"></a>

            <center style="font-weight: bold;">Antiseptic</center>
            <div class="card-body">
              <p class="card-text"> Antiseptics are generally distinguished from antibiotics by the latter's ability ....</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://en.wikipedia.org/wiki/Antiseptic">Read more</a></button>

                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">

            <a href="medicine.php?m_cat=Antipyrtics&p_id=3"><img style="height: 225px; width: 360px;" src="images/antipyrtic.jpg" alt="image"></a>

            <center style="font-weight: bold;">Antipyretics</center>
            <div class="card-body">
              <p class="card-text"> Antipyretics cause the hypothalamus to override a prostaglandin-induced...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://en.wikipedia.org/wiki/Antipyretic">Read more</a></button>

                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">

            <a href="medicine.php?m_cat=Mood_stabilizers&p_id=3"> <img style="height: 225px; width: 360px;" src="images/mood_stabilizers.jpg" alt="image"></a>

            <center style="font-weight: bold;">Mood stabilizers</center>
            <div class="card-body">
              <p class="card-text">A mood stabilizer is a psychiatric medication used to treat mood disorders characterized by intense...</p>

              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://en.wikipedia.org/wiki/Mood_stabilizer">Read more</a></button>

                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">

            <a href="medicine.php?m_cat=Stimulant&p_id=3"> <img style="height: 225px; width: 360px;" src="images/stimulant.jpg" alt="image"></a>

            <center style="font-weight: bold;">Stimulant</center>
            <div class="card-body">
              <p class="card-text">Stimulants (also often referred to as psychostimulants or colloquially as uppers) is an overarching ....</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://en.wikipedia.org/wiki/Stimulant">Read more</a></button>

                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">

            <a href="medicine.php?m_cat=Analgesic&p_id=3"><img style="height: 225px; width: 360px;" src="images/Analgesic.jpg" alt="image"></a>

            <center style="font-weight: bold;">Analgesic</center>
            <div class="card-body">
              <p class="card-text">An analgesic drug, also called simply an analgesic , analgaesic, pain reliever, or painkiller...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="https://en.wikipedia.org/wiki/Analgesic">Read more</a></button>

                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php include "footer.php"; ?>