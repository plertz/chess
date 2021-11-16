<?php
header("Cache-Control: no-cache");
header("Content-Type: text/event-stream");

$data = "hello";

while (true) {
    echo "data: " . json_encode($data) . "\n\n";
    sleep(1);

    ob_end_flush();
    flush();

    if (connection_aborted()) {
        break;
    }
}
?>