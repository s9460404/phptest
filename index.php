<html>
<body>
<?php
header('content-type:image/jpg;');
$content=file_get_contents('https://tvr02.dimension.com.tw/OA/DCT_SHA.nsf/D3E48E98CC60150E482588240022770C/$FILE/0223r1.1.jpg');
echo $content;
?>
</body>
</html>