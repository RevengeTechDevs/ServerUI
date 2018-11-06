<?php
namespace ServerUI;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
class Main extends PluginBase implements Listener{

    public function onEnable(): void{
        $this->getServer()->getPluginManager()->registerEvents(($this), $this);
        $this->getLogger()->info("Plugin Enabled");
    }

    public function onDisable(): void{
        $this->getServer()->getPluginManager()->registerEvents(($this), $this);
        $this->getLogger()->info("Plugin Disabled");
    }
}
