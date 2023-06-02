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

function hour_minute (float $time) : string {

    $min_sec = explode('.', $time);
    $hour= intdiv($min_sec[0], 60);
    $minute = fmod($min_sec[0], 60);
    
    if (empty($min_sec[1])) {
        $second = '00'; 
    }
    else {
        $second = $min_sec[1];
    }

    if ($hour === 0) {
        return "$minute min $second";
    }
    else {
        return "$hour h $minute min $second";
    }
}

function ranking_table (int $k, array $rank, string $current_team) : string {
    
    $team_rank = $k + 1;
    $team_name = $rank[0];
    $team_time = hour_minute($rank[2]);

    if ($team_name === $current_team) {
        $html = '<tr class="current"><td>'. $team_rank .'</td><td>' . $team_name . '</td><td>' . $team_time . '</td></tr>';  
    }
    
    else {
        switch ($team_rank):
            case 1:
                $html = '<tr class="first"><td>'. $team_rank .'</td><td>' . $team_name . '</td><td>' . $team_time . '</td></tr>';
                break;
            case 2:
                $html = '<tr class="second"><td>'. $team_rank .'</td><td>' . $team_name . '</td><td>' . $team_time . '</td></tr>';
                break;
            case 3:
                $html = '<tr class="third"><td>'. $team_rank .'</td><td>' . $team_name . '</td><td>' . $team_time . '</td></tr>';
                break;
            default:
                $html = '<tr><td>'. $team_rank .'</td><td>' . $team_name . '</td><td>' . $team_time . '</td></tr>';
            endswitch;
    }

    return $html; 
}