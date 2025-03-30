<?php

namespace Lkt\WebPages\Config\Schemas;

use Lkt\Factory\Schemas\Fields\AssocJSONField;
use Lkt\Factory\Schemas\Fields\DateTimeField;
use Lkt\Factory\Schemas\Fields\ForeignKeysField;
use Lkt\Factory\Schemas\Fields\IdField;
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
        'name',
        'summary',
        'slug',
        'seoTitle',
    ])
    ->setExcludedFieldsForViewFeed('update', [
        'name',
        'summary',
        'slug',
        'seoTitle',
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
//    ->addField(StringField::define('nameEn', 'name')->setIsI18nJson()->setFixedLangKey('en'))
//    ->addField(StringField::define('nameEs', 'name')->setIsI18nJson()->setFixedLangKey('es'))
//    ->addField(StringField::define('nameDe', 'name')->setIsI18nJson()->setFixedLangKey('de'))
//    ->addField(StringField::define('nameIt', 'name')->setIsI18nJson()->setFixedLangKey('it'))
//    ->addField(StringField::define('nameFr', 'name')->setIsI18nJson()->setFixedLangKey('fr'))
//    ->addField(StringField::define('namePt', 'name')->setIsI18nJson()->setFixedLangKey('pt'))
//    ->addField(StringField::define('nameCh', 'name')->setIsI18nJson()->setFixedLangKey('ch'))
//    ->addField(StringField::define('nameJp', 'name')->setIsI18nJson()->setFixedLangKey('jp'))
//    ->addField(StringField::define('nameNl', 'name')->setIsI18nJson()->setFixedLangKey('nl'))

    ->addField(StringField::define('summary')->setIsI18nJson())
//    ->addField(StringField::define('summaryEn', 'summary')->setIsI18nJson()->setFixedLangKey('en'))
//    ->addField(StringField::define('summaryEs', 'summary')->setIsI18nJson()->setFixedLangKey('es'))
//    ->addField(StringField::define('summaryDe', 'summary')->setIsI18nJson()->setFixedLangKey('de'))
//    ->addField(StringField::define('summaryIt', 'summary')->setIsI18nJson()->setFixedLangKey('it'))
//    ->addField(StringField::define('summaryFr', 'summary')->setIsI18nJson()->setFixedLangKey('fr'))
//    ->addField(StringField::define('summaryPt', 'summary')->setIsI18nJson()->setFixedLangKey('pt'))
//    ->addField(StringField::define('summaryCh', 'summary')->setIsI18nJson()->setFixedLangKey('ch'))
//    ->addField(StringField::define('summaryJp', 'summary')->setIsI18nJson()->setFixedLangKey('jp'))
//    ->addField(StringField::define('summaryNl', 'summary')->setIsI18nJson()->setFixedLangKey('nl'))

    ->addField(StringField::define('slug')->setIsI18nJson())
//    ->addField(StringField::define('slugEn', 'slug')->setIsI18nJson()->setFixedLangKey('en'))
//    ->addField(StringField::define('slugEs', 'slug')->setIsI18nJson()->setFixedLangKey('es'))
//    ->addField(StringField::define('slugDe', 'slug')->setIsI18nJson()->setFixedLangKey('de'))
//    ->addField(StringField::define('slugIt', 'slug')->setIsI18nJson()->setFixedLangKey('it'))
//    ->addField(StringField::define('slugFr', 'slug')->setIsI18nJson()->setFixedLangKey('fr'))
//    ->addField(StringField::define('slugPt', 'slug')->setIsI18nJson()->setFixedLangKey('pt'))
//    ->addField(StringField::define('slugCh', 'slug')->setIsI18nJson()->setFixedLangKey('ch'))
//    ->addField(StringField::define('slugJp', 'slug')->setIsI18nJson()->setFixedLangKey('jp'))
//    ->addField(StringField::define('slugNl', 'slug')->setIsI18nJson()->setFixedLangKey('nl'))

    ->addField(StringField::define('seoTitle', 'seo_title')->setIsI18nJson())
//    ->addField(StringField::define('seoTitleEn', 'seoTitle')->setIsI18nJson()->setFixedLangKey('en'))
//    ->addField(StringField::define('seoTitleEs', 'seoTitle')->setIsI18nJson()->setFixedLangKey('es'))
//    ->addField(StringField::define('seoTitleDe', 'seoTitle')->setIsI18nJson()->setFixedLangKey('de'))
//    ->addField(StringField::define('seoTitleIt', 'seoTitle')->setIsI18nJson()->setFixedLangKey('it'))
//    ->addField(StringField::define('seoTitleFr', 'seoTitle')->setIsI18nJson()->setFixedLangKey('fr'))
//    ->addField(StringField::define('seoTitlePt', 'seoTitle')->setIsI18nJson()->setFixedLangKey('pt'))
//    ->addField(StringField::define('seoTitleCh', 'seoTitle')->setIsI18nJson()->setFixedLangKey('ch'))
//    ->addField(StringField::define('seoTitleJp', 'seoTitle')->setIsI18nJson()->setFixedLangKey('jp'))
//    ->addField(StringField::define('seoTitleNl', 'seoTitle')->setIsI18nJson()->setFixedLangKey('nl'))

    ->addField(AssocJSONField::define('nameData', 'name')->setIsI18nJson())
    ->addField(AssocJSONField::define('summaryData', 'summary')->setIsI18nJson())
    ->addField(AssocJSONField::define('slugData', 'slug')->setIsI18nJson())
    ->addField(AssocJSONField::define('seoTitleData', 'seo_title')->setIsI18nJson())
    ->addField(AssocJSONField::define('keywords'))
    ->addField(
        ForeignKeysField::defineRelation(LktWebElement::COMPONENT, 'webElements', 'web_elements')
    )
    ;