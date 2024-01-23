<?php
        $UIDresult=$_POST["UIDresult"];
        $Write="<?php $" . "UIDresult='" . $UIDresult . "'; " . "echo $" . "UIDresult;" . " ?>";
        file_put_contents('uidContainer.php',$Write);
?>
