<?php
/* Load data */
$current_game = file_get_contents('./games/partie1.json');
$json_data = json_decode($current_game);

/* Change score */
if (isset($_POST['update_score'])) {
    // Calculate score
    $score = 25;
    if ($_POST['score'] < 0) {
        $score = -25;
    }
    $score += $_POST['score'];
    $score *= intval($_POST['game_type']);

    // Update score
    if ($_POST['main_player'] == $_POST['second_player']) {
        $json_data->{'player' . $_POST['main_player']}->{'score'} += 4 * $score;
    } else {
        $json_data->{'player' . $_POST['main_player']}->{'score'} += 2 * $score;
        $json_data->{'player' . $_POST['second_player']}->{'score'} += $score;
    }

    for ($i = 1; $i < 6; $i++) {
        if ($i != intval($_POST['main_player']) and $i != intval($_POST['second_player'])) {
            $json_data->{'player' . strval($i)}->{'score'} -= $score;
        }
    }

    //  Save score
    $current_game = json_encode($json_data);
    file_put_contents('./games/partie1.json', $current_game);
}

/* Create a new game */
if (isset($_POST['new_game'])) {
    // Change name and score
    for ($i = 1; $i < 6; $i++) {
        // Reset score to 0
        $json_data->{'player' . strval($i)}->{'score'} = 0;

        // Set name to the correct name
        if (isset($_POST[strval($i)]) && $_POST[$i] != "") {
            $json_data->{'player' . strval($i)}->{'name'} = $_POST[strval($i)];
        } else {
            $json_data->{'player' . strval($i)}->{'name'} = "player" . strval($i);
        }
    }

    // Save game
    $current_game = json_encode($json_data);
    file_put_contents('./games/partie1.json', $current_game);
}

header("Location: index.php");
