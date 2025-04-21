<?php

namespace Lkt\WebPages;



use Lkt\Http\Routes\DeleteRoute;
use Lkt\Http\Routes\GetRoute;
use Lkt\Http\Routes\PostRoute;
use Lkt\Http\Routes\PutRoute;
use Lkt\WebPages\Http\LktWebElementHttp;
use Lkt\WebPages\Http\LktWebPageHttp;

/**
 * Web Elements Routes
 */
PostRoute::register('/web/element', [LktWebElementHttp::class, 'create']);
GetRoute::register('/web/element/{id}', [LktWebElementHttp::class, 'read']);
GetRoute::register('/web/element/{id}/children', [LktWebElementHttp::class, 'children']);
PutRoute::register('/web/element/{id}', [LktWebElementHttp::class, 'update']);
DeleteRoute::register('/web/element/{id}', [LktWebElementHttp::class, 'drop']);

/**
 * Web Pages Routes
 */
PostRoute::register('/web/page', [LktWebPageHttp::class, 'create']);
GetRoute::register('/web/page/{id}', [LktWebPageHttp::class, 'read']);
GetRoute::register('/web/page/{id}/children', [LktWebPageHttp::class, 'children']);
PutRoute::register('/web/page/{id}', [LktWebPageHttp::class, 'update']);
DeleteRoute::register('/web/page/{id}', [LktWebPageHttp::class, 'drop']);
