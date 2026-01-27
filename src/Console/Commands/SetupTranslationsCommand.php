<?php

namespace Lkt\WebPages\Console\Commands;

use Lkt\Translations\Enums\TranslationType;
use Lkt\Translations\Instances\LktTranslation;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SetupTranslationsCommand extends Command
{
    protected static $defaultName = 'lkt:web-page:setup:i18n';

    protected function configure()
    {
        $this
            // the short description shown while running "php bin/console list"
            ->setDescription('Automatically generates all default translations')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('')
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $parent = LktTranslation::createIfMissing('webPageStatus', TranslationType::Many, []);
        $parentId = $parent->getId();
        LktTranslation::createIfMissing('1', TranslationType::Text, [
            'es' => 'Pública',
            'en' => 'Public',
        ], $parentId);
        LktTranslation::createIfMissing('2', TranslationType::Text, [
            'es' => 'Borrador',
            'en' => 'Draft',
        ], $parentId);
        LktTranslation::createIfMissing('3', TranslationType::Text, [
            'es' => 'Programada',
            'en' => 'Scheduled',
        ], $parentId);
        LktTranslation::createIfMissing('4', TranslationType::Text, [
            'es' => 'Confidencial',
            'en' => 'Confidential',
        ], $parentId);


        $parent = LktTranslation::createIfMissing('webElement', TranslationType::Many, []);
        $parentId = $parent->getId();
        LktTranslation::createOrUpdate('1', TranslationType::Text, [
            'es' => 'Texto libre',
            'en' => 'Free text',
        ], $parentId);
        LktTranslation::createOrUpdate('2', TranslationType::Text, [
            'es' => 'Caja de texto',
            'en' => 'Text box',
        ], $parentId);
        LktTranslation::createOrUpdate('3', TranslationType::Text, [
            'es' => 'Cuadrícula',
            'en' => 'Layout',
        ], $parentId);
        LktTranslation::createOrUpdate('4', TranslationType::Text, [
            'es' => 'Caja con cuadrícula',
            'en' => 'Layout box',
        ], $parentId);
        LktTranslation::createOrUpdate('5', TranslationType::Text, [
            'es' => 'Acordeón con texto',
            'en' => 'Text accordion',
        ], $parentId);
        LktTranslation::createOrUpdate('6', TranslationType::Text, [
            'es' => 'Acordeón con cuadrícula',
            'en' => 'Layout accordion',
        ], $parentId);
        LktTranslation::createOrUpdate('7', TranslationType::Text, [
            'es' => 'Banner',
            'en' => 'Banner',
        ], $parentId);
        LktTranslation::createOrUpdate('8', TranslationType::Text, [
            'es' => 'Banner con cuadrícula',
            'en' => 'Layout Banner',
        ], $parentId);
        LktTranslation::createOrUpdate('9', TranslationType::Text, [
            'es' => 'Enlace',
            'en' => 'Anchor',
        ], $parentId);
        LktTranslation::createOrUpdate('10', TranslationType::Text, [
            'es' => 'Botón',
            'en' => 'Button',
        ], $parentId);
        LktTranslation::createOrUpdate('11', TranslationType::Text, [
            'es' => 'Cabecera',
            'en' => 'Header',
        ], $parentId);
        LktTranslation::createOrUpdate('12', TranslationType::Text, [
            'es' => 'Icono',
            'en' => 'Icon',
        ], $parentId);
        LktTranslation::createOrUpdate('13', TranslationType::Text, [
            'es' => 'Iconos',
            'en' => 'Icons',
        ], $parentId);
        LktTranslation::createOrUpdate('14', TranslationType::Text, [
            'es' => 'Imágen',
            'en' => 'Image',
        ], $parentId);


        $parent = LktTranslation::createIfMissing('layoutEngines', TranslationType::Many, []);
        $parentId = $parent->getId();
        LktTranslation::createIfMissing('grid', TranslationType::Text, [
            'es' => 'CSS Grid',
            'en' => 'CSS Grid',
        ], $parentId);
        LktTranslation::createIfMissing('flex-row', TranslationType::Text, [
            'es' => 'CSS Flex: Única Fila',
            'en' => 'CSS Flex: Single Row',
        ], $parentId);
        LktTranslation::createIfMissing('flex-rows', TranslationType::Text, [
            'es' => 'CSS Flex: Filas',
            'en' => 'CSS Flex: Rows',
        ], $parentId);
        LktTranslation::createIfMissing('flex-column', TranslationType::Text, [
            'es' => 'CSS Flex: Columna',
            'en' => 'CSS Flex: Column',
        ], $parentId);


        $parent = LktTranslation::createIfMissing('flexColumnsOptions', TranslationType::Many, []);
        $parentId = $parent->getId();
        LktTranslation::createIfMissing('lkt-flex-col-1', TranslationType::Text, [
            'es' => 'Por defecto: 1',
            'en' => 'Default: 1',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-2', TranslationType::Text, [
            'es' => 'Por defecto: 2',
            'en' => 'Default: 2',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-3', TranslationType::Text, [
            'es' => 'Por defecto: 3',
            'en' => 'Default: 3',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-4', TranslationType::Text, [
            'es' => 'Por defecto: 4',
            'en' => 'Default: 4',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-5', TranslationType::Text, [
            'es' => 'Por defecto: 5',
            'en' => 'Default: 5',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-6', TranslationType::Text, [
            'es' => 'Por defecto: 6',
            'en' => 'Default: 6',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-7', TranslationType::Text, [
            'es' => 'Por defecto: 7',
            'en' => 'Default: 7',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-8', TranslationType::Text, [
            'es' => 'Por defecto: 8',
            'en' => 'Default: 8',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-9', TranslationType::Text, [
            'es' => 'Por defecto: 9',
            'en' => 'Default: 9',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-10', TranslationType::Text, [
            'es' => 'Por defecto: 10',
            'en' => 'Default: 10',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-11', TranslationType::Text, [
            'es' => 'Por defecto: 11',
            'en' => 'Default: 11',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-12', TranslationType::Text, [
            'es' => 'Por defecto: 12',
            'en' => 'Default: 12',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-1--from-768', TranslationType::Text, [
            'es' => 'Desde 768px: 1',
            'en' => 'From 768px: 1',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-2--from-768', TranslationType::Text, [
            'es' => 'Desde 768px: 2',
            'en' => 'From 768px: 2',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-3--from-768', TranslationType::Text, [
            'es' => 'Desde 768px: 3',
            'en' => 'From 768px: 3',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-4--from-768', TranslationType::Text, [
            'es' => 'Desde 768px: 4',
            'en' => 'From 768px: 4',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-flex-col-5--from-768', TranslationType::Text, [
            'es' => 'Desde 768px: 5',
            'en' => 'From 768px: 5',
        ], $parentId);


        $parent = LktTranslation::createIfMissing('justifyContentOptions', TranslationType::Many, []);
        $parentId = $parent->getId();
        LktTranslation::createIfMissing('lkt-justify-content-stretch', TranslationType::Text, [
            'es' => 'Por defecto: Ajustado',
            'en' => 'Default: Stretch',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-justify-content-center', TranslationType::Text, [
            'es' => 'Por defecto: Centrado',
            'en' => 'Default: Center',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-justify-content-space-between', TranslationType::Text, [
            'es' => 'Por defecto: Separar elementos',
            'en' => 'Default: Space between',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-justify-content-space-around', TranslationType::Text, [
            'es' => 'Por defecto: Airear elementos',
            'en' => 'Default: Space around',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-justify-content-space-evenly', TranslationType::Text, [
            'es' => 'Por defecto: Espacio equitativo',
            'en' => 'Default: Space evenly',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-justify-content-start', TranslationType::Text, [
            'es' => 'Por defecto: Al inicio',
            'en' => 'Default: Start',
        ], $parentId);
        LktTranslation::createIfMissing('lkt-justify-content-end', TranslationType::Text, [
            'es' => 'Por defecto: Al final',
            'en' => 'Default: End',
        ], $parentId);

        $parent = LktTranslation::createIfMissing('accordionTypeOptions', TranslationType::Many, []);
        $parentId = $parent->getId();
        LktTranslation::createIfMissing('auto', TranslationType::Text, [
            'es' => 'Por defecto',
            'en' => 'Default',
        ], $parentId);
        LktTranslation::createIfMissing('always', TranslationType::Text, [
            'es' => 'Siempre abierto',
            'en' => 'Always opened',
        ], $parentId);
        LktTranslation::createIfMissing('lazy', TranslationType::Text, [
            'es' => 'Carga lenta',
            'en' => 'Lazy load',
        ], $parentId);
        LktTranslation::createIfMissing('ever', TranslationType::Text, [
            'es' => 'Carga siempre',
            'en' => 'Ever load',
        ], $parentId);

        $parent = LktTranslation::createIfMissing('bannerTypeOptions', TranslationType::Many, []);
        $parentId = $parent->getId();
        LktTranslation::createIfMissing('static', TranslationType::Text, [
            'es' => 'Fondo estático',
            'en' => 'Static background',
        ], $parentId);
        LktTranslation::createIfMissing('parallax', TranslationType::Text, [
            'es' => 'Fondo paralelo',
            'en' => 'Parallax background',
        ], $parentId);

        return 1;
    }
}