<?php
function drawMenu(array $menu, bool $vertical = true)
{
    echo "<ul>";
    foreach ($menu as $link) {
        if ($vertical) {
            echo "<li>";
        } else {
            echo "<li style='display: inline; margin-right: 20px;'>";
        }
        echo "<a href='{$link['href']}'>{$link['link']}</a>";
        echo "</li>";
    }
    echo "</ul>";
}

function drawTable(int $cols, int $rows, string $color)
{
    echo "<table width='150' border='1'>";
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";
        for ($td = 1; $td <= $cols; $td++) {
            $cellColor = ($tr == 1 || $td == 1) ? $color : "white";
            $fontWeight = ($tr == 1) ? "bold" : "normal";
            echo "<td style='background-color: $cellColor; font-weight: $fontWeight;'>";
            echo ($tr * $td);
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}