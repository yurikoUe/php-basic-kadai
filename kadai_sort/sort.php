<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 2方向ソート関数
        function sort_2way($array, $order)
        {
            if ($order === TRUE) {
                sort($array);   // 昇順
                echo "昇順ソート<br>";
            } else {
                rsort($array);  // 降順
                echo "降順ソート<br>";
            }

            foreach ($array as $value) {
                echo $value . "<br>";
            }

            echo "<br>";
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];

        // 関数呼び出し
        sort_2way($nums, TRUE);   // 昇順
        sort_2way($nums, FALSE);  // 降順
        ?>
    </p>
</body>

</html>