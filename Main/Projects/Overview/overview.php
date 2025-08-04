<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../../../style.css" />
  <script defer src="script.js"></script>
</head>

<body>
  <!-- Container where banner.html will be loaded -->
  <div id="banner-container"></div>

  <!-- Category List Placeholder -->
  <div class="category-filter">
    <ul class="category-list" id="categoryList"></ul>
  </div>

  <!-- Blog Box Container -->
  <div class="box-wrap" id="boxWrap"></div>

  <script>
    fetch("../../banner.html")
      .then((res) => res.text())
      .then((data) => {
        document.getElementById("banner-container").innerHTML = data;
      })
      .catch((err) => console.error("Error loading banner:", err));
  </script>
</body>

</html>