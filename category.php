<?php include "config.php"; ?>
<?php include "head.php"; include "header.php";
?><a href="http://www.down2load2.ml/"> <img width="100%"
height="100" src="../image/logo.png"></img></a>

<link href="../css/styles.css" type="text/css" rel="stylesheet"/>
</div>
<?php

$id=$_GET["id"];
    $query="SELECT * FROM category WHERE catid='$id' ";

    $sql=mysqli_query($connect, $query);

    $row=mysqli_fetch_assoc($sql);
    ?>
<div class="ti"><?= $row["catname"]?></div>

<title><?= $row["catname"]?></title>
<?php

$ide=$_GET["id"];
    $quer="SELECT * FROM post WHERE category='$ide' ORDER BY id,yeard DESC";

    $sqla=mysqli_query($connect, $quer);
    
    while($category=mysqli_fetch_array($sqla)){
        ?>
        <div class="fl"><a href="../<?=$category["id"]?>/<?=$category["category"]?>/<?=$category["alias"]?>"><div>
            <div><img src="<?=$category["poster"] ?>" width='80' height='130' /></div>
    <div><?=$category["title"] ?></div></div></a></div>
        <?php
    }
    
?>










<?php include"footer.php";?>

