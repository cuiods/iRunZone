<h2>Test Message</h2>
<?php
if ($dataSet) {
    foreach ($dataSet as $dataItem) {
        echo $dataItem->birthday.'<br>';
    }
}
?>