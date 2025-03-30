<?php

namespace Lkt\WebPages;

use Lkt\Factory\Schemas\Schema;
use Lkt\WebPages\Generated\GeneratedLktWebPage;

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
        if ($webElement['type'] === 'text' && !isset($webElement['props']['text'])) {
            $webElement['props']['text'] = [
                'en' => '',
                'es' => '',
            ];
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
}