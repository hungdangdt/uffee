</div>
<!--======= #wrap =======-->
<!--======= script =======-->
<script type='text/javascript' src='/public/admin/js/components.js'></script>
<script type='text/javascript' src='/public/admin/js/custom.js'></script>
<!--======= Page script =======-->
<?php
if (!empty($script) AND is_array($script)) {
    foreach ($script as $k=>$v) {
        if ($k != 0){
            echo chr(9);
        }
        echo "<script type='text/javascript' src='/public/admin/{$v}'></script>".chr(10);
    }
}
?>

</body>
</html>