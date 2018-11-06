<?php
use pocketmine\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
class Main extends implements Listener{

    public function onEnable(): void{
        $this->getServer->getPluginManager()->registerEvents(($this), $this);
        $this->getLogger->()->info("Plugin Enabled");
    }
}
