<?php

$errmsg = array();

if(!empty($_POST['submit'])){

if(empty($_POST['handlename'])){
    $errmsg[] = 'ハンドルネームを記入してください。';
}

if(empty($_POST['title'])){
    $errmsg[] = 'タイトルを記入してください。';
}

if(empty($_POST['comments'])){
    $errmsg[] = 'コメントがありません。';
}

}
    
?>


<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="style.css">
 <title>D.I.BLOG</title>
</head>
<body>
     <?php if(empty($errmsg)): ?>
       <?php  foreach($errmsg as $value): ?>
       <?php echo $value; ?><br>
       <?php endforeach; ?>
    <?php endif; ?>
    
    <button type="button" class="back_btn" onclick="location.href='http://localhost/diworks_keijiban/error.php'">戻る</button>
    
</body>
</html>