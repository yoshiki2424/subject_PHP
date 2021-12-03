<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subject</title>
</head>

<body>
  <?php

  $user_list = [
    'user1' => ['type' => '理系', 'english' => 70, 'math' => 78, 'science' => 82, 'japanese' => 57, 'social' => 74],
    'user2' => ['type' => '文系', 'english' => 68, 'math' => 81, 'science' => 81, 'japanese' => 60, 'social' => 78],
    'user3' => ['type' => '理系', 'english' => 63, 'math' => 76, 'science' => 55, 'japanese' => 80, 'social' => 75],
    'user4' => ['type' => '理系', 'english' => 90, 'math' => 100, 'science' => 96, 'japanese' => 10, 'social' => 10],
    'user5' => ['type' => '文系', 'english' => 88, 'math' => 78, 'science' => 81, 'japanese' => 97, 'social' => 93],
  ];

  $pass_people = 0;

  foreach ($user_list as $users => $user) {
    $type = $user['type'];
    $total_Score = $user['english'] + $user['math'] + $user['science'] + $user['japanese'] + $user['social'];
    $science_Score = $user['math'] + $user['science'];
    $social_Score = $user['japanese'] + $user['social'];
    if ($total_Score >= 350) {
      if ($type == "理系" && $science_Score >= 160) {
        echo "{$users}は「合格」です。";
        $pass_people++;
        echo "\n";
      } elseif ($type == "文系" && $social_Score >= 160) {
        echo "{$users}は「合格」です。";
        $pass_people++;
        echo "\n";
      } else {
        echo "{$users}は「不合格」です。";
        echo "\n";
      }
    } else {
      echo "{$users}は「不合格」です。";
      echo "\n";
    }
  }

  echo "合格者は{$pass_people}名です。";
  echo "\n";

  ?>
</body>

</html>