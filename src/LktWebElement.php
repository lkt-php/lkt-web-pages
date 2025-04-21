<?php

namespace Lkt\WebPages;

use Lkt\Factory\Schemas\Schema;
use Lkt\WebPages\Generated\GeneratedLktWebElement;
use function Lkt\WebPages\functions\addWebElement;

class LktWebElement extends GeneratedLktWebElement
{
    const COMPONENT = 'lkt-web-element';

    public function read()
    {
        $fields = Schema::get(static::COMPONENT)->getAllFields();
        return $this->readFields($fields);
    }

    public function doCreate(array $data): static
    {
        static::feedInstance($this, $data, 'create');
        return $this->save();
    }

    public function doUpdate(array $data): static
    {
        static::feedInstance($this, $data, 'update');
        return $this->save();
    }

    public function addWebElement(LktWebElement $element, int $before = 0, int $after = 0): static
    {
        $data = addWebElement($this->getChildrenIds(), $element->getId(), $before, $after);
        return $this->setChildren($data)->save();
    }
}