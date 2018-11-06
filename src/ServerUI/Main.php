<?php
namespace ServerUI;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use jojoe77777\FormAPI;
class Main extends PluginBase implements Listener{

    public function onEnable(): void{
        $this->getServer()->getPluginManager()->registerEvents(($this), $this);
        $this->getLogger()->info("Plugin Enabled");
    }

    public function onDisable(): void{
        $this->getServer()->getPluginManager()->registerEvents(($this), $this);
        $this->getLogger()->info("Plugin Disabled");
    }

    public function checkDepends(): void{
        $this->formapi = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        if(is_null($this->formapi)){
            $this->getLogger()->error("ServerUI Requires FormAPI To Work");
            $this->getPluginLoader()->disablePlugin($this);
        }
    }
}
