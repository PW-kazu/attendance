<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>attendance</title>
  <style>
    .top-section{
      background-color:white
    }
    .atte{
      color:black;
      display: inline;
      left: 100px;px
    }
    .home{
      color:black;
      right: 600px;
    }
    .date{
      color:black;
      right:700px
    }
    .logout{
      color:black;
      right: 800px;
    }
    .flex1{
      display:flex;
      justify-content:space-around;
    }
    .flex2{
      display:flex;
      justify-content:space-around;
    }
    main{
      background-color:#EEEEEE
    }
    button{
      background-color:white
    }
  </style>
</head>
<body>
<header>
  <div class="top-section">
    <p class="atte">Atte</p>
    <a class="home" href="">ホーム</a>
    <a class="date" href="">日付一覧</a>
    <a class="logout" href="">ログアウト</a>
</header>
<main class="main">
  <div class="flex1">
    <button>勤務開始</button>
    <button>勤務終了</button>
  </div>
  <div class="flex2">
    <button>休憩開始</button>
    <button>休憩終了</button>
  </div>
</main>
<footer></footer>
  </div>
</body>
</html>