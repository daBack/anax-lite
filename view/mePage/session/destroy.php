<?php
// $num = 0;
$app->session->destroy();

$app->response->redirect("dump");
exit;
?>
<p>
    Destroying the session.
</p>
