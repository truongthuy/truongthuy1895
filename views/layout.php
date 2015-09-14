<<!DOCTYPE html>
<html>
<head>
<title>Simple MVC</title>

<link rel="stylesheet" href="./styles/css/bootstrap.min.css">
<link rel="stylesheet" href="./styles/css/styles.css">
<script type="text/javascript" src="./styles/js/jquery.js"></script>

</head>
<body>
  <div class='container'>
    <div class='navbar navbar-inverse'>
      <div class='navbar-inner nav-collapse' style="height: auto;">
        <ul class="nav">
            <li class="active"><a href="index.php">Trang chủ</a></li>
        </ul>
      </div>
    </div>
    <div id='content' class='row-fluid'>
    <div class='span3 sidebar'>
        Nothing here
    </div>
      <div class='span6 main'>
        <?php include ROOT . DS . 'views' . DS . $template_file; ?>
      </div>
      <div class='span3 sidebar'>s
        <?php include ROOT . DS . 'views' . DS . 'blocks' . DS . 'sidebar.php'; ?>
      </div>
    </div>
  </div>
</body>
</html>