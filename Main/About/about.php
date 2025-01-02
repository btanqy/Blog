<!DOCTYPE html>
<html>

<head>
  <?php include_once dirname(__DIR__, 2) . '/config.php'; ?>
  <!-- Link to fonts and icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;1,100&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Stylesheet css -->
  <style>
    <?php include ROOT . '/style.css'; ?>
  </style>
  <link rel="stylesheet" href="style.css" />
</head>


<body>
  <!-- Banner -->
  <?php include ROOT . '/Main/banner.php'; ?>


  <!-- Page starts here -->
  <div>
    <h1>About</h1>

    <body class="no-decoration">
      <p>
        Hi, I'm Brian Tan. I'm a 3rd year electrical engineering student from
        UCLA, and this website is a collage of projects and blogging material.
        You can find my projects on Github or under the Projects tab. My email
        is btanqy@gmail.com.<br />
        <br />
      </p>
      <div class="center-text">
        <a href="mailto: btanqy@gmail.com">
          <i class="fa-regular fa-envelope fa-5x icon-white"></i>
        </a>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="https://github.com/btanqy" target="_blank">
          <i class="fab fa-github fa-5x icon-white"></i>
        </a>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="https://www.linkedin.com/in/btanqy/" target="_blank">
          <i class="fab fa-linkedin fa-5x icon-white"></i>
        </a>
      </div>
    </body>
  </div>
</body>

</html>