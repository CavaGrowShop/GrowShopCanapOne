<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.shipping_preferences.carrier_options_configuration' shared service.

return $this->services['prestashop.adapter.shipping_preferences.carrier_options_configuration'] = new \PrestaShop\PrestaShop\Adapter\Carrier\CarrierOptionsConfiguration(${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()) && false ?: '_'});
