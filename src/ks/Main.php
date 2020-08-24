<?php

namespace ks;

use pocketmine\plugin\PLuginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

    public function onEnable() {
        $this->getServer()->getLogger()->info("Started.");
    }
}