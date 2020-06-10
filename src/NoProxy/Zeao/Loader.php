<?php 
namespace OnlyProxyJoin\Zeao;

use pocketmine\plugin\PluginBase;

use OnlyProxyJoin\Zeao\listener\ProxyListener;

class Loader extends PluginBase{
    public function onEnable(): void{
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents(new ProxyListener($this), $this);
    }
}