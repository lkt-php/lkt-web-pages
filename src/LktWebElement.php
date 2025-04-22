<?php

namespace Lkt\WebPages;

use Lkt\Factory\Schemas\Schema;
use Lkt\WebPages\Enums\WebElementType;
use Lkt\WebPages\Generated\GeneratedLktWebElement;
use function Lkt\WebPages\functions\addWebElement;

class LktWebElement extends GeneratedLktWebElement
{
    const COMPONENT = 'lkt-web-element';

    public function read()
    {
        $fields = Schema::get(static::COMPONENT)->getAllFields();
        $r = $this->readFields($fields);
        $this->ensureRead($r);
        return $r;
    }

    public function readAsRelated(): array
    {
        $r = parent::readAsRelated();
        $this->ensureRead($r);
        return $r;
    }

    public function doCreate(array $data): static
    {
        static::feedInstance($this, $this->prepareData($data), 'create');
        return $this->save();
    }

    public function doUpdate(array $data): static
    {
        static::feedInstance($this, $this->prepareData($data), 'update');
        return $this->save();
    }

    public function addWebElement(LktWebElement $element, int $before = 0, int $after = 0): static
    {
        $data = addWebElement($this->getChildrenIds(), $element->getId(), $before, $after);
        return $this->setChildren($data)->save();
    }

    private function ensureRead(array &$webElement)
    {
        $type = $webElement['type'];

        if (!isset($webElement['props']) || !is_array($webElement['props'])) {
            $webElement['props'] = [];;
        }

        if (!isset($webElement['props']['text']) || !is_array($webElement['props']['text'])) {
            $webElement['props']['text'] = [
                'en' => '',
                'es' => '',
            ];
        }

        if ($type === WebElementType::LktTextBanner) {
            if (!isset($webElement['props']['header']) || !is_array($webElement['props']['header'])) {
                $webElement['props']['header'] = [
                    'en' => '',
                    'es' => '',
                ];
            }
        }
    }

    private function prepareData(array $data)
    {
        $type = $this->isAnonymous() ? $data['type'] : $this->getType();
        if ($type === WebElementType::LktTextBanner) {
            if (!$data['props']['art'] || !is_array($data['props']['art'])|| count($data['props']['art']) === 0) {
                $data['props']['art'] = ['src' => ''];
            }
            if (!$data['props']['media'] || !is_array($data['props']['media'])|| count($data['props']['media']) === 0) {
                $data['props']['media'] = ['src' => ''];
            }
        }

        if (count($data['subElements']) > 0) {
            foreach ($data['subElements'] as &$subElement) {
                unset($subElement['id']);
                unset($subElement['value']);
                unset($subElement['label']);
                unset($subElement['keyMoment']);
                unset($subElement['uid']);

                if ($type === WebElementType::LktIcons) {
                    unset($subElement['subElements']);
                    unset($subElement['children']);
                    unset($subElement['component']);
                }
            }
        }

        return $data;
    }
}