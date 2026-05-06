<?php
spl_autoload_register(function ($class_name) {
    include 'classes/' . $class_name . '.php';
});

$game = new MusicDecorator(
    new HealthDecorator(
        new MapDecorator(
            new ProfileDecorator(
                new BasicGameStart()
            )
        )
    )
);
$game->start();
