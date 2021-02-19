<?php


$title = '';
$author = '';
$status = '';
$evaluation = '';
$impressions = '';

while (true) {
  echo '読書ログを登録' . PHP_EOL;
  echo '読書ログを表示' . PHP_EOL;
  echo 'アプリケーションを終了' . PHP_EOL;
  echo '番号を選択してください(1,2,9)';
  $num = trim(fgets(STDIN));

  if ($num === '1') {
    echo '読書ログを登録してください' . PHP_EOL;

    echo '書籍名：';
    $title = trim(fgets(STDIN));

    echo '著者名：';
    $author = trim(fgets(STDIN));

    echo '読書状況（未読、読書中、読了）：';
    $status = trim(fgets(STDIN));

    echo '評価（5点満点の整数）：';
    $evaluation = trim(fgets(STDIN));

    echo '感想：';
    $impressions = trim(fgets(STDIN));

    echo '登録が完了しました' . PHP_EOL . PHP_EOL;

  } elseif ($num === '2') {

    echo '読書ログを表示します' . PHP_EOL;
    echo '書籍名:' . $title . PHP_EOL;
    echo '著者名:' . $author . PHP_EOL;
    echo '読書状況:' . $status . PHP_EOL;
    echo '評価:' . $evaluation . PHP_EOL;
    echo '感想:' . $impressions . PHP_EOL;

  } elseif ($num === '9') {
    break;
  }
}
