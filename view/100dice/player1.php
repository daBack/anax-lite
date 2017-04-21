<?php
$session = $app->session;
if (!$session->has("class")) {
    $session->set("class", $app->dice);
}
$sessionClass = $session->get("class");
if (isset($_POST['roll'])) {
    $session->set("roll", $_POST['roll']);
    $session->set("saver", $_POST['saver']);
    // $dice->tempPlayer = $_POST['roll'];
    // $dice->player = $_POST['saver'];
    // $dice->diceCheck();
    $sessionClass->tempPlayer = $session->get("roll");
    $sessionClass->player = $session->get("saver");
    $sessionClass->diceCheck();
} else if (isset($_POST['save'])) {
    $session->set("save", $_POST['save']);
    $session->set("saver", $_POST['saver']);
    $sessionClass->tempPlayer = $session->get("save");
    $sessionClass->player = $session->get("saver");
    // $dice->tempPlayer = $_POST['save'];
    // $dice->player = $_POST['saver'];
    // $dice->save();
    // $dice->win();
    $sessionClass->save();
    $sessionClass->win();
} else if (isset($_post['destroy'])) {
    // $dice->reset();
    $sessionClass->reset();
}
?>
<div class="diceGame">
    <form method="post">
        <input type="hidden" name="roll" value="<?= $sessionClass->tempPlayer; ?>">
        <input type="hidden" name="saver" value="<?= $sessionClass->player; ?>">
        <input type="submit" value="Roll!">
    </form>
    <form method="post">
        <input type="hidden" name="save" value="<?= $sessionClass->tempPlayer; ?>">
        <input type="hidden" name="saver" value="<?= $sessionClass->player; ?>">
        <input type="submit" value="Save!">
    </form>
    <form method="post">
        <input type="submit" name="destroy" value="Reset Game">
    </form>
    <div>
        <p class="para">Rolled number: <?= $sessionClass->diceValue; ?></p>
        <p class="para">Your current score: <?= $sessionClass->tempPlayer; ?></p>
        <p class="para">Your Total score: <?= $sessionClass->player; ?></p>
    </div>
    <p class="para"><?= $sessionClass->message; ?></p>
</div>
<?php
