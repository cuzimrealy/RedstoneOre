<?php

namespace Stroker;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable()
    {
        $this->getLogger()->info("Plugin Enabled!");
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
    }

    public function onDisable()
    {
        $this->getLogger()->info("Plugin Disabled!");
    }
}