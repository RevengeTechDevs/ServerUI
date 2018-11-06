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
                    $sender->sendMessage("ServerUI By RevengeTechDevs", false);
                    return true;
                }
                $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
                $form = $api->createSimpleForm(function (Player $sender, $data){
                    $result = $data;
                    if ($result == null) {
                    }
                    switch ($result) {
                        case 0:
                            $sender->sendMessage("RevengeTech ServerUI");
                            break;
                        case 1:
                            $this->getServer()->getCommandMap()->dispatch($player, "fly");
                            break;
                        case 2:
                            $this->getServer()->getCommandMap()->dispatch($player, "heal");
                            break;
                        case 3:
                            $this->getServer()->getCommandMap()->dispatch($player, "feed");
                            break;
                        case 4:
                            $this->getServer()->getCommandMap()->dispatch($player, "gmc");
                            break;
                        case 5:
                            $this->getServer()->getCommandMap()->dispatch($player, "gms");
                            break;
                        case 6:
                            $this->getServer()->getCommandMap()->dispatch($player, "gmsp");
                            break;
                        case 7:
                            $this->getServer()->getCommandMap()->dispatch($player, "gma");
                            break;
                        case 8:
                            $this->getServer()->getCommandMap()->dispatch($player, "fix all");
                            break;
                        case 9:
                            $this->getServer()->getCommandMap()->dispatch($player, "fix hand");
                            break;
                    }
                });
                $form->setContent("RevengeTech ServerUI");
                $form->addButton("fly");
                $form->addButton("heal");
                $form->addButton("feed");
                $form->addButton("gamemode creative");
                $form->addButton("gamemode survival");
                $form->addButton("gamemode spectator");
                $form->addButton("gamemode adventure");
                $form->addButton("fix all");
                $form->addButton("fix hand");
                $form->sendToPlayer($sender);
            }
        return true;
    }
}
