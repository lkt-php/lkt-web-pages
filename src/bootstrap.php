<?php

namespace Lkt\WebPages;

use Lkt\Factory\Schemas\Schema;
use Lkt\Phinx\PhinxConfigurator;

/**
 * Load Schemas
 */
Schema::add(require_once __DIR__ . '/Config/Schemas/lkt-web-elements.php');
Schema::add(require_once __DIR__ . '/Config/Schemas/lkt-web-pages.php');

if (php_sapi_name() == 'cli') {
    PhinxConfigurator::addMigrationPath(__DIR__ . '/database/migrations');
}