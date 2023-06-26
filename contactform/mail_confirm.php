<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">    
</head>

<body>
    <?php
    
    session_start();
    
    if(isset($_POST["submit"])){
    
    $_SESSION['name'] = $_POST["name"];
    $_SESSION['mail'] = $_POST["mail"];
    $_SESSION['age'] = $_POST["age"];
    $_SESSION['comment'] = $_POST["comment"];

    }
    
    $errmsg = "";
    
    if(($_POST['name']) === ""){
        $errmsg = $errmsg."<p>名前が入力されていません。</p>";
    }if(($_POST['mail']) === ""){
        $errmsg = $errmsg."<p>メールが入力されていません。</p>";
    }if(($_POST['age']) === "選択してください"){
        $errmsg = $errmsg."<p>年齢を選択してください。</p>";
    }if(($_POST['comment']) === ""){
        $errmsg = $errmsg."<p>コメントを記入してください。</p>";
    }
    
    if($errmsg != ""){
        
        echo "<h1>エラー</h1>";
        
        echo "<div class='confirm'>";
        
        echo $errmsg;
        
        echo "<form action='index.php' method='post'>";
        echo "<input type='hidden' value=".$_POST['name']." name='name'>";
        echo "<input type='hidden' value=".$_POST['mail']." name='mail'>";
        echo "<input type='hidden' value=".$_POST['age']." name='age'>";
        echo "<input type='hidden' value=".$_POST['comment']." name='comment'>";
        echo "<input type='submit' name='back' class='button1' value='戻る'>";
        echo "</form>";
            
        echo "</div>";
        
        
    } else {
    
    echo "<h1>お問い合わせ内容確認</h1>";
    
    echo "<div class='confirm'>";
    echo "<p>お問い合わせ内容はこちらでよろしいでしょうか？<br>よろしければ「送信する」ボタンを押してください。</p>";
        
    echo "<p>名前<br>";
    echo $_POST['name'];
    echo "</p>";
        
    echo "<p>メールアドレス<br>";
    echo $_POST['mail'];
    echo "</p>";
        
    echo "<p>年齢<br>";
    echo $_POST['age']."歳";
    echo "</p>";
        
    echo "<p>コメント<br>";
    echo $_POST['comment'];
    echo "</p>";
        
    echo "<form action='index.php' method='post'>";
    echo "<input type='submit' name='back' class='button1' value='戻って修正する'>";
    echo "<input type='hidden' value=".$_POST['name']." name='name'>";
    echo "<input type='hidden' value=".$_POST['mail']." name='mail'>";
    echo "<input type='hidden' value=".$_POST['age']." name='age'>";
    echo "<input type='hidden' value=".$_POST['comment']." name='comment'>";
    echo "</form>";
        
    echo "<form action='insert.php' method='post'>";
    echo "<input type='submit' class='button2' value='送信する'>";
    echo "<input type='hidden' value=".$_SESSION['name']." name='name'>";
    echo "<input type='hidden' value=".$_SESSION['mail']." name='mail'>";
    echo "<input type='hidden' value=".$_SESSION['age']." name='age'>";
    echo "<input type='hidden' value=".$_SESSION['comment']." name='comment'>";
    echo "</form>";
        
    echo "</div>";
        
    }

?>

</body>
</html>