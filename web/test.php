<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$array = ['test' => 'test1', 'test2' => 'test2'];
?>
<script>
    let test;
    test = JSON.parse('<?=json_encode($array)?>');
    console.log(test)
</script>

</body>
</html>