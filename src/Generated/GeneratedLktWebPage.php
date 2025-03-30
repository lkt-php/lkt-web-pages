<?php namespace Lkt\WebPages\Generated;

use Lkt\QueryBuilding\Where;
use Lkt\QueryBuilding\Query;
use Lkt\Factory\Instantiator\Instantiator;

class GeneratedLktWebPage extends \Lkt\Factory\Instantiator\Instances\AbstractInstance
{
    const GENERATED_TYPE = 'lkt-web-page';
    const COMPONENT = 'lkt-web-page';

    public function getId(): int
    {
        return $this->_getIntegerVal('id');
    }

    public function hasId(): bool
    {
        return $this->_hasIntegerVal('id');
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setId(int $id)
    {
        $this->_setIntegerVal('id', $id);
        return $this;
    }

    public function getCreatedAt(): ?\Carbon\Carbon
    {
        return $this->_getDateTimeVal('createdAt');
    }

    public function getCreatedAtFormatted(string $format = null): string
    {
        return $this->_getDateTimeFormattedVal('createdAt', $format);
    }

    public function getCreatedAtIntlFormatted(string $format = null): string
    {
        return $this->_getDateTimeFormattedIntlVal('createdAt', $format);
    }

    public function hasCreatedAt(): bool
    {
        return $this->_hasDateTimeVal('createdAt');
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setCreatedAt($createdAt)
    {
        $this->_setDateTimeVal('createdAt', $createdAt);
        return $this;
    }

    public function getUpdatedAt(): ?\Carbon\Carbon
    {
        return $this->_getDateTimeVal('updatedAt');
    }

    public function getUpdatedAtFormatted(string $format = null): string
    {
        return $this->_getDateTimeFormattedVal('updatedAt', $format);
    }

    public function getUpdatedAtIntlFormatted(string $format = null): string
    {
        return $this->_getDateTimeFormattedIntlVal('updatedAt', $format);
    }

    public function hasUpdatedAt(): bool
    {
        return $this->_hasDateTimeVal('updatedAt');
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setUpdatedAt($updatedAt)
    {
        $this->_setDateTimeVal('updatedAt', $updatedAt);
        return $this;
    }

    public function getPublishedAt(): ?\Carbon\Carbon
    {
        return $this->_getDateTimeVal('publishedAt');
    }

    public function getPublishedAtFormatted(string $format = null): string
    {
        return $this->_getDateTimeFormattedVal('publishedAt', $format);
    }

    public function getPublishedAtIntlFormatted(string $format = null): string
    {
        return $this->_getDateTimeFormattedIntlVal('publishedAt', $format);
    }

    public function hasPublishedAt(): bool
    {
        return $this->_hasDateTimeVal('publishedAt');
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setPublishedAt($publishedAt)
    {
        $this->_setDateTimeVal('publishedAt', $publishedAt);
        return $this;
    }

    public function getStatus(): string
    {
        return $this->_getStringChoiceVal('status');
    }

    public function hasStatus(): bool
    {
        return $this->_hasStringChoiceVal('status');
    }

    public function hasStatusIn(array $values): bool
    {
        return $this->_stringChoiceIn('status', $values);
    }

    public function statusIs(string $value): bool
    {
        return $this->_stringChoiceEqual('status', $value);
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setStatus(string $status)
    {
        $this->_setStringChoiceVal('status', $status);
        return $this;
    }

    public function statusIsDraft(): bool
    {
        return $this->_getStringChoiceVal('status') === 'draft';
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setStatusDraft()
    {
        $this->_setStringChoiceVal('status', 'draft');
        return $this;
    }

    public function statusIsPublic(): bool
    {
        return $this->_getStringChoiceVal('status') === 'public';
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setStatusPublic()
    {
        $this->_setStringChoiceVal('status', 'public');
        return $this;
    }

    public function statusIsScheduled(): bool
    {
        return $this->_getStringChoiceVal('status') === 'scheduled';
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setStatusScheduled()
    {
        $this->_setStringChoiceVal('status', 'scheduled');
        return $this;
    }

    public function statusIsConfidential(): bool
    {
        return $this->_getStringChoiceVal('status') === 'confidential';
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setStatusConfidential()
    {
        $this->_setStringChoiceVal('status', 'confidential');
        return $this;
    }

    public function getName(): string
    {
        return $this->_getStringVal('name');
    }

    public function hasName(): bool
    {
        return $this->_hasStringVal('name');
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setName(string $name)
    {
        $this->_setStringVal('name', $name);
        return $this;
    }

    public function getSummary(): string
    {
        return $this->_getStringVal('summary');
    }

    public function hasSummary(): bool
    {
        return $this->_hasStringVal('summary');
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setSummary(string $summary)
    {
        $this->_setStringVal('summary', $summary);
        return $this;
    }

    public function getSlug(): string
    {
        return $this->_getStringVal('slug');
    }

    public function hasSlug(): bool
    {
        return $this->_hasStringVal('slug');
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setSlug(string $slug)
    {
        $this->_setStringVal('slug', $slug);
        return $this;
    }

    public function getSeoTitle(): string
    {
        return $this->_getStringVal('seoTitle');
    }

    public function hasSeoTitle(): bool
    {
        return $this->_hasStringVal('seoTitle');
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setSeoTitle(string $seoTitle)
    {
        $this->_setStringVal('seoTitle', $seoTitle);
        return $this;
    }

    public function getNameData(): ?array
    {
        return $this->_getJsonVal('nameData');
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setNameData(array $nameData)
    {
        $this->_setJsonVal('nameData', $nameData);
        return $this;
    }

    public function hasNameData(): bool
    {
        return $this->_hasJsonVal('nameData');
    }

    public function getSummaryData(): ?array
    {
        return $this->_getJsonVal('summaryData');
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setSummaryData(array $summaryData)
    {
        $this->_setJsonVal('summaryData', $summaryData);
        return $this;
    }

    public function hasSummaryData(): bool
    {
        return $this->_hasJsonVal('summaryData');
    }

    public function getSlugData(): ?array
    {
        return $this->_getJsonVal('slugData');
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setSlugData(array $slugData)
    {
        $this->_setJsonVal('slugData', $slugData);
        return $this;
    }

    public function hasSlugData(): bool
    {
        return $this->_hasJsonVal('slugData');
    }

    public function getSeoTitleData(): ?array
    {
        return $this->_getJsonVal('seoTitleData');
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setSeoTitleData(array $seoTitleData)
    {
        $this->_setJsonVal('seoTitleData', $seoTitleData);
        return $this;
    }

    public function hasSeoTitleData(): bool
    {
        return $this->_hasJsonVal('seoTitleData');
    }

    public function getKeywords(): ?array
    {
        return $this->_getJsonVal('keywords');
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setKeywords(array $keywords)
    {
        $this->_setJsonVal('keywords', $keywords);
        return $this;
    }

    public function hasKeywords(): bool
    {
        return $this->_hasJsonVal('keywords');
    }

    public function getWebElements(): string
    {
        return $this->_getForeignListVal('webElements');
    }

    public function hasWebElements(): bool
    {
        return $this->_hasForeignListVal('webElements');
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function setWebElements($webElements)
    {
        $this->_setForeignListVal('webElements', $webElements);
        return $this;
    }

    /** @return \Lkt\WebPages\LktWebPage */
    public function removeWebElementsIds(array $ids)
    {
        $this->_removeForeignListIds('webElements', $ids);
        return $this;
    }

    /** @return \Lkt\WebPages\LktWebElement[] */
    public function getWebElementsData(): array
    {
        return $this->_getForeignListData('webElements');
    }

    public function getWebElementsIds(): array
    {
        return $this->_getForeignListIds('webElements');
    }

    /** * @return \Lkt\WebPages\LktWebPage[] */
    public static function getMany(Query $builder = null): array
    {
        /** @var \Lkt\WebPages\LktWebPage[] */
        $r = parent::getMany($builder);
        return $r;
    }

    /** * @return \Lkt\WebPages\LktWebPage|null */
    public static function getOne(Query $builder = null)
    {
        /** @var \Lkt\WebPages\LktWebPage */
        $r = parent::getOne($builder);
        return $r;
    }

    /** @return \Lkt\WebPages\Generated\LktWebPageQueryBuilder */
    public static function getQueryCaller()
    {
        /** * @var \Lkt\WebPages\Generated\LktWebPageQueryBuilder $builder */
        list($builder) = Instantiator::getCustomQueryCaller(static::GENERATED_TYPE);
        return $builder;
    }

    /** @return \Lkt\WebPages\Generated\LktWebPageQueryBuilder */
    public static function getFilteredQueryCaller(array $data, array $processRules = null, array $filterRules = null)
    {
        /** * @var \Lkt\WebPages\Generated\LktWebPageQueryBuilder $caller */
        list($builder) = Instantiator::getCustomQueryCaller(static::GENERATED_TYPE, $data, $processRules, $filterRules);
        return $builder;
    }

    /** * @return \Lkt\WebPages\LktWebPage[] */
    public static function getPage(int $page, Query $builder = null): array
    {
        /** @var \Lkt\WebPages\LktWebPage[] */
        $r = parent::getPage($page, $builder);
        return $r;
    }
}