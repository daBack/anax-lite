<?php
// $num = 0;
$num = $app->session->get("number");
$num++;
$app->session->set("number", $num);

$app->response->redirect("session");
exit;
?>
<p>
    Increments number by one!
</p>
