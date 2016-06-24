<?php
$url=yii::$app->urlManager->createABsoluteUrl("test/index");
?>
<a href="<?=$url?>">ไปหน้า index</a> 

<br>

 <?php
$url2=yii::$app->urlManager->createABsoluteUrl(["test/test3",'sname'=>"panida",'fname'=>"yaneepisit"]);
?>
<a href="<?=$url2?>">ไปหน้า test3</a> 
 

