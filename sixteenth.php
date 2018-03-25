<?php
$color = array('white', 'green', 'red');
foreach ($color as $c)
{
echo "$c, ";
}
sort($color);
echo "<ul>";            //<ul> tag defines an unordered (bulleted) list
foreach ($color as $y)
{
echo "<li>$y</li>";             //Use the <ul> tag together with the <li> tag to create unordered lists.
}
echo "</ul>";
?>