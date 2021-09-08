<?php

namespace Stroker;

use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\item\Item;
use pocketmine\Player;

class EventListener implements Listener {

    public function onDamage(EntityDamageEvent $event) {
        $player = $event->getEntity();
        if (!$player instanceof Player) return;
        if ($event instanceof EntityDamageByEntityEvent) {
            $damager = $event->getDamager();
            if (!$damager instanceof Player) return;
            $player->getLevel()->dropItem($player, Item::get(Item::REDSTONE));
            if($randomNumber <= 15) {

}
        }
    }
}