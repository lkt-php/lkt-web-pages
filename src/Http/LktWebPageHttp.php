<?php

namespace Lkt\WebPages\Http;

use Lkt\Http\Response;
use Lkt\Locale\Locale;
use Lkt\Translations\Translations;
use Lkt\WebPages\LktWebElement;
use Lkt\WebPages\LktWebPage;
use function Lkt\Tools\Parse\clearInput;

class LktWebPageHttp
{
    public static function index(array $params): Response
    {
        $queryBuilder = LktWebPage::getQueryCaller();

        if (isset($params['type'])) {
            $type = (int)clearInput($params['type']);
            $queryBuilder->andTypeEqual($type);
        }

        if (isset($params['page'])) {
            $page = (int)clearInput($params['page']);

            if (isset($params['itemsPerPage'])) {
                $itemsPerPage = (int)clearInput($params['itemsPerPage']);
                $queryBuilder->pagination($page, $itemsPerPage);
            }

            $results = LktWebPage::getPage($page, $queryBuilder);
        } else {
            $results = LktWebPage::getMany($queryBuilder);
        }


        $response = [];
        foreach ($results as $result) $response[] = $result->read();

        return Response::ok([
            'results' => $response,
            'perms' => ['create']
        ]);
    }
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
            'perms' => ['update', 'drop']
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