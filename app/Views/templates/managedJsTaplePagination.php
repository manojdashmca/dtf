<?php
if(isset($jspagination)){
    $jspaginationarray = explode(',', $jspagination);
    if (in_array('divisionmastertable', $jspaginationarray)) {
        ?>
        <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">
    <?php
    }
}
