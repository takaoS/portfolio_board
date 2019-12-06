# Name

Portfolio Board

掲示板に記事を投稿できるアプリです。

# Features

以下が機能の一覧です。

    Person.index：
    このページです。このポートフォリオの説明と、ユーザ情報の一覧が表示されます。<br>
    また、ユーザIDを入力して、ユーザの検索ができます。<br>
    ヘッダーメニューの「Home」からアクセスできます。

    Person.add：
    ユーザの登録ができます。
    ヘッダーメニューの「Person Add」からアクセスできます。


    Board.index：
    掲示板です。ユーザが投稿した記事が一覧表示されます。
    記事のタイトルをクリックすると、その記事の内容を確認できます。
    ヘッダーメニューの「Board List」からアクセスできます。

    Board.add：
    掲示板に記事を投稿できます。
    ヘッダーメニューの「Board Add」からアクセスできます。

# Demo

AWSに乗せて公開したらURLを置く予定です。

# Requirement

* laravel 5.8
* PHP 7.3
* MySQL 5.7

# Installation

Laradockを用いたインストール方法を記載します。
流れとして、新規でプロジェクト（今回はportfolio_boardとする）を作成してから、このリモートリポジトリの内容を差分だけ取り込むようにします。

以下、 /* */ で囲ってある文はコメントアウトとして解釈してください。

また、DockerとGitはすでに用意してあるものとします。

* Laradockをクローンし、コンテナ立ち上げ → Workspaceコンテナに入る
```bash
$ git clone https://github.com/laradock/laradock.git
$ cd laradock
$ cp env-example .env
$ docker-compose up -d nginx mysql phpmyadmin
$ docker-compose exec workspace bash
```

* .envを編集してMySQLのバージョンを5.7に変更
```bash
MYSQL_VERSION = latest /* 変更前 */
MYSQL_VERSION = 5.7    /* 変更後 */
```

* Composerコマンドでプロジェクトの新規作成

```bash
$ composer create-project --prefer-dist laravel/laravel blog
```

* コンテナをexit

* /laradock/nginx/sites/ に移動し、default.confを書き換え

```bash
$ cp laravel.conf.example default.conf
```

* vimなどでdefault.confを以下のように編集し、docker-compose restartで再起動

```bash
root: /var/www/laravel/public;         /* 変更前 */
root: /var/www/portfolio_board/public; /* 変更後 */
```

* 今作成したプロジェクトへ移動し、リポジトリを新規作成

```bash
$ git config --global user.name "xxx"
$ git config --global user.email "xxx@gmail.com"
$ git init
initialized empty Git repository in /path/to/yourdirectory/.git
```

* リモートリポジトリの内容を、ローカルリポジトリに差分だけ持ってくる

```bash
$ git fetch --all
Fetching origin
$ git reset --hard origin/master
HEAD is now at xxx
$ git pull origin master   /* 成功したか確認 */
From https://hogehoge
* branch master -> FETCH_HEAD
Already up to date.
```

# Usage

上述したFeatureを参照のこと。

# Author

* 関口貴生
* 株式会社田中スポーツ設備
* Blog : https://takaolab.com/
* Twitter : https://twitter.com/takao_se
