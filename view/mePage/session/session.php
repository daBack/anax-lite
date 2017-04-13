<?php
$session = $app->session;

if (!$session->has("number")) {
    $session->set("number", 0);
} else {
    $session->get("number");
}

?>

<div class="session-page">
    <h2 class="session-h2">Session</h2>
    <div class="button-wrapper">
        <a class="session-a" href="increment">Increment</a>
        <a class="session-a" href="decrement">Decrement</a>
        <a class="session-a" href="Sstatus">Status</a>
        <a class="session-a" href="dump">Dump</a>
        <a class="session-a" href="destroy">Destroy</a>
    </div>
    <h3 class="session-h2">Number at hand: <?= $app->session->get("number"); ?></h3>
    <div class="button-wrapper">
        <a class="session-a" href="">Back to menu funkar ej än</a>
    </div>
</div>
