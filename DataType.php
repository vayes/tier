<?php

namespace Vayes\Tier;

class DataType
{
    /** @var string */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $field_type;

    /** @var string */
    private $var_type;

    /** @var string */
    private $forge;

    /** @var string|null */
    private $config;

    /** @var bool */
    private $active = true;

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

    public function getFieldType(): ?string
    {
        return $this->field_type;
    }

    /**
     * @param string $field_type
     * @return $this
     */
    public function setFieldType(string $field_type): self
    {
        $this->field_type = $field_type;
        return $this;
    }

    public function getVarType(): ?string
    {
        return $this->var_type;
    }

    /**
     * @param string $var_type
     * @return $this
     */
    public function setVarType(string $var_type): self
    {
        $this->var_type = $var_type;
        return $this;
    }

    public function getForge(): ?array
    {
        return json_decode($this->forge, true);
    }

    /**
     * @param array $forge
     * @return $this
     */
    public function setForge(array $forge): self
    {
        $this->forge = json_encode($forge);
        return $this;
    }

    public function getConfig(): ?string
    {
        return json_decode($this->config, true);
    }

    /**
     * @param array|null $config
     * @return $this
     */
    public function setConfig(?array $config): self
    {
        $this->config = json_encode($config);
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return $this
     */
    public function setActive(bool $active): self
    {
        $this->active = $active;
        return $this;
    }
}
