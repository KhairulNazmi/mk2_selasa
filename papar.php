<!DOCTYPE html>
<html>
<head>
    <title>Cerita Saya</title>
</head>
<body>
    <?php

    $text=$_POST['input'];

    $wordcount=str_word_count($text);
    $alphabetcount=strlen($text);
    $reversed=strrev($text);
    ?>

    <p>Input: <?php echo $text; ?></p>
    <p>Mengandungi <?php echo $wordcount; ?> patah perkataan</p>
    <p>Mengandungi <?php echo $alphabetcount; ?> huruf</p>
    <p>terbalik: <?php echo $reversed; ?></p>

</body>
</html>