<?php
namespace ServerUI;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use jojoe77777\FormAPI;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\server\ServerCommandEvent;
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

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args):bool{
            if($cmd->getName() == "serverui"){
                if(!($sender instanceof Player)){
                    $sender->sendMessage("serverui by revengetechdevs", false);
                    return true;
                }
                $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
                $form = $api->createSimpleForm(function (Player $sender, $data){
                    $result = $data;
                    if ($result == null) {
                    }
                    switch ($result) {
                        case 0:
                            $sender->sendMessage("revengetchdevs serverui");
                            break;
                        case 1:
                            $this->getServer()->getCommandMap()->dispatch($player, "fly");
                            break;
                    }
                });
                $form->setContent("revengetech serverui");
                $form->addButton("Fly");
                $form->sendToPlayer($sender);
            }
        return true;
    }
}
