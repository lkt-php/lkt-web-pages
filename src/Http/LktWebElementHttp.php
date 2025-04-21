<?php

namespace Lkt\WebPages\Http;

use Lkt\Http\Response;
use Lkt\WebPages\LktWebElement;
use Lkt\WebPages\LktWebPage;
use function Lkt\Tools\Parse\clearInput;

class LktWebElementHttp
{
    public static function create(array $params): Response
    {
        $parentId = (int)$params['parent'];
        $parentType = clearInput($params['parentType']);

        if (!$parentId || !$parentType) return Response::badRequest();

        $parent = null;
        if ($parentType === 'element') {
            $parent = LktWebElement::getInstance($parentId);

        } else if ($parentType === 'page') {
            $parent = LktWebPage::getInstance($parentId);

        } else {
            return Response::badRequest();
        }

        $instance = LktWebElement::getInstance();
        $instance->doCreate($params);


        $beforeElement = (int)$params['beforeElement'];
        $afterElement = (int)$params['afterElement'];

        $parent->addWebElement($instance, $beforeElement, $afterElement);

        return Response::ok([
            'item' => $instance->read(),
            'id' => $instance->getId(),
        ]);
    }

    public static function read(array $params): Response
    {
        $instance = LktWebElement::getInstance((int)$params['id']);
        if ($instance->isAnonymous()) return Response::notFound();

        return Response::ok([
            'item' => $instance->read(),
            'perms' => ['update']
        ]);
    }

    public static function children(array $params): Response
    {
        $instance = LktWebElement::getInstance((int)$params['id']);
        if ($instance->isAnonymous()) return Response::notFound();

        return Response::ok([
            'item' => $instance->read()['children'],
            'perms' => ['update']
        ]);
    }

    public static function update(array $params): Response
    {
        $instance = LktWebElement::getInstance((int)$params['id']);
        if ($instance->isAnonymous()) return Response::notFound();
        $instance->doUpdate($params);

        return Response::ok([
            'id' => $instance->getId(),
        ]);
    }

    public static function drop(array $params): Response
    {
        $instance = LktWebElement::getInstance((int)$params['id']);
        if ($instance->isAnonymous()) return Response::notFound();
        $instance->delete();

        return Response::ok();
    }
}