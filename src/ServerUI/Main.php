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
                        $this->getServer()->getCommandMap()->dispatch($player, "transferserver revengetech.tk");
                        break;
                    case 2:
                        $this->getServer()->getCommandMap()->dispatch($player, "fly");
                        break;
                    case 3:
                        $this->getServer()->getCommandMap()->dispatch($player, "feed");
                        break;
                    case 4:
                        $this->getServer()->getCommandMap()->dispatch($player, "heal");
                        break;
                    case 5:
                        $this->getServer()->getCommandMap()->dispatch($player, "break");
                        break;
                    case 6:
                        $this->getServer()->getCommandMap()->dispatch($player, "warps");
                        break;
                    case 7:
                        $this->getServer()->getCommandMap()->dispatch($player, "homes");
                        break;
                    case 8:
                        $this->getServer()->getCommandMap()->dispatch($player, "f home");
                        break;
                    case 9:
                        $this->getServer()->getCommandMap()->dispatch($player, "f info");
                        break;
                    case 10:
                        $this->getServer()->getCommandMap()->dispatch($player, "rename");
                        break;
                    case 11:
                        $this->getServer()->getCommandMap()->dispatch($player, "setlore");
                        break;
                    case 12:
                        $this->getServer()->getCommandMap()->dispatch($player, "gmc");
                        break;
                    case 13:
                        $this->getServer()->getCommandMap()->dispatch($player, "gmsp");
                        break;
                    case 14:
                        $this->getServer()->getCommandMap()->dispatch($player, "gma");
                        break;
                    case 15:
                        $this->getServer()->getCommandMap()->dispatch($player, "gms");
                        break;
                    case 16:
                        $this->getServer()->getCommandMap()->dispatch($player, "list");
                        break;
                    case 17:
                        $this->getServer()->getCommandMap()->dispatch($player, "warp pvp");
                        break;
                    case 18:
                        $this->getServer()->getCommandMap()->dispatch($player, "fix all");
                        break;
                    case 19:
                        $this->getServer()->getCommandMap()->dispatch($player, "fix hand");
                        break;
                    case 20:
                        $this->getServer()->getCommandMap()->dispatch($player, "mymoney");
                        break;
                    case 21:
                        $this->getServer()->getCommandMap()->dispatch($player, "help");
                        break;
                    case 22:
                        $this->getServer()->getCommandMap()->dispatch($player, "plugins");
                        break;
                    case 23:
                        $this->getServer()->getCommandMap()->dispatch($player, "spawn");
                        break;
                    case 24:
                        $this->getServer()->getCommandMap()->dispatch($player, "hub");
                        break;
                    case 25:
                        $this->getServer()->getCommandMap()->dispatch($player, "ce");
                        break;
                    case 26:
                        $this->getServer()->getCommandMap()->dispatch($player, "ban");
                        break;
                    case 27:
                        $this->getServer()->getCommandMap()->dispatch($player, "banlist");
                        break;
                    case 28:
                        $this->getServer()->getCommandMap()->dispatch($player, "kit");
                        break;
                    case 29:
                        $this->getServer()->getCommandMap()->dispatch($player, "pardon");
                        break;
                    case 30:
                        $this->getServer()->getCommandMap()->dispatch($player, "kits");
                        break;
                }
            });
            $form->setContent("RevengeTech ServerUI");
            $form->addButton("RevengeTech Server");
            $form->addButton("fly");
            $form->addButton("feed");
            $form->addButton("heal");
            $form->addButton("break");
            $form->addButton("warp list");
            $form->addButton("homes list");
            $form->addButton("faction base");
            $form->addButton("faction info");
            $form->addButton("rename");
            $form->addButton("setlore");
            $form->addButton("gamemode creative");
            $form->addButton("gamemode spectator");
            $form->addButton("gamemode adventure");
            $form->addButton("gamemode survival");
            $form->addButton("player list");
            $form->addButton("pvp");
            $form->addButton("fix all");
            $form->addButton("fix hand");
            $form->addButton("money");
            $form->addButton("help");
            $form->addButton("plugins");
            $form->addButton("spawn");
            $form->addButton("hub");
            $form->addButton("CustomEnchants");
            $form->addButton("ban");
            $form->addButton("banlist");
            $form->addButton("kit");
            $form->addButton("pardon");
            $form->addButton("kits");
            $form->sendToPlayer($sender);
        }
        return true;
    }
}
