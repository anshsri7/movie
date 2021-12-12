<?php include"config.php";
$Query="SELECT *  FROM sitemap";
$result=mysqli_query($connect,$Query);
$mainurl="https://www.down2load2.ml/";
header("Content-Type:application/xml; charset=utf-8");
echo '<?xml version="1.0" encoding="UTF-8" ?>'.PHP_EOL;
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'.PHP_EOL;
echo '<url>'.PHP_EOL;
echo '<loc>'.$mainurl.'</loc>' .PHP_EOL;
echo '<lastmod>2021-11-17T14:11:26+00:00</lastmod>' .PHP_EOL;
echo '<priority>1.00</priority>'.PHP_EOL;
echo '</url>' .PHP_EOL;
while($row=mysqli_fetch_assoc($result))
{
  echo '<url>'.PHP_EOL;
  echo '<loc>'.$mainurl. $row["url"].'/</loc>'.PHP_EOL;
  echo '<lastmod>2021-11-17T14:11:26+00:00</lastmod>' .PHP_EOL;
  echo '<priority>1.00</priority>'.PHP_EOL;
  echo '</url>'.PHP_EOL;
}
echo '</urlset>'.PHP_EOL;
?>