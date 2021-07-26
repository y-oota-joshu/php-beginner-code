<html>

<head>
  <meta http-equiv="content-type" charset="UTF-8" />
</head>

<body>
  <div>

    <?php if (empty($_GET["name"])) : ?>
      取得する情報はございません
    <?php else : ?>
      <?php echo $_GET["name"]; ?> さんの情報を取得します。
    <?php endif; ?>

    <?php
    // 動画では、下記のように記載しています。
    /*
    if (empty($_GET["name"])) {
      echo "取得する情報はございません";
    } else {
      echo $_GET["name"] . "さんの情報を取得します。";
    }
    */
    ?>

  </div>
</body>

</html>