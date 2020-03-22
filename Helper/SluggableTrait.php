<?php

namespace Vayes\Tier\Helper;

/**
 * @property-read $slug
 */
trait SluggableTrait
{
    /** @var string */
    private $slug;

    /**
     * @return string
     */
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
}
