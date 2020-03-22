<?php

namespace Vayes\Tier;

class ComponentType
{
    /** @var string */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $element;

    /** @var string|null */
    private $attributes;

    /** @var string|null */
    private $html;

    /** @var bool */
    private $online = true;

    public function __construct($autoAssignUuid = false)
    {
        if (true === $autoAssignUuid) {
            $this->setId(uuid_create(UUID_VARIANT_DCE));
        }
    }

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
        return $this;
    }

    public function getElement(): ?string
    {
        return $this->element;
    }

    /**
     * @param string $element
     * @return $this
     */
    public function setElement(string $element): self
    {
        $this->element = $element;
        return $this;
    }

    public function getAttributes(): ?string
    {
        return $this->attributes;
    }

    /**
     * @param string|null $attributes
     * @return $this
     */
    public function setAttributes(?string $attributes): self
    {
        $this->attributes = $attributes;
        return $this;
    }

    public function getHtml(): ?string
    {
        return $this->html;
    }

    /**
     * @param string|null $html
     * @return $this
     */
    public function setHtml(?string $html): self
    {
        $this->html = $html;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOnline(): bool
    {
        return $this->online;
    }

    /**
     * @param bool $online
     * @return $this
     */
    public function setOnline(bool $online): self
    {
        $this->online = $online;
        return $this;
    }
}
