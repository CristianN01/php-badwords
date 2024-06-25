<?php
    $text = 'Tony Stark, who has inherited the defense contractor Stark Industries from his late father Howard Stark, is in war-torn Afghanistan with his friend and military liaison, Lieutenant Colonel James Rhodes, to demonstrate the new "Jericho" missile. After the demonstration, his convoy is ambushed and Stark is critically wounded by a missile used by the attackers—one of his companys ow.';
    $banword = $_GET['Bad'];
    $replace = str_replace($banword, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <main>
        <p>
            <?php echo $text ?>;
        </p>
        <h2>
            Paragrafo composto da : <?php echo strlen($text) ?> caratteri.
        </h2>

        <form action="./index.php" method="get">
            <input type="text" name="Bad" id="Bad">
            <button type="submit">
                CENSURA
            </button>
        </form>

        <p>
            <?php echo $replace ?>;
        </p>

        <h2>
            Paragrafo censurato composto da : <?php echo strlen($replace) ?> caratteri.
        </h2>
    </main>
</body>
</html>