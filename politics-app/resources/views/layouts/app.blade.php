<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="政治に興味を持つきっかけを作るアプリ">
  <title>政治に興味を持つきっかけを作るアプリ</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" media="all" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <nav id="mainnav">
    <p id="menuWrap"><a id="menu"><span id="menuBtn"></span></a></p>
    <div class="panel">
      <ul>
        <li><a href="#sec01">TOP</a></li>
        <li><a href="#sec02">MESSAGE</a></li>
        <li><a href="#sec03">SERVICE</a></li>
        <li><a href="#sec04">STORY</a></li>
        <li><a href="#sec05">PROFILE</a></li>
      </ul>
    </div>
  </nav>
  @yield('content')
  <!-- // PROFILE -->
  <footer id="footer">
    政治に興味を持つきっかけを作るアプリ
  </footer>
  @yield('script')
</body>
</html>