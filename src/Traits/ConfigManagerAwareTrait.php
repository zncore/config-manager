<?php

namespace ZnCore\ConfigManager\Traits;

use ZnCore\ConfigManager\Interfaces\ConfigManagerInterface;

trait ConfigManagerAwareTrait
{

    private $configManager;

    protected function getConfigManager(): ConfigManagerInterface
    {
        return $this->configManager;
    }

    protected function setConfigManager(ConfigManagerInterface $configManager): void
    {
        $this->configManager = $configManager;
    }
}
