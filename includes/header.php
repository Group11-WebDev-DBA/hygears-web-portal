<?php
// Shared top of every page. Before including it, a page sets:
//   $pageTitle  = "News";      (shown in the browser tab)
//   $activePage = "news";      (highlights that link in the nav)
if (!isset($pageTitle)) { $pageTitle = "PUP Hygears"; }
if (!isset($activePage)) { $activePage = ""; }

function navLink($key, $href, $label, $activePage) {
  if ($key == $activePage) {
    echo "<li><a href='$href' aria-current='page'>$label</a></li>";
  } else {
    echo "<li><a href='$href'>$label</a></li>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($pageTitle); ?> | PUP Hygears</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header class="site-header">
    <a class="brand" href="index.php">
      <img src="assets/img/hygears-logo.png" alt="" width="36" height="36">
      <span>PUP Hygears</span>
    </a>
    <nav aria-label="Main">
      <ul>
        <?php
        navLink("home", "index.php", "Home", $activePage);
        navLink("news", "news.php", "News", $activePage);
        navLink("tools", "tools.php", "Tools", $activePage);
        navLink("track", "track.php", "Track request", $activePage);
        navLink("join", "join.php", "Join", $activePage);
        navLink("about", "about.php", "About", $activePage);
        ?>
      </ul>
    </nav>
  </header>
  <main class="container">
