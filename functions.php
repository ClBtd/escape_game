<?php 
function show_time (array $time) : string {
    if (empty($time)) {
        return "Fermé.";
    }
    return $current_time = "$time[0]h - $time[1]h."; 
}

function total_price (int $players, int $individual_price) : int {
    return $players * $individual_price;
}
