<?php

namespace Lkt\WebPages\Enums;

class WebElementType
{
    const LktLayoutBox = 'lkt-layout-box';
    const LktTextBox = 'lkt-text-box';
    const LktLayoutAccordion = 'lkt-layout-accordion';
    const LktTextAccordion = 'lkt-text-accordion';
    const LktText = 'lkt-text';
    const LktLayout = 'lkt-layout';
    const LktAnchor = 'lkt-anchor';
    const LktButton = 'lkt-button';
    const LktHeader = 'lkt-header';
    const LktIcon = 'lkt-icon';
    const LktImage = 'lkt-image';

    const Types = [
        self::LktLayoutBox,
        self::LktTextBox,
        self::LktLayoutAccordion,
        self::LktTextAccordion,
        self::LktText,
        self::LktLayout,
        self::LktAnchor,
        self::LktButton,
        self::LktHeader,
        self::LktIcon,
        self::LktImage,
    ];
}