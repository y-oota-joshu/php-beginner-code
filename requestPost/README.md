# youtube講師 - 上州システム事務所【PHP超入門】ソースコード


![【PHP超入門】POSTリクエストの使い方](https://user-images.githubusercontent.com/84372249/127002732-a48f8c54-a1fb-447d-8b42-8a6a90e71a81.jpg)


## 概要
PHPにおける「POSTリクエストの使い方」の解説となります。


## 利用フォルダ
[requestPost](https://github.com/y-oota-joshu/php-beginner-code/tree/main/requestPost) の階層にて動画のコード参照が可能です。


## 1. 入口ページの作成
[index.html](https://github.com/y-oota-joshu/php-beginner-code/blob/main/requestPost/index.html) を入口ページとして作成します。


## 1-1. head
「head」に「UTF-8」の文字コードを利用するという設定を記述します。
```
  <head>
    <meta http-equiv="content-type" charset="UTF-8" />
  </head>
```


## 1-2. form
* 「action」を「postsample.php」と記載し、ポストデータの送信先を設定します。
* 「method」を「post」と記載し、送信するデータの種類を設定します。
* 「input name」を「nicname」と記載し、送信するデータの名前を設定します。
```
    <form action="postsample.php" method="post">
      <div>
        <label for="nicname">POST送信する「nicname」を入力してください</label>
        <input name="nicname" id="nicname" />
      </div>
      <div>
        <button>送信</button>
      </div>
    </form>
```
* ※ 「id="nicname"」は「label for="nicname"」とラベルの設定に利用します。
* ※ 「button」はボタンを押したらポストデータが送信されます。


## 2. POSTデータ受け取りページの作成
[postsample.php](https://github.com/y-oota-joshu/php-beginner-code/blob/main/requestPost/postsample.php) をPOSTデータ受け取りページとして作成します。
```
    送られた POSTの「nicname」は <?php echo $_POST["nicname"]; ?> です。

    <?php
    // 動画では、下記のように記載しています。
    /*
      echo "送られた POSTの「nicname」は ". $_POST["nicname"]. " です。";
    */
    ?>
```
* ※ 「//」を利用することで一行コメントアウトします。
* ※ 「/\*」～「\*/」を利用することで複数行コメントアウトします。
