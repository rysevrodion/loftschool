<?php
    const DRAWINGS = 80;
    const DRAWINGS_MARKERS = 23;
    const DRAWINGS_PENSILS = 40;
    $drawings_paint = DRAWINGS - DRAWINGS_MARKERS - DRAWINGS_PENSILS;
    echo "Всего на школьной выставке " . DRAWINGS . " рисунков. ";
    echo DRAWINGS_MARKERS . " из них выполнены фломастерами, " . DRAWINGS_PENSILS . " карандашами, а остальные - красками \n";
    echo "Значит красками выполнено " . DRAWINGS . "-" . DRAWINGS_MARKERS . "-" . DRAWINGS_PENSILS . "=" . $drawings_paint . " рисунков.";
?>