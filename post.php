<?php include"config.php";?>

<link href="../../css/styles.css" type="text/css" rel="stylesheet"/>
<?php
$postID=$_GET["id"];
if($postID=='null')
{
   die();
}
$catQuery="SELECT * FROM post where id=$postID";
$runCQ=mysqli_query($connect,$catQuery);
$row=mysqli_fetch_assoc($runCQ);


 include"head.php";?>

<title><?= $row['title']; ?></title>
<meta property="og:title" content="<?= $row['title']; ?>" />
<meta property="og:image" content="<?= $row['poster']; ?>" />
<title> <?= $row['title']; ?></title>
</head>
<?php include"header.php";?><a href="http://www.down2load2.ml/"> <img width="100%"
    height="100" src="../../image/logo.png"></img></a>
<div class='ti'><b> <?= $row['title']; ?></b>  </div>
<center>
    <img src="<?= $row["poster"]; ?>"   width='240' height='320' /></center>
    <div class='ti'>
    <b>Movie Information</b></div>
    <center>
<div class="Let"><b>Name : </b><?= $row['name']; ?></div>
<div class='Let'><b>Genre : </b><?= $row['genre']; ?></div>
<div class='Let'><b>Language : </b><?= $row['language']; ?></div>
<div class='Let'><b>Quality : </b><?= $row['quality']; ?></div>
<div class='Let'><b>Year : </b><?= $row['yeard']; ?></div>
<div class='Let'><b>Stars : </b><?= $row['star']; ?></div>
<div class='Let'><b>Story : </b><?= $row['story']; ?></div>
    </center>
<div class='ti'>Screenshots </div> 
<div id="secsec">
    <img src="<?= $row["ss1"]; ?>"   width='100%' height='100%' />
    <br/>
    <img src="<?= $row["ss2"]; ?>"   width='100%' height='100%' />
    <br/>
    <img src="<?= $row["ss3"]; ?>"   width='100%' height='100%' />
    <br/>
    <img src="<?= $row["ss4"]; ?>"   width='100%' height='100%' />
</div>
<div class='ti'> Download <?= $row["title"]; ?></div> 
<?= $ads["download"]; ?>
<div>
<?= $row["link"]; ?>
</div>

<?php include"tag.php";?>
<?php include"footer.php";?>
