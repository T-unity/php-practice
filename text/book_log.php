<?php

function createReview()
{
  echo '読書ログを登録してください' . PHP_EOL;
  echo '書籍名：';
  $title = trim(fgets(STDIN));
  echo '著者名：';
  $author = trim(fgets(STDIN));
  echo '読書状況（未読、読書中、読了）：';
  $status = trim(fgets(STDIN));
  echo '評価（5点満点の整数）：';
  $score = trim(fgets(STDIN));
  echo '感想：';
  $summary = trim(fgets(STDIN));

  echo '登録が完了しました' . PHP_EOL . PHP_EOL;
  return [
    'title' => $title,
    'author' => $author,
    'status' => $status,
    'score' => $score,
    'summary' => $summary,
  ];
}

// $reviews = [];

function listReview($reviews)
{
  echo '読書ログを表示します' . PHP_EOL;
  foreach ($reviews as $review) {
  echo '書籍名:' . $review['title'] . PHP_EOL;
  echo '著者名:' . $review['author'] . PHP_EOL;
  echo '読書状況:' . $review['status'] . PHP_EOL;
  echo '評価:' . $review['score'] . PHP_EOL;
  echo '感想:' . $review['summary'] . PHP_EOL;
  echo '----------' . PHP_EOL;
  }
}

while (true) {
  echo '読書ログを登録' . PHP_EOL;
  echo '読書ログを表示' . PHP_EOL;
  echo 'アプリケーションを終了' . PHP_EOL;
  echo '番号を選択してください(1,2,9)';
  $num = trim(fgets(STDIN));

  if ($num === '1') {
    $reviews[] = createReview();
  } elseif ($num === '2') {
    listReview($reviews);
  } elseif ($num === '9') {
    break;
  }
}

var_export($reviews);
