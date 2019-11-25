<?php
session_start();
$id = $_SESSION["id"];
?>
<html>
    <body>
        <p><?= $id ?> さんはログイしています</p>
    </body>
</html>