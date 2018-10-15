<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
<?php include("inc/meta.inc.php"); ?>

<STYLE TYPE="text/css">
<!--  This is specific for the CG devotions
.style7 { font-size: 36px; }
.style8 { font-size: 36px; }
.style6 { font-size: 72px; }
-->
</STYLE>

    <title>Choice Gleanings</title>
</head>

<?php include("inc/header.inc.php");?>

<center><span class="boxText"><font size="6">Choice Gleanings</font></span><br />
<span class="boxTextLink"><font size="2">Published by <a href="http://www.gospelfolio.com" class="boxTextLink">Gospel Folio Press</a></font></span></center>

<?php      include("inc/textBox1.inc.php"); ?>
<!-- Include text here below -->

<Table>
<tr>

<?php
$date = getdate();
if (strlen($date['mon']) !== 2)
   {
   $date['mon'] = "0".$date['mon'];
   }

$cgfile = "http://www.choicegleanings.com/home.php";
$cg = fopen($cgfile, "r");

$start = "><p>DAILY";
$end = "</table>";
$flag = 0;

while (!feof($cg))
{
      $cgLine = fgets($cg, 1000);
      $cgLine = ltrim($cgLine);



               if (strncmp($cgLine, $end, 7) == 0)
                {
                  $flag = 0;
                }
               elseif ($flag == 1)                     // checks flag and prints
               {
                  print $cgLine;
               }
               else
               {

                if (strlen($cgLine) > 40)                    // make sure the string is long enough to split
                {
                $divLine = str_split($cgLine, 30);  // To split so comparison can be made

                 if (strncmp($divLine[1], $start, 9) == 0)    //sets flag is parameters are right
                 {
                        $flag = 1;
                        print $cgLine;
                 }
                }
               }

}
fclose($cg);

?>

<tr><td>
<span class="plainLink">
      <center><font size="2">Choice Gleanings is the property of Gospel Folio Press</font><br />
                     <font size="1">304 Killaly St W, Port Colborne, ON L3K 6A6, Canada<br />
                     Phone: 800-952-2382; 905-835-9166; fax: 905-834-0012<br />
                     E-Mail: <a href="mailto:info@gospelfolio.com" class="plainLink">info@gospelfolio.com</a>&nbsp;&nbsp;
                     Website: <a href="http://www.gospelfolio.com" class="plainLink">http://www.gospelfolio.com</a><br />
                     To learn more about the Choice Gleanings Devotional Calender, visit the website at <a href="HTTP://www.chioicegleanings.com" class="plainLink">www.choicegleanings.com</a>.
                     Used by permission</font></center>
</span>
</td></tr></table>
<?php include("inc/textBox2.inc.php");
      include("inc/footer.inc.php"); ?>

</body>
</html>