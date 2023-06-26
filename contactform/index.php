<?php
    session_start();
    
    if(isset($_POST["back"])){
    
    $name = $_SESSION['name'];
    $mail = $_SESSION['mail'];
    $comment = $_SESSION['comment'];
    
    }else{
        
        $name = "";
        $mail = "";
        $comment = "";
    }

?>
    
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>  
    <h1>お問合わせフォーム </h1>
    <form method="post" action="mail_confirm.php">     
        <div>
            <label>名前</label><br>
            <input type="text" class="text" size="35" name="name" value="<?=$name?>">
        </div>
        
        <div>
            <label>メールアドレス</label><br>
            <input type="text" class="text" size="35" name="mail" value="<?=$mail?>">            
        </div>
        
        <div>
            <label>年齢</label><br>
            <select class="dropdown" name="age">
             <option>選択してください</option>
                <?php
                for($myage = 18 ; $myage <= 65 ; $myage++){
                 echo "<option value='$myage'>".$myage."歳</option>";
                }
                ?>
            </select> 
        </div>
        
        <div>
            <label>コメント</label>
            <br>
            <textarea cols="35" rows="7" name="comment"><?=$comment?></textarea>
        </div>
        
        <div>
            <input type="submit" name="submit" class="submit" value="送信する">
        </div>
    </form>
</body>
</html>