</div>
<!--======= #wrap =======-->
<!--======= script =======-->
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<?php
if (!empty($script) AND is_array($script)) {
    foreach ($script as $v) {
        echo $v . '<br/>';
    }
}
?>

</body>
</html>