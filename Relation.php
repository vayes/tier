<?php

namespace Vayes\Tier;

use Prime\Util\Bridge\Framework\BaseModel;

class Relation
{
    /** @var string */
    private $fieldSlug;

    /** @var BaseModel */
    private $owningSide;

    /** @var BaseModel */
    private $inverseSide;

    /** @var string */
    private $type;

    /** @var bool */
    private $nullable = false;

    public function getFieldSlug(): ?string
    {
        return $this->fieldSlug;
    }

    /**
     * @param string|null $fieldSlug
     * @return $this
     */
    public function setFieldSlug(?string $fieldSlug): self
    {
        $this->fieldSlug = $fieldSlug;
        return $this;
    }

    public function getOwningSide(): ?Field
    {
        return $this->owningSide;
    }

    /**
     * @param BaseModel $owningSide
     * @return $this
     */
    public function setOwningSide(BaseModel $owningSide): self
    {
        $this->owningSide = $owningSide;
        return $this;
    }

    public function getInverseSide(): ?BaseModel
    {
        return $this->inverseSide;
    }

    /**
     * @param BaseModel $inverseSide
     * @return $this
     */
    public function setInverseSide(BaseModel $inverseSide): self
    {
        $this->inverseSide = $inverseSide;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function isNullable(): ?bool
    {
        return $this->nullable;
    }

    /**
     * @param bool $nullable
     * @return $this
     */
    public function setNullable(bool $nullable): self
    {
        $this->nullable = $nullable;
        return $this;
    }
}
