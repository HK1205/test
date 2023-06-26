<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <link rel="stylesheet" type="text/css" href="style.css">
 <title>D.I.BLOG</title>
</head>
<body>
    
<?php
    
mb_internal_encoding("utf8");
    
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$stmt = $pdo->query("select * from diworks_keijiban");

?>
       
    <header>
        <img src="./picture/diblog_logo.jpg" width=15% height=15%>
        <div class="navi-bar">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li>登録フォーム</li>
                <li>お問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>
    </header>
<main>
     <div class="main-container">
           <div class="left">
               <div class="headline">プログラミングに役立つ掲示板</div>
               <form method="post" action="insert.php">
               <p>入力フォーム</p>
                   <div>
                   <label>ハンドルネーム<br></label>
                   <input type="text" class="text" name="handlename" size="40">
                   </div>
                   <br>
                   
                   <div>
                   <label>タイトル<br></label>
                   <input type="text" class="text" name="title" size="40">
                   </div>
                   <br>
                   
                   <div>
                   <label>コメント<br></label>
                   <textarea rows="7" style="width:60%" class="text" name="comments"></textarea>
                   </div>
                   <input type="submit" name="submit" class="submit" value="投稿する"> 
               </form>
               
<?php
        while($row = $stmt->fetch()){        
           echo "<div class='commentsection'>";
             echo  "<h3>".$row['title']."</h3>";
                 echo "<div class='comments'>";
                   echo $row['comments'];
                 echo  "</div>";
               echo "<div class='handlename'>posted by ".$row['handlename']."</div>";         
            echo "</div>";
        }
?>      
               
               
               
            </div>
            <div class="right">
                <div id="hottopic">
                    <p class="menu">人気の記事</p>
                     <ul>
                         <li>PHPオススメ本</li>
                         <li>PHP MyAdminの使い方</li>
                         <li>いま人気のエディタTops</li>
                         <li>HTMLの基本</li>
                    </ul>
                    <p class="menu">オススメリンク</p>
                     <ul>
                         <li>ディーアイワークス株式会社</li>
                         <li>XAMPPのダウンロード</li>
                         <li>Eclipseのダウンロード</li>
                         <li>Braketsのダウンロード</li>
                     </ul>
                    <p class="menu">カテゴリ</p>
                     <ul>
                         <li>HTML</li>
                         <li>PHP</li>
                         <li>MySQL</li>
                         <li>JavaScript</li>
                    </ul>           
                </div>
            </div>
        </div>
</main>
    <footer>
        Copyright D.I.works| D.I.Blog is the one which provides A to Z about programming
    </footer>  
</body>
</html>