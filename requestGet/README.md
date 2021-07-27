[Home](https://github.com/y-oota-joshu/php-beginner-code/wiki)


# youtube講師 - 上州システム事務所【PHP超入門】ソースコード


![【PHP超入門】GETリクエストの使い方](https://user-images.githubusercontent.com/84372249/127012354-984541e0-c540-4fb7-a899-e7d5665ca08e.jpg)


## 概要
PHPにおける「GETリクエストの使い方」の解説となります。


## 利用フォルダ
[requestGet](https://github.com/y-oota-joshu/php-beginner-code/tree/main/requestGet) の階層にて動画のコード参照が可能です。


## 1. GETデータ受け取りページの作成
[index.php](https://github.com/y-oota-joshu/php-beginner-code/blob/main/requestGet/index.php) をGETデータ受け取りページとして作成します。


## 1-1. head
「head」に「UTF-8」の文字コードを利用するという設定を記述します。
```
<head>
  <meta http-equiv="content-type" charset="UTF-8" />
</head>
```
## 1-2. if文
* 「if (empty($_GET["name"]))」でGETデータ「name」が空の場合には、「取得する情報はございません」と出力されるように記述します。
* 「else」でGETデータが空でない場合には、「〇〇さんの情報を取得します。」と出力されるように記述します。
```
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
```
