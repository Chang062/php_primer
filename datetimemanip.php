<?php $title = 'Date Time Manipulation';
include 'include_require/header.php'; ?>
<h1>
    <?php echo $title ?>< /h1>
        <?php
        echo "<h1> DATE AND TIME MANIPULATION</H1>";
        $sysdate = getdate();
        echo "The System Date is: ";
        echo  $sysdate['mday'];
        echo '/' . $sysdate['mon'];
        echo '/' . $sysdate['year'] . "<br/>";
        echo '<br/>';
        echo "Today's Date: " . $sysdate['mday'] . '/' . $sysdate['mon'] . '/' . $sysdate['year'] . '<br/>';
        echo '<br/>';
        echo time() . '<br/>';

        echo '<br/>';
        print date("m/d/y G:i:s<br>", time()) . '<br/>';
        echo '<br/>';
        print "Today is ";
        print date("j  F Y, \a\\t g:i a", time());


        ?> <?php require 'include_require/footer.php'; ?>