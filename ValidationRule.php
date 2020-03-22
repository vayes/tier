<?php

namespace Vayes\Tier;

class ValidationRule
{
    /** @var string */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $class;

    /** @var string|null */
    private $message;

    /** @var string|null */
    private $usage;

    /** @var bool */
    private $argument_1 = false;

    /** @var bool */
    private $argument_2 = false;

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

    public function getClass(): ?string
    {
        return $this->class;
    }

    /**
     * @param string $class
     * @return $this
     */
    public function setClass(string $class): self
    {
        $this->class = $class;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     * @return $this
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }

    public function getUsage(): ?string
    {
        return $this->usage;
    }

    /**
     * @param string|null $usage
     * @return $this
     */
    public function setUsage(?string $usage): self
    {
        $this->usage = $usage;
        return $this;
    }

    public function getArgument1(): ?bool
    {
        return $this->argument_1;
    }

    /**
     * @param bool $argument_1
     * @return $this
     */
    public function setArgument1(bool $argument_1): self
    {
        $this->argument_1 = $argument_1;
        return $this;
    }

    public function getArgument2(): ?bool
    {
        return $this->argument_2;
    }

    /**
     * @param bool $argument_2
     * @return $this
     */
    public function setArgument2(bool $argument_2): self
    {
        $this->argument_2 = $argument_2;
        return $this;
    }
}
