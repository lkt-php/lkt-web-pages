<?php  namespace Lkt\WebPages\Generated; use Lkt\QueryBuilding\Query; use Lkt\QueryBuilding\DateIntervals\AbstractInterval; use Lkt\Factory\Instantiator\Instantiator; use Lkt\Factory\Schemas\Schema; class LktWebPageQueryBuilder extends Query { const COMPONENT = 'lkt-web-page'; /** @return \Lkt\WebPages\Generated\LktWebPageQueryBuilder */ public static function getCaller() { $schema = Schema::get(static::COMPONENT); /** @var \Lkt\WebPages\Generated\LktWebPageQueryBuilder $r */ $r = static::table($schema->getTable()); Instantiator::prepareQueryCaller(static::COMPONENT, $r); return $r; } public function andIdEqual(int $value) { return $this->andIntegerEqual('id', $value); } public function andIdNot(int $value) { return $this->andIntegerNot('id', $value); } public function andIdGreaterThan(int $value) { return $this->andIntegerGreaterThan('id', $value); } public function andIdGreaterOrEqualThan(int $value) { return $this->andIntegerGreaterOrEqualThan('id', $value); } public function andIdLowerThan(int $value) { return $this->andIntegerLowerThan('id', $value); } public function andIdLowerOrEqualThan(int $value) { return $this->andIntegerLowerOrEqualThan('id', $value); } public function andIdBetween(int $from, int $to) { return $this->andIntegerBetween('id', $from, $to); } public function andIdIn(array $values) { return $this->andIntegerIn('id', $values); } public function andIdNotIn(array $values) { return $this->andIntegerNotIn('id', $values); } public function andIdEqualToField(string $component, string $field ) { return $this->andFieldEqualToField('id', $component, $field); } public function orIdEqual(int $value) { return $this->orIntegerEqual('id', $value); } public function orIdNot(int $value) { return $this->orIntegerNot('id', $value); } public function orIdGreaterThan(int $value) { return $this->orIntegerGreaterThan('id', $value); } public function orIdGreaterOrEqualThan(int $value) { return $this->orIntegerGreaterOrEqualThan('id', $value); } public function orIdLowerThan(int $value) { return $this->orIntegerLowerThan('id', $value); } public function orIdLowerOrEqualThan(int $value) { return $this->orIntegerLowerOrEqualThan('id', $value); } public function orIdBetween(int $from, int $to) { return $this->orIntegerBetween('id', $from, $to); } public function orIdIn(array $values) { return $this->orIntegerIn('id', $values); } public function orIdNotIn(array $values) { return $this->orIntegerNotIn('id', $values); } public function orIdEqualToField(string $component, string $field ) { return $this->orFieldEqualToField('id', $component, $field); } public function andCreatedAtBetween(string $from, string $to) { return $this->andDatetimeBetween('created_at', $from, $to); } public function andCreatedAtEqual(string $value) { return $this->andDatetimeEqual('created_at', $value); } public function andCreatedAtNot(string $value) { return $this->andDatetimeNot('created_at', $value); } public function andCreatedAtGreaterOrEqualThan(string $value, AbstractInterval $interval = null) { return $this->andDatetimeGreaterOrEqualThan('created_at', $value, $interval); } public function andCreatedAtGreaterOrEqualThanNow(AbstractInterval $interval = null) { return $this->andDatetimeGreaterOrEqualThanNow('created_at', $interval); } public function andCreatedAtGreaterThan(string $value, AbstractInterval $interval = null) { return $this->andDatetimeGreaterThan('created_at', $value, $interval); } public function andCreatedAtGreaterThanNow(AbstractInterval $interval = null) { return $this->andDatetimeGreaterThanNow('created_at', $interval); } public function andCreatedAtLowerOrEqualThan(string $value, AbstractInterval $interval = null) { return $this->andDatetimeLowerOrEqualThan('created_at', $value, $interval); } public function andCreatedAtLowerOrEqualThanNow(AbstractInterval $interval = null) { return $this->andDatetimeLowerOrEqualThanNow('created_at', $interval); } public function andCreatedAtLowerThan(string $value, AbstractInterval $interval = null) { return $this->andDatetimeLowerThan('created_at', $value, $interval); } public function andCreatedAtLowerThanNow(AbstractInterval $interval = null) { return $this->andDatetimeLowerThanNow('created_at', $interval); } public function andCreatedAtLike(string $value) { return $this->andDatetimeLike('created_at', $value); } public function andCreatedAtNotLike(string $value) { return $this->andDatetimeNotLike('created_at', $value); } public function andCreatedAtBeginsLike(string $value) { return $this->andDatetimeBeginsLike('created_at', $value); } public function andCreatedAtNotBeginsLike(string $value) { return $this->andDatetimeNotBeginsLike('created_at', $value); } public function andCreatedAtEndsLike(string $value) { return $this->andDatetimeEndsLike('created_at', $value); } public function andCreatedAtNotEndsLike(string $value) { return $this->andDatetimeNotEndsLike('created_at', $value); } public function orCreatedAtBetween(string $from, string $to) { return $this->orDatetimeBetween('created_at', $from, $to); } public function orCreatedAtEqual(string $value) { return $this->orDatetimeEqual('created_at', $value); } public function orCreatedAtNot(string $value) { return $this->orDatetimeNot('created_at', $value); } public function orCreatedAtGreaterOrEqualThan(string $value, AbstractInterval $interval = null) { return $this->orDatetimeGreaterOrEqualThan('created_at', $value, $interval); } public function orCreatedAtGreaterOrEqualThanNow(AbstractInterval $interval = null) { return $this->orDatetimeGreaterOrEqualThanNow('created_at', $interval); } public function orCreatedAtGreaterThan(string $value, AbstractInterval $interval = null) { return $this->orDatetimeGreaterThan('created_at', $value, $interval); } public function orCreatedAtGreaterThanNow(AbstractInterval $interval = null) { return $this->orDatetimeGreaterThanNow('created_at', $interval); } public function orCreatedAtLowerOrEqualThan(string $value, AbstractInterval $interval = null) { return $this->orDatetimeLowerOrEqualThan('created_at', $value, $interval); } public function orCreatedAtLowerOrEqualThanNow(AbstractInterval $interval = null) { return $this->orDatetimeLowerOrEqualThanNow('created_at', $interval); } public function orCreatedAtLowerThan(string $value, AbstractInterval $interval = null) { return $this->orDatetimeLowerThan('created_at', $value, $interval); } public function orCreatedAtLowerThanNow(AbstractInterval $interval = null) { return $this->orDatetimeLowerThanNow('created_at', $interval); } public function orCreatedAtLike(string $value) { return $this->orDatetimeLike('created_at', $value); } public function orCreatedAtNotLike(string $value) { return $this->orDatetimeNotLike('created_at', $value); } public function orCreatedAtBeginsLike(string $value) { return $this->orDatetimeBeginsLike('created_at', $value); } public function orCreatedAtNotBeginsLike(string $value) { return $this->orDatetimeNotBeginsLike('created_at', $value); } public function orCreatedAtEndsLike(string $value) { return $this->orDatetimeEndsLike('created_at', $value); } public function orCreatedAtNotEndsLike(string $value) { return $this->orDatetimeNotEndsLike('created_at', $value); } public function andUpdatedAtBetween(string $from, string $to) { return $this->andDatetimeBetween('updated_at', $from, $to); } public function andUpdatedAtEqual(string $value) { return $this->andDatetimeEqual('updated_at', $value); } public function andUpdatedAtNot(string $value) { return $this->andDatetimeNot('updated_at', $value); } public function andUpdatedAtGreaterOrEqualThan(string $value, AbstractInterval $interval = null) { return $this->andDatetimeGreaterOrEqualThan('updated_at', $value, $interval); } public function andUpdatedAtGreaterOrEqualThanNow(AbstractInterval $interval = null) { return $this->andDatetimeGreaterOrEqualThanNow('updated_at', $interval); } public function andUpdatedAtGreaterThan(string $value, AbstractInterval $interval = null) { return $this->andDatetimeGreaterThan('updated_at', $value, $interval); } public function andUpdatedAtGreaterThanNow(AbstractInterval $interval = null) { return $this->andDatetimeGreaterThanNow('updated_at', $interval); } public function andUpdatedAtLowerOrEqualThan(string $value, AbstractInterval $interval = null) { return $this->andDatetimeLowerOrEqualThan('updated_at', $value, $interval); } public function andUpdatedAtLowerOrEqualThanNow(AbstractInterval $interval = null) { return $this->andDatetimeLowerOrEqualThanNow('updated_at', $interval); } public function andUpdatedAtLowerThan(string $value, AbstractInterval $interval = null) { return $this->andDatetimeLowerThan('updated_at', $value, $interval); } public function andUpdatedAtLowerThanNow(AbstractInterval $interval = null) { return $this->andDatetimeLowerThanNow('updated_at', $interval); } public function andUpdatedAtLike(string $value) { return $this->andDatetimeLike('updated_at', $value); } public function andUpdatedAtNotLike(string $value) { return $this->andDatetimeNotLike('updated_at', $value); } public function andUpdatedAtBeginsLike(string $value) { return $this->andDatetimeBeginsLike('updated_at', $value); } public function andUpdatedAtNotBeginsLike(string $value) { return $this->andDatetimeNotBeginsLike('updated_at', $value); } public function andUpdatedAtEndsLike(string $value) { return $this->andDatetimeEndsLike('updated_at', $value); } public function andUpdatedAtNotEndsLike(string $value) { return $this->andDatetimeNotEndsLike('updated_at', $value); } public function orUpdatedAtBetween(string $from, string $to) { return $this->orDatetimeBetween('updated_at', $from, $to); } public function orUpdatedAtEqual(string $value) { return $this->orDatetimeEqual('updated_at', $value); } public function orUpdatedAtNot(string $value) { return $this->orDatetimeNot('updated_at', $value); } public function orUpdatedAtGreaterOrEqualThan(string $value, AbstractInterval $interval = null) { return $this->orDatetimeGreaterOrEqualThan('updated_at', $value, $interval); } public function orUpdatedAtGreaterOrEqualThanNow(AbstractInterval $interval = null) { return $this->orDatetimeGreaterOrEqualThanNow('updated_at', $interval); } public function orUpdatedAtGreaterThan(string $value, AbstractInterval $interval = null) { return $this->orDatetimeGreaterThan('updated_at', $value, $interval); } public function orUpdatedAtGreaterThanNow(AbstractInterval $interval = null) { return $this->orDatetimeGreaterThanNow('updated_at', $interval); } public function orUpdatedAtLowerOrEqualThan(string $value, AbstractInterval $interval = null) { return $this->orDatetimeLowerOrEqualThan('updated_at', $value, $interval); } public function orUpdatedAtLowerOrEqualThanNow(AbstractInterval $interval = null) { return $this->orDatetimeLowerOrEqualThanNow('updated_at', $interval); } public function orUpdatedAtLowerThan(string $value, AbstractInterval $interval = null) { return $this->orDatetimeLowerThan('updated_at', $value, $interval); } public function orUpdatedAtLowerThanNow(AbstractInterval $interval = null) { return $this->orDatetimeLowerThanNow('updated_at', $interval); } public function orUpdatedAtLike(string $value) { return $this->orDatetimeLike('updated_at', $value); } public function orUpdatedAtNotLike(string $value) { return $this->orDatetimeNotLike('updated_at', $value); } public function orUpdatedAtBeginsLike(string $value) { return $this->orDatetimeBeginsLike('updated_at', $value); } public function orUpdatedAtNotBeginsLike(string $value) { return $this->orDatetimeNotBeginsLike('updated_at', $value); } public function orUpdatedAtEndsLike(string $value) { return $this->orDatetimeEndsLike('updated_at', $value); } public function orUpdatedAtNotEndsLike(string $value) { return $this->orDatetimeNotEndsLike('updated_at', $value); } public function andPublishedAtBetween(string $from, string $to) { return $this->andDatetimeBetween('published_at', $from, $to); } public function andPublishedAtEqual(string $value) { return $this->andDatetimeEqual('published_at', $value); } public function andPublishedAtNot(string $value) { return $this->andDatetimeNot('published_at', $value); } public function andPublishedAtGreaterOrEqualThan(string $value, AbstractInterval $interval = null) { return $this->andDatetimeGreaterOrEqualThan('published_at', $value, $interval); } public function andPublishedAtGreaterOrEqualThanNow(AbstractInterval $interval = null) { return $this->andDatetimeGreaterOrEqualThanNow('published_at', $interval); } public function andPublishedAtGreaterThan(string $value, AbstractInterval $interval = null) { return $this->andDatetimeGreaterThan('published_at', $value, $interval); } public function andPublishedAtGreaterThanNow(AbstractInterval $interval = null) { return $this->andDatetimeGreaterThanNow('published_at', $interval); } public function andPublishedAtLowerOrEqualThan(string $value, AbstractInterval $interval = null) { return $this->andDatetimeLowerOrEqualThan('published_at', $value, $interval); } public function andPublishedAtLowerOrEqualThanNow(AbstractInterval $interval = null) { return $this->andDatetimeLowerOrEqualThanNow('published_at', $interval); } public function andPublishedAtLowerThan(string $value, AbstractInterval $interval = null) { return $this->andDatetimeLowerThan('published_at', $value, $interval); } public function andPublishedAtLowerThanNow(AbstractInterval $interval = null) { return $this->andDatetimeLowerThanNow('published_at', $interval); } public function andPublishedAtLike(string $value) { return $this->andDatetimeLike('published_at', $value); } public function andPublishedAtNotLike(string $value) { return $this->andDatetimeNotLike('published_at', $value); } public function andPublishedAtBeginsLike(string $value) { return $this->andDatetimeBeginsLike('published_at', $value); } public function andPublishedAtNotBeginsLike(string $value) { return $this->andDatetimeNotBeginsLike('published_at', $value); } public function andPublishedAtEndsLike(string $value) { return $this->andDatetimeEndsLike('published_at', $value); } public function andPublishedAtNotEndsLike(string $value) { return $this->andDatetimeNotEndsLike('published_at', $value); } public function orPublishedAtBetween(string $from, string $to) { return $this->orDatetimeBetween('published_at', $from, $to); } public function orPublishedAtEqual(string $value) { return $this->orDatetimeEqual('published_at', $value); } public function orPublishedAtNot(string $value) { return $this->orDatetimeNot('published_at', $value); } public function orPublishedAtGreaterOrEqualThan(string $value, AbstractInterval $interval = null) { return $this->orDatetimeGreaterOrEqualThan('published_at', $value, $interval); } public function orPublishedAtGreaterOrEqualThanNow(AbstractInterval $interval = null) { return $this->orDatetimeGreaterOrEqualThanNow('published_at', $interval); } public function orPublishedAtGreaterThan(string $value, AbstractInterval $interval = null) { return $this->orDatetimeGreaterThan('published_at', $value, $interval); } public function orPublishedAtGreaterThanNow(AbstractInterval $interval = null) { return $this->orDatetimeGreaterThanNow('published_at', $interval); } public function orPublishedAtLowerOrEqualThan(string $value, AbstractInterval $interval = null) { return $this->orDatetimeLowerOrEqualThan('published_at', $value, $interval); } public function orPublishedAtLowerOrEqualThanNow(AbstractInterval $interval = null) { return $this->orDatetimeLowerOrEqualThanNow('published_at', $interval); } public function orPublishedAtLowerThan(string $value, AbstractInterval $interval = null) { return $this->orDatetimeLowerThan('published_at', $value, $interval); } public function orPublishedAtLowerThanNow(AbstractInterval $interval = null) { return $this->orDatetimeLowerThanNow('published_at', $interval); } public function orPublishedAtLike(string $value) { return $this->orDatetimeLike('published_at', $value); } public function orPublishedAtNotLike(string $value) { return $this->orDatetimeNotLike('published_at', $value); } public function orPublishedAtBeginsLike(string $value) { return $this->orDatetimeBeginsLike('published_at', $value); } public function orPublishedAtNotBeginsLike(string $value) { return $this->orDatetimeNotBeginsLike('published_at', $value); } public function orPublishedAtEndsLike(string $value) { return $this->orDatetimeEndsLike('published_at', $value); } public function orPublishedAtNotEndsLike(string $value) { return $this->orDatetimeNotEndsLike('published_at', $value); } public function andStatusEqual(string $value) { return $this->andStringEqual('status', $value); } public function andStatusNot(string $value) { return $this->andStringNot('status', $value); } public function andStatusLike(string $value) { return $this->andStringLike('status', $value); } public function andStatusNotLike(string $value) { return $this->andStringNotLike('status', $value); } public function andStatusBeginsLike(string $value) { return $this->andStringBeginsLike('status', $value); } public function andStatusNotBeginsLike(string $value) { return $this->andStringNotBeginsLike('status', $value); } public function andStatusEndsLike(string $value) { return $this->andStringEndsLike('status', $value); } public function andStatusNotEndsLike(string $value) { return $this->andStringNotEndsLike('status', $value); } public function andStatusIn(array $values) { return $this->andStringIn('status', $values); } public function andStatusNotIn(array $values) { return $this->andStringNotIn('status', $values); } public function andStatusIsDraft() { return $this->andStringEqual('status', 'draft'); } public function andStatusIsNotDraft() { return $this->andStringNot('status', 'draft'); } public function andStatusIsPublic() { return $this->andStringEqual('status', 'public'); } public function andStatusIsNotPublic() { return $this->andStringNot('status', 'public'); } public function andStatusIsScheduled() { return $this->andStringEqual('status', 'scheduled'); } public function andStatusIsNotScheduled() { return $this->andStringNot('status', 'scheduled'); } public function andStatusIsConfidential() { return $this->andStringEqual('status', 'confidential'); } public function andStatusIsNotConfidential() { return $this->andStringNot('status', 'confidential'); } public function orStatusEqual(string $value) { return $this->orStringEqual('status', $value); } public function orStatusNot(string $value) { return $this->orStringNot('status', $value); } public function orStatusLike(string $value) { return $this->orStringLike('status', $value); } public function orStatusNotLike(string $value) { return $this->orStringNotLike('status', $value); } public function orStatusBeginsLike(string $value) { return $this->orStringBeginsLike('status', $value); } public function orStatusNotBeginsLike(string $value) { return $this->orStringNotBeginsLike('status', $value); } public function orStatusEndsLike(string $value) { return $this->orStringEndsLike('status', $value); } public function orStatusNotEndsLike(string $value) { return $this->orStringNotEndsLike('status', $value); } public function orStatusIn(array $values) { return $this->orStringIn('status', $values); } public function orStatusNotIn(array $values) { return $this->orStringNotIn('status', $values); } public function orStatusIsDraft() { return $this->orStringEqual('status', 'draft'); } public function orStatusIsNotDraft() { return $this->orStringNot('status', 'draft'); } public function orStatusIsPublic() { return $this->orStringEqual('status', 'public'); } public function orStatusIsNotPublic() { return $this->orStringNot('status', 'public'); } public function orStatusIsScheduled() { return $this->orStringEqual('status', 'scheduled'); } public function orStatusIsNotScheduled() { return $this->orStringNot('status', 'scheduled'); } public function orStatusIsConfidential() { return $this->orStringEqual('status', 'confidential'); } public function orStatusIsNotConfidential() { return $this->orStringNot('status', 'confidential'); } public function andNameEqual(string $value) { return $this->andi18nStringEqual('name', $value); } public function andNameNot(string $value) { return $this->andi18nStringNot('name', $value); } public function andNameLike(string $value) { return $this->andi18nStringLike('name', $value); } public function andNameNotLike(string $value) { return $this->andi18nStringNotLike('name', $value); } public function andNameBeginsLike(string $value) { return $this->andi18nStringBeginsLike('name', $value); } public function andNameNotBeginsLike(string $value) { return $this->andi18nStringNotBeginsLike('name', $value); } public function andNameEndsLike(string $value) { return $this->andi18nStringEndsLike('name', $value); } public function andNameNotEndsLike(string $value) { return $this->andi18nStringNotEndsLike('name', $value); } public function andNameIn(array $values) { return $this->andi18nStringIn('name', $values); } public function andNameNotIn(array $values) { return $this->andi18nStringNotIn('name', $values); } public function orNameEqual(string $value) { return $this->ori18nStringEqual('name', $value); } public function orNameNot(string $value) { return $this->ori18nStringNot('name', $value); } public function orNameLike(string $value) { return $this->ori18nStringLike('name', $value); } public function orNameNotLike(string $value) { return $this->ori18nStringNotLike('name', $value); } public function orNameBeginsLike(string $value) { return $this->ori18nStringBeginsLike('name', $value); } public function orNameNotBeginsLike(string $value) { return $this->ori18nStringNotBeginsLike('name', $value); } public function orNameEndsLike(string $value) { return $this->ori18nStringEndsLike('name', $value); } public function orNameNotEndsLike(string $value) { return $this->ori18nStringNotEndsLike('name', $value); } public function orNameIn(array $values) { return $this->ori18nStringIn('name', $values); } public function orNameNotIn(array $values) { return $this->ori18nStringNotIn('name', $values); } public function andSummaryEqual(string $value) { return $this->andi18nStringEqual('summary', $value); } public function andSummaryNot(string $value) { return $this->andi18nStringNot('summary', $value); } public function andSummaryLike(string $value) { return $this->andi18nStringLike('summary', $value); } public function andSummaryNotLike(string $value) { return $this->andi18nStringNotLike('summary', $value); } public function andSummaryBeginsLike(string $value) { return $this->andi18nStringBeginsLike('summary', $value); } public function andSummaryNotBeginsLike(string $value) { return $this->andi18nStringNotBeginsLike('summary', $value); } public function andSummaryEndsLike(string $value) { return $this->andi18nStringEndsLike('summary', $value); } public function andSummaryNotEndsLike(string $value) { return $this->andi18nStringNotEndsLike('summary', $value); } public function andSummaryIn(array $values) { return $this->andi18nStringIn('summary', $values); } public function andSummaryNotIn(array $values) { return $this->andi18nStringNotIn('summary', $values); } public function orSummaryEqual(string $value) { return $this->ori18nStringEqual('summary', $value); } public function orSummaryNot(string $value) { return $this->ori18nStringNot('summary', $value); } public function orSummaryLike(string $value) { return $this->ori18nStringLike('summary', $value); } public function orSummaryNotLike(string $value) { return $this->ori18nStringNotLike('summary', $value); } public function orSummaryBeginsLike(string $value) { return $this->ori18nStringBeginsLike('summary', $value); } public function orSummaryNotBeginsLike(string $value) { return $this->ori18nStringNotBeginsLike('summary', $value); } public function orSummaryEndsLike(string $value) { return $this->ori18nStringEndsLike('summary', $value); } public function orSummaryNotEndsLike(string $value) { return $this->ori18nStringNotEndsLike('summary', $value); } public function orSummaryIn(array $values) { return $this->ori18nStringIn('summary', $values); } public function orSummaryNotIn(array $values) { return $this->ori18nStringNotIn('summary', $values); } public function andSlugEqual(string $value) { return $this->andi18nStringEqual('slug', $value); } public function andSlugNot(string $value) { return $this->andi18nStringNot('slug', $value); } public function andSlugLike(string $value) { return $this->andi18nStringLike('slug', $value); } public function andSlugNotLike(string $value) { return $this->andi18nStringNotLike('slug', $value); } public function andSlugBeginsLike(string $value) { return $this->andi18nStringBeginsLike('slug', $value); } public function andSlugNotBeginsLike(string $value) { return $this->andi18nStringNotBeginsLike('slug', $value); } public function andSlugEndsLike(string $value) { return $this->andi18nStringEndsLike('slug', $value); } public function andSlugNotEndsLike(string $value) { return $this->andi18nStringNotEndsLike('slug', $value); } public function andSlugIn(array $values) { return $this->andi18nStringIn('slug', $values); } public function andSlugNotIn(array $values) { return $this->andi18nStringNotIn('slug', $values); } public function orSlugEqual(string $value) { return $this->ori18nStringEqual('slug', $value); } public function orSlugNot(string $value) { return $this->ori18nStringNot('slug', $value); } public function orSlugLike(string $value) { return $this->ori18nStringLike('slug', $value); } public function orSlugNotLike(string $value) { return $this->ori18nStringNotLike('slug', $value); } public function orSlugBeginsLike(string $value) { return $this->ori18nStringBeginsLike('slug', $value); } public function orSlugNotBeginsLike(string $value) { return $this->ori18nStringNotBeginsLike('slug', $value); } public function orSlugEndsLike(string $value) { return $this->ori18nStringEndsLike('slug', $value); } public function orSlugNotEndsLike(string $value) { return $this->ori18nStringNotEndsLike('slug', $value); } public function orSlugIn(array $values) { return $this->ori18nStringIn('slug', $values); } public function orSlugNotIn(array $values) { return $this->ori18nStringNotIn('slug', $values); } public function andSeoTitleEqual(string $value) { return $this->andi18nStringEqual('seo_title', $value); } public function andSeoTitleNot(string $value) { return $this->andi18nStringNot('seo_title', $value); } public function andSeoTitleLike(string $value) { return $this->andi18nStringLike('seo_title', $value); } public function andSeoTitleNotLike(string $value) { return $this->andi18nStringNotLike('seo_title', $value); } public function andSeoTitleBeginsLike(string $value) { return $this->andi18nStringBeginsLike('seo_title', $value); } public function andSeoTitleNotBeginsLike(string $value) { return $this->andi18nStringNotBeginsLike('seo_title', $value); } public function andSeoTitleEndsLike(string $value) { return $this->andi18nStringEndsLike('seo_title', $value); } public function andSeoTitleNotEndsLike(string $value) { return $this->andi18nStringNotEndsLike('seo_title', $value); } public function andSeoTitleIn(array $values) { return $this->andi18nStringIn('seo_title', $values); } public function andSeoTitleNotIn(array $values) { return $this->andi18nStringNotIn('seo_title', $values); } public function orSeoTitleEqual(string $value) { return $this->ori18nStringEqual('seo_title', $value); } public function orSeoTitleNot(string $value) { return $this->ori18nStringNot('seo_title', $value); } public function orSeoTitleLike(string $value) { return $this->ori18nStringLike('seo_title', $value); } public function orSeoTitleNotLike(string $value) { return $this->ori18nStringNotLike('seo_title', $value); } public function orSeoTitleBeginsLike(string $value) { return $this->ori18nStringBeginsLike('seo_title', $value); } public function orSeoTitleNotBeginsLike(string $value) { return $this->ori18nStringNotBeginsLike('seo_title', $value); } public function orSeoTitleEndsLike(string $value) { return $this->ori18nStringEndsLike('seo_title', $value); } public function orSeoTitleNotEndsLike(string $value) { return $this->ori18nStringNotEndsLike('seo_title', $value); } public function orSeoTitleIn(array $values) { return $this->ori18nStringIn('seo_title', $values); } public function orSeoTitleNotIn(array $values) { return $this->ori18nStringNotIn('seo_title', $values); } public function andWebElementsContains($value) { return $this->andForeignKeysContains('web_elements', $value); } public function orWebElementsContains($value) { return $this->orForeignKeysContains('web_elements', $value); } }