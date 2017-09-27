<html>
    <head>
        <meta charset="UTF-8">
        <title>Arrays</title>
        <style>body {font-size: 20px; background-color: #000000; color: #00FF00;font-variant: small-caps;}</style>
    </head>
    <body>
        <?php
        $code = []; // empty array
        $code[] = 'I'; // added item
        $code[] = 'hate';
        $code[] = 'coding';
        print_r($code);
        echo '<br />';
        $code[1] = 'love'; //it changes the second item
        print_r($code);
        echo '<br />';
        echo (implode(',',$code));
        ?>
    </body>
</html>