<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarot - V1.0</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
</head>

<style>
    body {
        margin-top: 50px;
    }
</style>

<body>
    <div class="ui one equal width grid">
        <!-- Partie Display -->
        <div class="column">
            <div class="ui red inverted segment">
                <h2 class="ui header centered">
                    <i class="book icon"></i>
                    Score Tarot
                </h2>
            </div>
        </div>

        <!-- DPlayer / Score Display -->
        <div class="equal width row">
            <div class="column">
                <div class="ui green inverted segment">
                    <h2 class="ui header centered">
                        <i class="chess rook icon"></i>
                        Joueurs
                    </h2>
                </div>
            </div>
            <div class="column">
                <div class="ui orange inverted segment">
                    <h2 class="ui header centered">
                        <i class="chart bar outline icon"></i>
                        Scores
                    </h2>
                </div>
            </div>
        </div>

        <!-- Player / Score Using PHP  -->
        <div class="equal width row">
            <div class="column">
                <div class="ui green segment">
                    <h2 class="ui header centered">
                        <?= $player1_name ?>
                    </h2>
                </div>
            </div>
            <div class="column">
                <div class="ui orange segment">
                    <h2 class="ui header centered">
                        <?= $player1_score ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="equal width row">
            <div class="column">
                <div class="ui green segment">
                    <h2 class="ui header centered">
                        <?= $player2_name ?>
                    </h2>
                </div>
            </div>
            <div class="column">
                <div class="ui orange segment">
                    <h2 class="ui header centered">
                        <?= $player2_score ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="equal width row">
            <div class="column">
                <div class="ui green segment">
                    <h2 class="ui header centered">
                        <?= $player3_name ?>
                    </h2>
                </div>
            </div>
            <div class="column">
                <div class="ui orange segment">
                    <h2 class="ui header centered">
                        <?= $player3_score ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="equal width row">
            <div class="column">
                <div class="ui green segment">
                    <h2 class="ui header centered">
                        <?= $player4_name ?>
                    </h2>
                </div>
            </div>
            <div class="column">
                <div class="ui orange segment">
                    <h2 class="ui header centered">
                        <?= $player4_score ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="equal width row">
            <div class="column">
                <div class="ui green segment">
                    <h2 class="ui header centered">
                        <?= $player5_name ?>
                    </h2>
                </div>
            </div>
            <div class="column">
                <div class="ui orange segment">
                    <h2 class="ui header centered">
                        <?= $player5_score ?>
                    </h2>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="ui purple inverted segment">
                <h2 class="ui header centered">
                    <i class="edit icon"></i>
                    Action
                </h2>
            </div>
        </div>

        <!-- Display available option -->

        <div class="equal width row">
            <div class="column">
                <form action="index.php" method="post" class="ui form">
                    <div class="field">
                        <label>Contrat</label>
                        <select name="game_type" id="" class="ui fluid dropdown">
                            <option value="1">Prise</option>
                            <option value="2">Garde</option>
                            <option value="4">Garde-sang</option>
                            <option value="6">Garde-contre</option>
                        </select>
                    </div>

                    <div class="two fields">
                        <div class="field">
                            <label>Qui ?</label>
                            <select name="main_player" id="" class="ui fluid dropdown">
                                <option value="1"><?= $player1_name ?></option>
                                <option value="2"><?= $player2_name ?></option>
                                <option value="3"><?= $player3_name ?></option>
                                <option value="4"><?= $player4_name ?></option>
                                <option value="5"><?= $player5_name ?></option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Avec ?</label>
                            <select name="second_player" id="" class="ui fluid dropdown">
                                <option value="1"><?= $player1_name ?></option>
                                <option value="2"><?= $player2_name ?></option>
                                <option value="3"><?= $player3_name ?></option>
                                <option value="4"><?= $player4_name ?></option>
                                <option value="5"><?= $player5_name ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="field">
                        <label>Score</label>
                        <input type="number" name="score" id="">
                    </div>

                    <div class="field">
                        <h2 class="ui header centered">
                            <input type="submit" class="ui button basic green huge" value="Valider" name="update_score">
                        </h2>
                    </div>
                </form>
            </div>
            <div class="column">
                <h2 class="ui header centered">
                    <!-- Change name -->
                    <form action="index.php" method="post" class="ui form">
                        <label>Choissier les noms des joueurs</label>
                        <div class="five fields">
                            <div class="field">
                                <input type="text" name="1" id="" placeholder="player1">
                            </div>
                            <div class="field">
                                <input type="text" name="2" id="" placeholder="player2">
                            </div>
                            <div class="field">
                                <input type="text" name="3" id="" placeholder="player3">
                            </div>
                            <div class="field">
                                <input type="text" name="4" id="" placeholder="player4">
                            </div>
                            <div class="field">
                                <input type="text" name="5" id="" placeholder="player5">
                            </div>
                        </div>
                        <div class="field">
                            <input class="ui button basic red huge" type="submit" value="Nouvelle partie" name='new_game'>
                        </div>
                    </form>

                    <!-- Create new game -->
                </h2>
            </div>
        </div>

    </div>

</body>

</html>