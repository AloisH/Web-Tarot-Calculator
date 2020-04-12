<?php

/* Load data */
$current_game = file_get_contents('./games/partie1.json');
$json_data = json_decode($current_game);

/* TEMPLATING */

/* Player / Score DISPLAY */
$player1_name = $json_data->{'player1'}->{'name'};
$player2_name = $json_data->{'player2'}->{'name'};
$player3_name = $json_data->{'player3'}->{'name'};
$player4_name = $json_data->{'player4'}->{'name'};
$player5_name = $json_data->{'player5'}->{'name'};

$player1_score = $json_data->{'player1'}->{'score'};
$player2_score = $json_data->{'player2'}->{'score'};
$player3_score = $json_data->{'player3'}->{'score'};
$player4_score = $json_data->{'player4'}->{'score'};
$player5_score = $json_data->{'player5'}->{'score'};

require_once("templates/html/index.php");
