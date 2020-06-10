<?php 
namespace OnlyProxyJoin\Zeao\listener;

use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;

use OnlyProxyJoin\Zeao\Loader;
class ProxyListener implements Listener{
    private $plugin;
    public function __construct(Loader $plugin){
        $this->plugin = $plugin;
}
public function onJoin(PlayerPreLoginEvent $event){
    $player = $event->getPlayer();
    if($player->getXuid() !== ""){
        
        $event->setKickMessage(TextFormat::colorize($this->plugin->getConfig()->get("Kick-Message")));
        $event->setCancelled();
    }
}
}
