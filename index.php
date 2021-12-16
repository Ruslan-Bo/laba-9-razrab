<form action="" method="post">
    <input type="text" name="item1" placeholder="Введите x">
    <input type="text" name="item2" placeholder="Введите n шагов">
    <input type="submit" name="buttom" value="Посчитать">
</form>

<?php
    if (isset($_POST['buttom'])) {
        $x = $_POST['item1'];
        $n = $_POST['item2'];
        $sum = 0;

        for($i = 0; $i < $n; $i++){
            $p = ($x**((2*$i)+1))/((2*$i)+1);
            $sum = $sum + $p;
        }

        echo $sum;
        }
?>