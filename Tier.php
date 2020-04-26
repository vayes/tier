<?php

namespace Vayes\Tier;

use Vayes\Tier\Helper\RelatableTrait;
use Vayes\Tier\Helper\TimestampableTrait;
use Vayes\Tier\Helper\BlameableTrait;
use Vayes\Tier\Helper\SoftDeleteableTrait;
use function Vayes\Str\str_slug;

class Tier implements TierInterface
{
    use TimestampableTrait, BlameableTrait, SoftDeleteableTrait, RelatableTrait;

    /** @var string */
    private $id;

    /** @var string */
    private $business_id;

    /** @var string */
    private $name;

    /** @var string */
    private $slug;

    /** @var string */
    private $table_name;

    /** @var string|null */
    private $description;

    /** @var bool */
    private $hierarchical = false;

    /** @var bool */
    private $multilingual = false;

    /** @var bool */
    private $protected = false;

    /** @var TierProperty[] */
    protected $properties;

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

    /**
     * @return string
     */
    public function getBusinessId(): ?string
    {
        return $this->business_id;
    }

    /**
     * @param string $business_id
     * @return $this
     */
    public function setBusinessId(string $business_id): self
    {
        $this->business_id = $business_id;
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
        $this->slug = str_slug($this->name);
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

    public function getTableName(): ?string
    {
        return $this->table_name;
    }

    /**
     * @param string $table_name
     * @return $this
     */
    public function setTableName(string $table_name): self
    {
        $this->table_name = $table_name;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return $this
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function isHierarchical(): bool
    {
        return $this->hierarchical;
    }

    /**
     * @param bool $hierarchical
     * @return $this
     */
    public function setHierarchical(bool $hierarchical): self
    {
        $this->hierarchical = $hierarchical;
        return $this;
    }

    public function isProtected(): bool
    {
        return $this->protected;
    }

    public function isMultilingual(): bool
    {
        return $this->multilingual;
    }

    /**
     * @param bool $multilingual
     * @return Tier
     */
    public function setMultilingual(bool $multilingual): Tier
    {
        $this->multilingual = $multilingual;
        return $this;
    }

    /**
     * @param bool $protected
     * @return $this
     */
    public function setProtected(bool $protected): self
    {
        $this->protected = $protected;
        return $this;
    }

    /**
     * @return TierProperty[]
     */
    public function getProperties(): ?array
    {
        return $this->properties;
    }

    /**
     * @param TierProperty[] $properties
     * @return Tier
     */
    public function setProperties(array $properties): self
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * @return array
     */
    public function getColumnNames(): array
    {
        $cols = [];
        foreach ($this->getProperties() as $property) {
            $cols[$property->getColumnName()] = $property->getColumnName();
        }

        return $cols;
    }
}
