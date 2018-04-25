<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'nunomaduro/collision' => 
  array (
    'providers' => 
    array (
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
  'caffeinated/shinobi' => 
  array (
    'providers' => 
    array (
      0 => 'Caffeinated\\Shinobi\\ShinobiServiceProvider',
    ),
    'aliases' => 
    array (
      'Shinobi' => 'Caffeinated\\Shinobi\\Facades\\Shinobi',
    ),
  ),
);