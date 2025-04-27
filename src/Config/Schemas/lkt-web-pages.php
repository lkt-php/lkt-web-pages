<?php

namespace Lkt\WebPages\Config\Schemas;

use Lkt\Factory\Schemas\Fields\AssocJSONField;
use Lkt\Factory\Schemas\Fields\DateTimeField;
use Lkt\Factory\Schemas\Fields\ForeignKeysField;
use Lkt\Factory\Schemas\Fields\IdField;
use Lkt\Factory\Schemas\Fields\IntegerField;
use Lkt\Factory\Schemas\Fields\StringChoiceField;
use Lkt\Factory\Schemas\Fields\StringField;
use Lkt\Factory\Schemas\InstanceSettings;
use Lkt\Factory\Schemas\Schema;
use Lkt\Factory\Schemas\Views\FieldViewConfig;
use Lkt\WebPages\Enums\WebPageStatus;
use Lkt\WebPages\LktWebElement;
use Lkt\WebPages\LktWebPage;

return Schema::table('lkt_web_pages', LktWebPage::COMPONENT)
    ->setInstanceSettings(
        InstanceSettings::define(LktWebPage::class)
            ->setNamespaceForGeneratedClass('Lkt\WebPages\Generated')
            ->setWhereStoreGeneratedClass(__DIR__ . '/../../Generated')
    )
    ->setItemsPerPage(20)
    ->setCountableField('id')
    ->setFieldsForRelatedMode('id', 'component', [
        'id',
        'component',
        'type',
        'props',
        'config',
        'layout',
        'children',
    ])
    ->setExcludedFieldsForViewFeed('create', [
//        'name',
//        'summary',
//        'slug',
//        'seoTitle',
    ])
    ->setExcludedFieldsForViewFeed('update', [
//        'name',
//        'summary',
//        'slug',
//        'seoTitle',
    ])
    ->addField(IdField::define('id'))
    ->addField(
        DateTimeField::define('createdAt', 'created_at')
            ->setDefaultReadFormat('Y-m-d')
            ->setCurrentTimeStampAsDefaultValue()
    )
    ->addField(
        DateTimeField::define('updatedAt', 'updated_at')
            ->setDefaultReadFormat('Y-m-d')
            ->setCurrentTimeStampAsDefaultValue()
    )
    ->addField(
        DateTimeField::define('publishedAt', 'published_at')
            ->setDefaultReadFormat('Y-m-d')
            ->setCurrentTimeStampAsDefaultValue()
    )
    ->addField(StringChoiceField::choice(WebPageStatus::Statuses, 'status'))
    ->addField(StringField::define('name')->setIsI18nJson())

    ->addField(StringField::define('summary')->setIsI18nJson())

    ->addField(StringField::define('slug')->setIsI18nJson())

    ->addField(StringField::define('seoTitle', 'seo_title')->setIsI18nJson())

    ->addField(IntegerField::define('type'))

    ->addField(AssocJSONField::define('nameData', 'name')->setIsI18nJson())
    ->addField(AssocJSONField::define('summaryData', 'summary')->setIsI18nJson())
    ->addField(AssocJSONField::define('slugData', 'slug')->setIsI18nJson())
    ->addField(AssocJSONField::define('seoTitleData', 'seo_title')->setIsI18nJson())
    ->addField(AssocJSONField::define('keywords'))
    ->addField(
        ForeignKeysField::defineRelation(LktWebElement::COMPONENT, 'webElements', 'web_elements')
    )
    ;