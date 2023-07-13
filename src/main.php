<?php
namespace skyss0fly\PocketMal;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
    
public function __construct(private readonly LunarRanksPlugin $plugin)
    {
        $this->setPermission("pocketmal.command.rby");

        $this->commandArg = new CommandArgs();
        $this->commandArg->addParameter(0, "player", AvailableCommandsPacket::ARG_TYPE_TARGET);
        $key = $this->commandArg->addParameter(0, "rank", AvailableCommandsPacket::ARG_FLAG_ENUM | AvailableCommandsPacket::ARG_TYPE_STRING);
        $this->commandArg->setEnum(0, $key, "rank", $this->plugin->getRankList());

        $command = $this->plugin->getMessages()["rank-command"];
        parent::__construct($command["name"], $command["description"], $command["global-usage"], $command["aliases"]);
    }
} 
