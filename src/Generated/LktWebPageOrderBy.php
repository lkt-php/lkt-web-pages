<?php  namespace Lkt\WebPages\Generated; use Lkt\QueryBuilding\OrderBy; class LktWebPageOrderBy extends OrderBy { const COMPONENT = 'lkt-web-page'; /** @return \Lkt\WebPages\Generated\LktWebPageOrderBy */ public static function ASC(string $field): static { /** @var \Lkt\WebPages\Generated\LktWebPageOrderBy $r */ $r = parent::ASC($field); return $r; } /** @return \Lkt\WebPages\Generated\LktWebPageOrderBy */ public static function DESC(string $field): static { /** @var \Lkt\WebPages\Generated\LktWebPageOrderBy $r */ $r = parent::DESC($field); return $r; } public function andIdASC() { return $this->andASC('id'); } public function andIdDESC() { return $this->andDESC('id'); } public static function idASC() { return static::ASC('id'); } public static function idDESC() { return static::DESC('id'); } public function andCreatedAtASC() { return $this->andASC('created_at'); } public function andCreatedAtDESC() { return $this->andDESC('created_at'); } public static function createdAtASC() { return static::ASC('created_at'); } public static function createdAtDESC() { return static::DESC('created_at'); } public function andUpdatedAtASC() { return $this->andASC('updated_at'); } public function andUpdatedAtDESC() { return $this->andDESC('updated_at'); } public static function updatedAtASC() { return static::ASC('updated_at'); } public static function updatedAtDESC() { return static::DESC('updated_at'); } public function andPublishedAtASC() { return $this->andASC('published_at'); } public function andPublishedAtDESC() { return $this->andDESC('published_at'); } public static function publishedAtASC() { return static::ASC('published_at'); } public static function publishedAtDESC() { return static::DESC('published_at'); } public function andStatusASC() { return $this->andASC('status'); } public function andStatusDESC() { return $this->andDESC('status'); } public static function statusASC() { return static::ASC('status'); } public static function statusDESC() { return static::DESC('status'); } public function andNameASC() { return $this->andASC('name'); } public function andNameDESC() { return $this->andDESC('name'); } public static function nameASC() { return static::ASC('name'); } public static function nameDESC() { return static::DESC('name'); } public function andSummaryASC() { return $this->andASC('summary'); } public function andSummaryDESC() { return $this->andDESC('summary'); } public static function summaryASC() { return static::ASC('summary'); } public static function summaryDESC() { return static::DESC('summary'); } public function andSlugASC() { return $this->andASC('slug'); } public function andSlugDESC() { return $this->andDESC('slug'); } public static function slugASC() { return static::ASC('slug'); } public static function slugDESC() { return static::DESC('slug'); } public function andSeoTitleASC() { return $this->andASC('seo_title'); } public function andSeoTitleDESC() { return $this->andDESC('seo_title'); } public static function seoTitleASC() { return static::ASC('seo_title'); } public static function seoTitleDESC() { return static::DESC('seo_title'); } public function andWebElementsASC() { return $this->andASC('web_elements'); } public function andWebElementsDESC() { return $this->andDESC('web_elements'); } public static function webElementsASC() { return static::ASC('web_elements'); } public static function webElementsDESC() { return static::DESC('web_elements'); }}