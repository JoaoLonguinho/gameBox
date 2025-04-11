<?php

include_once "templates/header.php";
include_once "dao/gameDao.php";
include_once "model/Game.php";

if (isset($_GET["gameView"])) {
    $gameId = $_GET["gameView"];
}

$game = new Game();

$gameDao = new GameDao($conn);

$game = $gameDao->bringSelectedGame($gameId);

if($game->rating == null){
    $game->rating = 0;
}


?>

<section class="nav-header">
    <h1 class="main-title"><?= $game->title ?></h1>
    <a class="header-link" href="index.php">Voltar</a>
</section>
<section class="new-game-content">
    <div class="game-content">
        <div class="img-cover">
            <?php if(empty($game->image)): ?>
                <img src="img/games/placeholder.jpg" alt="">
            <?php else: ?>
                <img src="img/games/<?= $game->image; ?>" alt="">
            <?php endif; ?>
        </div>
        <div class="game-info">
            <h2><?= $game->title; ?></h2>
            <p><?= $game->description; ?></p>
                <?php if ($game->rating == 5): ?>
                    Atualmente o jogo está rankeado em <?= $game->rating ?> estrelas, sendo assim, é um jogo que podemos dizer que recomendamos bastante!
                </p>
            <?php elseif ($game->rating == 4): ?>
                Atualmente o jogo está rankeado em <?= $game->rating ?> estrelas, sendo assim, ainda é considerado um ótimo jogo!</p>
            <?php elseif ($game->rating == 3): ?>
                Atualmente o jogo está rankeado em <?= $game->rating ?> estrelas, sendo assim, podemos dizer que é um jogo mais ou menos</p>
            <?php elseif ($game->rating == 2): ?>
                Atualmente o jogo está rankeado em <?= $game->rating ?> estrelas, sendo assim, podemos dizer que não é um jogo muito bom </p>
            <?php elseif ($game->rating == 1): ?>
                Atualmente o jogo está rankeado em <?= $game->rating ?> estrelas, sendo assim, é um jogo ruim </p>
            <?php else: ?>
                Este jogo ainda não foi avaliado.
            <?php endif; ?>
        </div>
    </div>

</section>