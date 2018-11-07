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
        $this->getLogger()->info("Plugin Enabled By RevengeTechDevs Not Completed Use The Command By Doing /serverui In Game");
    }

    public function onDisable(): void{
        $this->getServer()->getPluginManager()->registerEvents(($this), $this);
        $this->getLogger()->info("Plugin Disabled By RevengeTechDevs Not Completed Use The Command By Doing /serverui In Game");
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
                        $sender->sendMessage("RevengeTech ServerUI Transfering...");
                        break;
                    case 2:
                        $this->getServer()->getCommandMap()->dispatch($player, "fly");
                        $sender->sendMessage("RevengeTech ServerUI Fly Command");
                        break;
                    case 3:
                        $this->getServer()->getCommandMap()->dispatch($player, "feed");
                        $sender->sendMessage("RevengeTech ServerUI Feed Command");
                        break;
                    case 4:
                        $this->getServer()->getCommandMap()->dispatch($player, "heal");
                        $sender->sendMessage("RevengeTech ServerUI Heal Command");
                        break;
                    case 5:
                        $this->getServer()->getCommandMap()->dispatch($player, "break");
                        $sender->sendMessage("RevengeTech ServerUI Break Command This Breaks The Block Your Looking At");
                        break;
                    case 6:
                        $this->getServer()->getCommandMap()->dispatch($player, "warps");
                        $sender->sendMessage("RevengeTech ServerUI List Serevrs Warps");
                        break;
                    case 7:
                        $this->getServer()->getCommandMap()->dispatch($player, "homes");
                        $sender->sendMessage("RevengeTech ServerUI List Homes");
                        break;
                    case 8:
                        $this->getServer()->getCommandMap()->dispatch($player, "f home");
                        $sender->sendMessage("RevengeTech ServerUI Teleports You To Your Faction Base");
                        break;
                    case 9:
                        $this->getServer()->getCommandMap()->dispatch($player, "f info");
                        $sender->sendMessage("RevengeTech ServerUI Shows Your Faction Info");
                        break;
                    case 10:
                        $this->getServer()->getCommandMap()->dispatch($player, "rename");
                        $sender->sendMessage("RevengeTech ServerUI Rename Command");
                        break;
                    case 11:
                        $this->getServer()->getCommandMap()->dispatch($player, "setlore");
                        $sender->sendMessage("RevengeTech ServerUI SetLore Command Change A Items Decription");
                        break;
                    case 12:
                        $this->getServer()->getCommandMap()->dispatch($player, "gmc");
                        $sender->sendMessage("RevengeTech ServerUI Changed Gamemode To Creative");
                        break;
                    case 13:
                        $this->getServer()->getCommandMap()->dispatch($player, "gmsp");
                        $sender->sendMessage("RevengeTech ServerUI Changed Gamemode To Spectator");
                        break;
                    case 14:
                        $this->getServer()->getCommandMap()->dispatch($player, "gma");
                        $sender->sendMessage("RevengeTech ServerUI Changed Gamemode To Adventure");
                        break;
                    case 15:
                        $this->getServer()->getCommandMap()->dispatch($player, "gms");
                        $sender->sendMessage("RevengeTech ServerUI Changed Gamemode To Survival");
                        break;
                    case 16:
                        $this->getServer()->getCommandMap()->dispatch($player, "list");
                        $sender->sendMessage("RevengeTech ServerUI Listing Players Thats On This Server");
                        break;
                    case 17:
                        $this->getServer()->getCommandMap()->dispatch($player, "warp pvp");
                        $sender->sendMessage("RevengeTech ServerUI Teleporting You To PvP");
                        break;
                    case 18:
                        $this->getServer()->getCommandMap()->dispatch($player, "fix all");
                        $sender->sendMessage("RevengeTech ServerUI Fixing All Your Items");
                        break;
                    case 19:
                        $this->getServer()->getCommandMap()->dispatch($player, "fix hand");

                        $sender->sendMessage("RevengeTech ServerUI Fixing The Item In Your Hand");
                        break;
                    case 20:
                        $this->getServer()->getCommandMap()->dispatch($player, "mymoney");
                        $sender->sendMessage("RevengeTech ServerUI Showing Your Balance");
                        break;
                    case 21:
                        $this->getServer()->getCommandMap()->dispatch($player, "help");
                        $sender->sendMessage("RevengeTech ServerUI Listing Help Menu");
                        break;
                    case 22:
                        $this->getServer()->getCommandMap()->dispatch($player, "plugins");
                        $sender->sendMessage("RevengeTech ServerUI Showing Your Servers Plugins");
                        break;
                    case 23:
                        $this->getServer()->getCommandMap()->dispatch($player, "spawn");
                        $sender->sendMessage("RevengeTech ServerUI Teleporting You To Spawn");
                        break;
                    case 24:
                        $this->getServer()->getCommandMap()->dispatch($player, "hub");
                        $sender->sendMessage("RevengeTech ServerUI Teleporting You To Server Hub");
                        break;
                    case 25:
                        $this->getServer()->getCommandMap()->dispatch($player, "ce");
                        $sender->sendMessage("RevengeTech ServerUI Custom Enchant Menu");
                        break;
                    case 26:
                        $this->getServer()->getCommandMap()->dispatch($player, "ban");
                        $sender->sendMessage("RevengeTech ServerUI Ban Command");
                        break;
                    case 27:
                        $this->getServer()->getCommandMap()->dispatch($player, "banlist");
                        $sender->sendMessage("RevengeTech ServerUI Ban List");
                        break;
                    case 28:
                        $this->getServer()->getCommandMap()->dispatch($player, "kit");
                        $sender->sendMessage("RevengeTech ServerUI Kit Command");
                        break;
                    case 29:
                        $this->getServer()->getCommandMap()->dispatch($player, "pardon");
                        $sender->sendMessage("RevengeTech ServerUI Pardon");
                        break;
                    case 30:
                        $this->getServer()->getCommandMap()->dispatch($player, "kits");
                        $sender->sendMessage("RevengeTech ServerUI Kits");
                        break;
                    case 31:
                        $this->getServer()->getCommandMap()->dispatch($player, "exit");
                        $sender->sendMessage("RevengeTech ServerUI Exiting ServerUI Menu");
                        break;
                }
            });
            $form->setTitle("RevengeTech ServerUI");
            $form->setContent("RevengeTech ServerUI Commands Below");
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
            $form->addButton("Custom Enchants Menu");
            $form->addButton("ban");
            $form->addButton("banlist");
            $form->addButton("kit");
            $form->addButton("pardon");
            $form->addButton("kits");
            $form->addButton("Exit");
            $form->sendToPlayer($sender);
        }
        return true;
    }
}
