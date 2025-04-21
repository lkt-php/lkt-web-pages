<?php

namespace Lkt\WebPages;

use Lkt\Factory\Schemas\Schema;
use Lkt\WebPages\Generated\GeneratedLktWebPage;
use function Lkt\WebPages\functions\addWebElement;

class LktWebPage extends GeneratedLktWebPage
{
    const COMPONENT = 'lkt-web-page';

    public function read()
    {
        $fields = Schema::get(static::COMPONENT)->getAllFields();
        $r = $this->readFields($fields);

        foreach ($r['webElements'] as &$webElement) {
            static::ensureWebElement($webElement);
        }

        return $r;
    }

    private static function ensureWebElement(array &$webElement)
    {
        if ($webElement['type'] === 'lkt-text') {
            if (!isset($webElement['props']) || !is_array($webElement['props'])) {
                $webElement['props'] = [];;
            }
            if (!isset($webElement['props']['text']) || !is_array($webElement['props'])) {
                $webElement['props']['text'] = [
                    'en' => '',
                    'es' => '',
                ];
            }
        }
    }

    public function doCreate(array $data): static
    {
        LktWebPage::feedInstance($this, $data, 'create');
        return $this->save();
    }

    public function doUpdate(array $data): static
    {
        LktWebPage::feedInstance($this, $data, 'update');
        return $this->save();
    }

    public function addWebElement(LktWebElement $element, int $before = 0, int $after = 0): static
    {
        $data = addWebElement($this->getWebElementsIds(), $element->getId(), $before, $after);
        return $this->setWebElements($data)->save();
    }
}