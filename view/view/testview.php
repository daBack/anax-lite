<?php
//include __DIR__ . "/header.php";
$this->renderView("view/header", [
    "title" => $title,
]);
?>

<p>This is another test view.</p>

<p><?= $message ?></p>

<?php
//include __DIR__ . "/footer.php"
$this->renderView("view/footer", [
    "copyright" => $copyright,
]);
