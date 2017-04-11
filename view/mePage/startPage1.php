<?php
$urlHome = $app->url->create("home");
$urlAbout = $app->url->create("about");
$urlReport = $app->url->create("report");
?>
<main>
    <div class="wrapper">
        <nav>
            <ul class="nav-ul">
                <li class="nav-li"><a href="<?= $urlHome ?>">Home</a></li>
                <li class="nav-li"><a href="<?= $urlAbout ?>">About</a></li>
                <li class="nav-li"><a href="<?= $urlReport ?>">Reports</a></li>
            </ul>
        </nav>
    </div>
</main>
</body>
