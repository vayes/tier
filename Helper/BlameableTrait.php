<?php

namespace Vayes\Tier\Helper;

/**
 * @property-read $created_by
 * @property-read $updated_by
 */
trait BlameableTrait
{
    /** @var string */
    private $created_by;

    /** @var string */
    private $updated_by;

    public function getCreatedBy(): ?string
    {
        return $this->created_by;
    }

    /**
     * @param string $created_by
     * @return $this
     */
    public function setCreatedBy(string $created_by): self
    {
        $this->created_by = $created_by;
        return $this;
    }

    public function getUpdatedBy(): ?string
    {
        return $this->updated_by;
    }

    /**
     * @param string $updated_by
     * @return $this
     */
    public function setUpdatedBy(string $updated_by): self
    {
        $this->updated_by = $updated_by;
        return $this;
    }
}
