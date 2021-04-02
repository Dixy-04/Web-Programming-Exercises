<html>
<head>Headings</head>
<body>

<?php

for($i=1 ; $i<=6; $i++){
	if ($i % 2 == 0) {
	echo "<h".$i."><font color='red'>Heading ".$i."</h".$i.">";
} else  {
	echo "<h".$i."><font color='black'>Heading ".$i."</h".$i.">";
}
}

?>
</body>
</html>
