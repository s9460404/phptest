<html>
<body>
<?php
header('content-type:image/jpg;');
$content=file_get_contents('test.jpg');
echo $content;
?>
</body>
</html>