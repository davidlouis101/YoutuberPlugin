<?php

namespace Youtuber;

use pocketmine\plugin\pluginBase;
use pocketmine\command\Command;
use pocketmine\command\commandsender;

class Main extends PluginBase {}

public function onEnable() : void {
 $this->getLogger->info("DC An");
}
public function onCommand (CommandSender $sender,Command $command, string $label, array $args) : bool {
 swicht($command->getName()){
   case "YT":
$sender->sendMassage("§4Unser Discord Server --> §2https://discord.gg/rrf3gqh");
$sender->sendMassage("§1Nicht Vergessen §2YT : Crow Balde");
$sender->sendMassage("VON Crow Balde");
    Return true;
     }
    }
   }
}
