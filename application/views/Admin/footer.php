</div>
<!--======= #wrap =======-->
<!--======= script =======-->
<?php
if (!empty($script) AND is_array($script)) {
    foreach ($script as $v) {
        echo $v.chr(10);
    }
}
?>

</body>
</html>