<?php
include_once dirname(__DIR__, levels: 3) . '/config.php';
ob_start();
include ROOT . '/Main/Blog/2025/1-24.php';
$bufferedContent = ob_get_clean();

function extractVariable($filePath, $variableName)
{
  $fileContent = file_get_contents($filePath);
  $pattern = '/\$' . preg_quote($variableName, '/') . '\s*=\s*["\'](.*?)["\'];/';
  if (preg_match($pattern, $fileContent, $matches)) {
    return $matches[1];
  }
  return null;
}

function getDateFromFile($file)
{
  $dateStr = extractVariable($file, 'date');
  return DateTime::createFromFormat('Y-m-d', $dateStr);
}

?>

<!DOCTYPE html>
<html>

<head>
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


  <?php
  $dir = dirname(__DIR__) . '/2025/';
  $files = glob($dir . '*.php');
  ?>

  <!-- Page starts here -->
  <div class="category-filter">
    <ul class="category-list">
      <?php
      $categories = [];
      foreach ($files as $file) {
        $category = extractVariable($file, "category");
        $subcategory = extractVariable($file, "subcategory");
        if ($category) {
          if (!isset($categories[$category])) {
            $categories[$category] = [];
          }
          if ($subcategory && !in_array($subcategory, $categories[$category])) {
            $categories[$category][] = $subcategory;
          }
        }
      }
      ksort($categories);
      foreach ($categories as $category => $subcategories) {
        echo '<li onclick="toggleSubcategories(this)">';
        echo '<span class="arrow">&#9654;</span>';
        echo '<a href="javascript:void(0);" onclick="filterByCategory(\'' . $category . '\')">' . $category . '</a>';
        if (!empty($subcategories)) {
          echo '<ul class="subcategory-list" style="display: none;">';
          sort($subcategories);
          foreach ($subcategories as $subcategory) {
            echo '<li><a href="javascript:void(0);" onclick="event.stopPropagation(); filterByCategory(\'' . $subcategory . '\')">' . $subcategory . '</a></li>';
          }
          echo '</ul>';
        }
        echo '</li>';
      }
      ?>
    </ul>
  </div>


  <div class="box-wrap">
    <?php
    usort($files, function ($a, $b) {
      $dateA = getDateFromFile($a);
      $dateB = getDateFromFile($b);
      return $dateB <=> $dateA;
    });

    foreach ($files as $file) {
      $date = extractVariable($file, 'date');
      $thumbnail = '../2025/' . extractVariable($file, 'thumbnail');
      $preview = extractVariable($file, 'preview');
      $title = basename($file, '.php');
      $category = extractVariable($file, 'category');
      $subcategory = extractVariable($file, 'subcategory'); // Ensure this line is present
      echo '<div class="box" data-category="' . $category . '" data-subcategory="' . $subcategory . '" onclick="location.href=\'../2025/' . $title . '.php\';" style="cursor: pointer; background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.8)), url(\'' . $thumbnail . '\'); background-size: cover; background-position: center;">'; // Ensure data-category and data-subcategory are set correctly
      echo '<div class="bottom-left">';
      echo '<h2>' . $title . '</h2>';
      echo '<p>' . $preview . '</p>';
      echo '</div>';
      echo '<div class="bottom-right">';
      echo '<h4>' . $date . '</h4>';
      echo '</div>';
      echo '</div>';
    }
    ?>
  </div>

  <script>
    function filterByCategory(category) {
      var boxes = document.getElementsByClassName('box');
      for (var i = 0; i < boxes.length; i++) {
        if (category === 'all' || boxes[i].getAttribute('data-category') === category || boxes[i].getAttribute('data-subcategory') === category) {
          boxes[i].style.display = 'block';
        } else {
          boxes[i].style.display = 'none';
        }
      }
    }

    function toggleSubcategories(element) {
      var subcategoryList = element.querySelector('.subcategory-list');
      var arrow = element.querySelector('.arrow');
      if (subcategoryList.style.display === 'block') {
        subcategoryList.style.display = 'none';
        arrow.classList.remove('down');
        filterByCategory('all'); // Show all categories when subcategories are collapsed
      } else {
        subcategoryList.style.display = 'block';
        arrow.classList.add('down');
        var category = element.querySelector('a').textContent;
        filterByCategory(category); // Filter by category when subcategories are expanded
      }
    }
  </script>

</html>