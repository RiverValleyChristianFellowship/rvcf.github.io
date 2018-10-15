<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
<head>
    <?php include("inc/meta.inc.php"); ?>
    <title>River Valley Christian Fellowship</title>
</head>

<!-- https://answers.squarespace.com/questions/54774/how-to-embed-a-google-calendar-in-a-responsive-way.html -->
 <style>
 @media (max-width: 649px) {
     .big-container {
         display: none;
     }
 }
 @media (min-width: 650px) {
     .small-container {
         display: none;
     }
 }
</style>
 
<?php include("inc/header.inc.php"); ?>
    <div class="plain">
        <span style="font-size: 1.2em;"><b>Sunday Schedule</b></span><br/>
        &nbsp;&nbsp;9:30 am - <b>Lord's Supper / Prayer</b><br />
        11:00 am - <b>Family Bible Hour</b><br />

        <i>Nursery care and Children's ministry are available.</i>
        <p>
        There is also a number of home Bible studies held throughout the week.  If you are interested in learning what the Bible is all about, feel free to <a href="contact.php" name="contact" onmouseover="window.status='contact.htm'; return true;" onmouseout="window.status=''; return true;"><i>contact us</i></a>.<br />
        </p>
        <?php include("inc/textBox2.inc.php"); ?>
        <div class="responsive-iframe-container big-container">
            <iframe src="https://calendar.google.com/calendar/embed?title=River%20Valley%20Christian%20Fellowship&amp;height=700&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=shnp3kkvmkgj4hjm1nme0pulhk%40group.calendar.google.com&amp;color=%2329527A&amp;ctz=America%2FChicago" style="border-width:0" width="100%" height="700" frameborder="0" scrolling="no"></iframe>
        </div>
        <div class="responsive-iframe-container small-container">
            <iframe src="https://calendar.google.com/calendar/embed?title=River%20Valley%20Christian%20Fellowship&amp;mode=AGENDA&amp;height=700&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=shnp3kkvmkgj4hjm1nme0pulhk%40group.calendar.google.com&amp;color=%2329527A&amp;ctz=America%2FChicago" style="border-width:0" width="100%" height="700" frameborder="0" scrolling="no"></iframe>
        </div>
      <?php include("inc/footer.inc.php"); ?>

</body>
</html>