<?php 
namespace OnlyProxyJoin\Zeao\listener;

use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;

use NoProxy\Zeao\Loader;
class ProxyListener implements Listener{
    private $plugin;
    public function __construct(Loader $plugin){
        $this->plugin = $plugin;
}
public function onJoin(PlayerJoinEvent $event){
    $player = $event->getPlayer();
    if($player->getXuid() !== ""){
        $player->kick(TextFormat::colorize($this->plugin->getConfig()->get("Kick-Message")));
    }
}
}
