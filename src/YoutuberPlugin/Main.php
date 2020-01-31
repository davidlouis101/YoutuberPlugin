<?php

namespace YoutuberPlugin;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase {

    public function onEnable(){
        $this->getLogger()->info("DC An");
    }

    public function onCommand (CommandSender $sender, Command $command, string $label, array $args) :bool {
        switch($command->getName()){
            case "dc":
                $sender->sendMessage("§4Unser Discord Server --> §2https://discord.gg/rrf3gqh%22);
                $sender->sendMessage("§1Nicht Vergessen §2YT : Crow Balde");
                $sender->sendMessage("§6Von §2 Crow§4 Balde");
                return true;
        }
    }
}
