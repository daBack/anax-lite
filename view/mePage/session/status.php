<div class="session-page">

<p class="margin">
<?php
echo "Session ID: " . session_id();
echo "<br><br>";
echo "Session GC: " . session_gc();
echo "<br><br>";
echo "Cache limiter: " . session_cache_limiter();
?>
</p>
<div class="button-wrapper">
    <a class="session-a" href="session">Back to Session</a>
</div>
</div>
