<?php
    $products = ['デニム', 'Tシャツ', 'スカート',];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <!-- コロン「:」構文 
    PHP文法の中でHTMLを使いたい時 -->
    <?php foreach($products as $product): ?>
        <div>
            <h1>商品名</h1>
            <p><?php echo $product; ?></p>
        </div>
    <!-- endで終わる -->
    <?php endforeach; ?>
</body>
</html>