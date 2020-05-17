<?php

namespace Vayes\Tier;

class Field
{
    /** @var string */
    private $columnName;

    /** @var string */
    private $tableName;

    /** @var string */
    private $compoundName;

    /** @var string */
    private $columnSlug;

    /** @var string */
    private $tableSlug;

    /** @var string */
    private $compoundSlug;

    /** @var string */
    private $varType;

    /** @var string */
    private $modelName;

    /** @var bool */
    private $multilingual = false;

    /** @var string */
    private $identifier;

    public function getColumnName(): ?string
    {
        return $this->columnName;
    }

    /**
     * @param string $columnName
     * @return $this
     */
    public function setColumnName(string $columnName): self
    {
        $this->columnName = $columnName;
        $this->identifier = (string) $this->tableName . '|' . (string) $this->columnSlug;
        return $this;
    }

    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    /**
     * @param string $tableName
     * @return $this
     */
    public function setTableName(string $tableName): self
    {
        $this->tableName = $tableName;
        $this->identifier = (string) $this->tableName . '|' . (string) $this->columnSlug;
        return $this;
    }

    public function getCompoundName(): ?string
    {
        return $this->compoundName;
    }

    /**
     * @param string $compoundName
     * @return $this
     */
    public function setCompoundName(string $compoundName): self
    {
        $this->compoundName = $compoundName;
        return $this;
    }

    public function getColumnSlug(): ?string
    {
        return $this->columnSlug;
    }

    /**
     * @param string $columnSlug
     * @return $this
     */
    public function setColumnSlug(string $columnSlug): self
    {
        $this->columnSlug = $columnSlug;
        $this->compoundSlug = (string) $this->tableSlug . '|' . (string) $this->columnSlug;
        return $this;
    }

    public function getTableSlug(): string
    {
        return $this->tableSlug;
    }

    /**
     * @param string $tableSlug
     * @return $this
     */
    public function setTableSlug(string $tableSlug): self
    {
        $this->tableSlug = $tableSlug;
        $this->compoundSlug = (string) $this->tableSlug . '|' . (string) $this->columnSlug;
        return $this;
    }

    public function getCompoundSlug(): string
    {
        return $this->compoundSlug;
    }

    /**
     * @param string $compoundSlug
     * @return $this
     */
    public function setCompoundSlug(string $compoundSlug): self
    {
        $this->compoundSlug = $compoundSlug;
        return $this;
    }

    public function getVarType(): ?string
    {
        return $this->varType;
    }

    /**
     * @param string $varType
     * @return $this
     */
    public function setVarType(string $varType): self
    {
        $this->varType = $varType;
        return $this;
    }

    public function getModelName(): ?string
    {
        return $this->modelName;
    }

    /**
     * @param string $modelName
     * @return $this
     */
    public function setModelName(string $modelName): self
    {
        $this->modelName = $modelName;
        return $this;
    }

    public function isMultilingual(): bool
    {
        return $this->multilingual;
    }

    /**
     * @param bool $multilingual
     * @return $this
     */
    public function setMultilingual(bool $multilingual): self
    {
        $this->multilingual = $multilingual;
        return $this;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     * @return $this
     */
    public function setIdentifier(string $identifier): self
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @param string $tableAlias
     * @return string
     */
    public function getAliasedColumnName(string $tableAlias, bool $isMultilingual = false): string
    {
        return false === $isMultilingual
            ? $tableAlias . '.' . $this->getColumnName()
            : $tableAlias .'l' . '.' . $this->getColumnName();
    }
}
