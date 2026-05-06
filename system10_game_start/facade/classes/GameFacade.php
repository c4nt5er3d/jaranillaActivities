<?php
class GameFacade {
    private ProfileLoader $profile;
    private MapLoader $map;
    private HealthManager $health;
    private MusicPlayer $music;
    private GameStatus $status;

    public function __construct() {
        $this->profile = new ProfileLoader();
        $this->map = new MapLoader();
        $this->health = new HealthManager();
        $this->music = new MusicPlayer();
        $this->status = new GameStatus();
    }

    public function startGame(): void {
        echo "Initiating Game Start Sequence..." . PHP_EOL;
        $this->profile->load();
        $this->map->load();
        $this->health->setHealth();
        $this->music->play();
        $this->status->display();
    }
}
