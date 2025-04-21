<?php

namespace Lkt\WebPages\Http;

use Lkt\Http\Response;
use Lkt\WebPages\LktWebElement;
use Lkt\WebPages\LktWebPage;
use function Lkt\Tools\Parse\clearInput;

class LktWebPageHttp
{
    public static function create(array $params): Response
    {
        $instance = LktWebPage::getInstance();
        $instance->doCreate($params);

        return Response::ok([
            'item' => $instance->read(),
            'id' => $instance->getId(),
        ]);
    }

    public static function read(array $params): Response
    {
        $instance = LktWebPage::getInstance((int)$params['id']);
        if ($instance->isAnonymous()) return Response::notFound();

        return Response::ok([
            'item' => $instance->read(),
            'perms' => ['update']
        ]);
    }

    public static function children(array $params): Response
    {
        $instance = LktWebPage::getInstance((int)$params['id']);
        if ($instance->isAnonymous()) return Response::notFound();

        return Response::ok([
            'results' => $instance->read()['webElements'],
            'perms' => ['update']
        ]);
    }

    public static function update(array $params): Response
    {
        $instance = LktWebPage::getInstance((int)$params['id']);
        if ($instance->isAnonymous()) return Response::notFound();
        $instance->doUpdate($params);

        return Response::ok([
            'id' => $instance->getId(),
        ]);
    }

    public static function drop(array $params): Response
    {
        $instance = LktWebPage::getInstance((int)$params['id']);
        if ($instance->isAnonymous()) return Response::notFound();
        $instance->delete();

        return Response::ok();
    }
}