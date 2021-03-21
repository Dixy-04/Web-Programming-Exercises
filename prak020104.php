<html>
<head>Headings</head>
<body>

<?php
$i = 1;

while ($i <= 6){
	if ($i % 2 == 0) {
	echo "<h".$i."><font color='red'>Heading ".$i."</h".$i.">";
} else  {
	echo "<h".$i."><font color='black'>Heading ".$i."</h".$i.">";
}
$i++;
}

?>
</body>
</html>