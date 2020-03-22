<?php

namespace Vayes\Tier;

use Vayes\Tier\Helper\TimestampableTrait;
use Vayes\Tier\Helper\BlameableTrait;
use Vayes\Tier\Helper\SoftDeleteableTrait;
use function Vayes\Str\str_slug;

class TierProperty
{
    use TimestampableTrait, BlameableTrait, SoftDeleteableTrait;

    /** @var string */
    private $id;

    /** @var string */
    private $tier_id;

    /** @var string */
    private $data_type_id;

    /** @var string */
    private $name;

    /** @var string */
    private $slug;

    /** @var string */
    private $column_name;

    /** @var string|null */
    private $column_option;

    /** @var bool */
    private $sortable = false;

    /** @var bool */
    private $filterable = false;

    /** @var bool */
    private $searchable = false;

    /** @var bool */
    private $translatable = false;

    /** @var bool */
    private $sluggable = false;

    /** @var bool */
    private $included_on_list = true;

    /** @var bool */
    private $included_on_detail = true;

    /** @var bool */
    private $allowed_on_post = true;

    /** @var bool */
    private $allowed_on_put = true;

    /** @var bool */
    private $allowed_on_patch = true;

    /** @var string|null */
    private $comment;

    /** @var TierPropertyValidator[] */
    protected $validators;

    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getTierId(): ?string
    {
        return $this->tier_id;
    }

    /**
     * @param string $tier_id
     * @return $this
     */
    public function setTierId(string $tier_id): self
    {
        $this->tier_id = $tier_id;
        return $this;
    }

    public function getDataTypeId(): ?string
    {
        return $this->data_type_id;
    }

    /**
     * @param string $data_type_id
     * @return $this
     */
    public function setDataTypeId(string $data_type_id): self
    {
        $this->data_type_id = $data_type_id;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        $this->slug = str_slug($name);
        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return $this
     */
    public function setSlug(string $slug): self
    {
        $this->slug = $slug;
        return $this;
    }

    public function getColumnName(): ?string
    {
        return $this->column_name;
    }

    /**
     * @param string $column_name
     * @return $this
     */
    public function setColumnName(string $column_name): self
    {
        $this->column_name = $column_name;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getColumnOption(): ?array
    {
        return json_decode($this->column_option, true);
    }

    /**
     * @param array|null $column_option
     * @return $this
     */
    public function setColumnOption(?array $column_option): self
    {
        $this->column_option = $column_option;
        return $this;
    }

    public function isSortable(): bool
    {
        return $this->sortable;
    }

    /**
     * @param bool $sortable
     * @return $this
     */
    public function setSortable(bool $sortable): self
    {
        $this->sortable = $sortable;
        return $this;
    }

    public function isFilterable(): bool
    {
        return $this->filterable;
    }

    /**
     * @param bool $filterable
     * @return $this
     */
    public function setFilterable(bool $filterable): self
    {
        $this->filterable = $filterable;
        return $this;
    }

    public function isSearchable(): bool
    {
        return $this->searchable;
    }

    /**
     * @param bool $searchable
     * @return $this
     */
    public function setSearchable(bool $searchable): self
    {
        $this->searchable = $searchable;
        return $this;
    }

    public function isTranslatable(): bool
    {
        return $this->translatable;
    }

    /**
     * @param bool $translatable
     * @return $this
     */
    public function setTranslatable(bool $translatable): self
    {
        $this->translatable = $translatable;
        return $this;
    }

    public function getSluggable(): bool
    {
        return $this->sluggable;
    }

    /**
     * @param bool $sluggable
     * @return $this
     */
    public function setSluggable(bool $sluggable): self
    {
        $this->sluggable = $sluggable;
        return $this;
    }

    public function isIncludedOnList(): bool
    {
        return $this->included_on_list;
    }

    /**
     * @param bool $included_on_list
     * @return $this
     */
    public function setIncludedOnList(bool $included_on_list): self
    {
        $this->included_on_list = $included_on_list;
        return $this;
    }

    public function isIncludedOnDetail(): bool
    {
        return $this->included_on_detail;
    }

    /**
     * @param bool $included_on_detail
     * @return $this
     */
    public function setIncludedOnDetail(bool $included_on_detail): self
    {
        $this->included_on_detail = $included_on_detail;
        return $this;
    }

    public function isAllowedOnPost(): bool
    {
        return $this->allowed_on_post;
    }

    /**
     * @param bool $allowed_on_post
     * @return $this
     */
    public function setAllowedOnPost(bool $allowed_on_post): self
    {
        $this->allowed_on_post = $allowed_on_post;
        return $this;
    }

    public function isAllowedOnPut(): bool
    {
        return $this->allowed_on_put;
    }

    /**
     * @param bool $allowed_on_put
     * @return $this
     */
    public function setAllowedOnPut(bool $allowed_on_put): self
    {
        $this->allowed_on_put = $allowed_on_put;
        return $this;
    }

    public function isAllowedOnPatch(): bool
    {
        return $this->allowed_on_patch;
    }

    /**
     * @param bool $allowed_on_patch
     * @return $this
     */
    public function setAllowedOnPatch(bool $allowed_on_patch): self
    {
        $this->allowed_on_patch = $allowed_on_patch;
        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param string|null $comment
     * @return $this
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return TierPropertyValidator[]
     */
    public function getValidators(): ?array
    {
        return $this->validators;
    }

    /**
     * @param TierPropertyValidator[] $validators
     * @return TierProperty
     */
    public function setValidators(array $validators): self
    {
        $this->validators = $validators;
        return $this;
    }
}
