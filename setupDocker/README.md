# youtube講師 - 上州システム事務所【PHP超入門】ソースコード


![【PHP超入門】Docker WEBの使い方](https://user-images.githubusercontent.com/84372249/127011970-93df52dc-461a-471c-825c-05f9b3276f77.png)


## 概要
Dockerにおける「webサーバーの使い方」の解説となります。


## 利用フォルダ
[setupDocker](https://github.com/y-oota-joshu/php-beginner-code/tree/main/setupDocker) の階層にて動画のコード参照が可能です。


## 1. 必要なソフトのインストール
[Docker](https://hub.docker.com/editions/community/docker-ce-desktop-windows/) や [WSL2](https://docs.microsoft.com/ja-jp/windows/wsl/install-win10) をインストールします。


## 1-1. Dockerのインストール
[こちらのサイト](https://hub.docker.com/editions/community/docker-ce-desktop-windows/) からDockerをダウンロードしてインストールします。


## 1-2. DSL2のインストール
[こちらのサイト](https://docs.microsoft.com/ja-jp/windows/wsl/install-win10) からWSL2をダウンロードしてインストールします。


## 2. Docker起動
コマンドプロンプトを開き、下記コマンドを実行するとDockerが実行されます。
```
docker run -p 80:80 -v ウェブページとしたいフォルダ --name php -d php:5.6-apache
```
