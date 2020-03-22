<?php

namespace Vayes\Tier\Helper;

/**
 * @property-read \DateTimeInterface $created_at
 * @property-read \DateTimeInterface $updated_at
 */
trait TimestampableTrait
{
    /** @var \DateTimeInterface */
    private $created_at;

    /** @var \DateTimeInterface */
    private $updated_at;

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    /**
     * @param \DateTimeInterface $created_at
     * @return $this
     */
    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    /**
     * @param \DateTimeInterface $updated_at
     * @return $this
     */
    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;
        return $this;
    }
}
