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

function authentification () : bool {
    if (session_status() ===  PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION["connecte"]);
}

function is_connected () : void {
    if (!(authentification())) {
        header('Location: /login.php');
        exit();
    }
}
function ranking (array $ranking) : array {
    foreach ($ranking as $k => $rank) {
        $ranking[$k]= (explode("\t", trim($rank)));
    }
    return $ranking;
}