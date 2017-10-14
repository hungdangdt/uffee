</div>
<!--======= #wrap =======-->
<!--======= script =======-->
<script type="text/javascript" src="public/admin/js/components.js"></script>
<script type="text/javascript" src="public/admin/js/custom.js"></script>
<?php
if (!empty($script) AND is_array($script)) {
    foreach ($script as $v) {
        echo $v.chr(10);
    }
}
?>

</body>
</html>