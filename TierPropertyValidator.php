<?php

namespace Vayes\Tier;

use Vayes\Tier\Helper\TimestampableTrait;
use Vayes\Tier\Helper\BlameableTrait;
use Vayes\Tier\Helper\SoftDeleteableTrait;

class TierPropertyValidator
{
    use TimestampableTrait, BlameableTrait, SoftDeleteableTrait;

    /** @var string */
    private $id;

    /** @var string */
    private $tier_property_id;

    /** @var string */
    private $validator_id;

    /** @var string|null */
    private $message;

    /** @var string|null */
    private $argument_1;

    /** @var string|null */
    private $argument_2;

    /** @var bool */
    private $on_insert = true;

    /** @var bool */
    private $on_update = true;

    /** @var bool */
    private $on_delete = true;

    /** @var ValidationRule */
    protected $validator;

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

    public function getTierPropertyId(): ?string
    {
        return $this->tier_property_id;
    }

    /**
     * @param string $tier_property_id
     * @return $this
     */
    public function setTierPropertyId(string $tier_property_id): self
    {
        $this->tier_property_id = $tier_property_id;
        return $this;
    }

    public function getValidatorId(): ?string
    {
        return $this->validator_id;
    }

    /**
     * @param string $validator_id
     * @return $this
     */
    public function setValidatorId(string $validator_id): self
    {
        $this->validator_id = $validator_id;
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

    public function getArgument1(): ?string
    {
        return $this->argument_1;
    }

    /**
     * @param string|null $argument_1
     * @return $this
     */
    public function setArgument1(?string $argument_1): self
    {
        $this->argument_1 = $argument_1;
        return $this;
    }

    public function getArgument2(): ?string
    {
        return $this->argument_2;
    }

    /**
     * @param string|null $argument_2
     * @return $this
     */
    public function setArgument2(?string $argument_2): self
    {
        $this->argument_2 = $argument_2;
        return $this;
    }

    public function isOnInsert(): bool
    {
        return $this->on_insert;
    }

    /**
     * @param bool $on_insert
     * @return $this
     */
    public function setOnInsert(bool $on_insert): self
    {
        $this->on_insert = $on_insert;
        return $this;
    }

    public function isOnUpdate(): bool
    {
        return $this->on_update;
    }

    /**
     * @param bool $on_update
     * @return $this
     */
    public function setOnUpdate(bool $on_update): self
    {
        $this->on_update = $on_update;
        return $this;
    }

    public function isOnDelete(): bool
    {
        return $this->on_delete;
    }

    /**
     * @param bool $on_delete
     * @return $this
     */
    public function setOnDelete(bool $on_delete): self
    {
        $this->on_delete = $on_delete;
        return $this;
    }

    public function getValidator(): ValidationRule
    {
        return $this->validator;
    }

    /**
     * @param ValidationRule $validator
     * @return $this
     */
    public function setValidator(ValidationRule $validator): self
    {
        $this->validator = $validator;
        return $this;
    }
}
