<?php
// database
const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'phpbbs';

class DB
{
    public function connect()
    {
        $dsn = 'mysql:dbname='. DB_NAME. ';host='. DB_HOST;

        try {
            $pdo = new PDO($dsn, DB_USER, DB_PASS);
            print('接続に成功しました。<br>');

            // データベースの接続解除
            $pdo = null;

        } catch (PDOException $e) {
            print('Error:' . $e->getMessage());
            die();
        }
    }

    public function query()
    {
        $dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST;

        try {
            $pdo = new PDO($dsn, DB_USER, DB_PASS);
            // (3) SQL作成
            $req = $pdo->prepare("SELECT * FROM users");

            // (5) SQL実行
            $res = $req->execute();

            // (6) 該当するデータを取得
            if ($res) {
                $data = $req->fetch();
                var_dump($data);
            }

            // データベースの接続解除
            $pdo = null;
        } catch (PDOException $e) {
            print('Error:' . $e->getMessage());
            die();
        }
    }

}





?>