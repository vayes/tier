<?php

namespace Vayes\Tier\Helper;

/**
 * @property-read $deleted_at
 * @property-read $deleted_by
 */
trait SoftDeleteableTrait
{
    /** @var \DateTimeInterface|null */
    private $deleted_at;

    /** @var string */
    private $deleted_by;

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deleted_at;
    }

    /**
     * @param \DateTimeInterface $deleted_at
     * @return $this
     */
    public function setDeletedAt(\DateTimeInterface $deleted_at): self
    {
        $this->deleted_at = $deleted_at;
        return $this;
    }

    public function getDeletedBy(): ?string
    {
        return $this->deleted_by;
    }

    /**
     * @param string $deleted_by
     * @return $this
     */
    public function setDeletedBy(string $deleted_by): self
    {
        $this->deleted_by = $deleted_by;
        return $this;
    }
}
