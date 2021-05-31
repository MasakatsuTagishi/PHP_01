<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力画面</title>
</head>
<body>
    <h2>体温チェック</h2>
    <form action="kadai_create.php" method="POST">
      <a href="kadai_read.php">一覧画面</a>
      <div>
        日にち: <input type="date" name="deadline">
      </div>
      <div>
        出席番号：<select name="num" id="">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
      </div>
      <div>
        <tr><td>名前</td></tr>
        <input type="text" name="name">
      </div>
      体温：<select name="body" id="">
            <option value="平熱">平熱</option>
            <option value="微熱">微熱</option>
            <option value="熱">熱</option>
        </select>
      <div>
        <button>submit</button>
      </div>
  </form>
    
</body>
</html>