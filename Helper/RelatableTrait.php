<?php

namespace Vayes\Tier\Helper;

use Vayes\Tier\Enum\RelationType;

/**
 * @property-read $relations
 */
trait RelatableTrait
{
    /** @var string */
    private $relations;

    public function getRelations(): ?string
    {
        $blank = [
            RelationType::MANY_TO_ONE => [],
            RelationType::ONE_TO_MANY => [],
            RelationType::MANY_TO_MANY => [],
            RelationType::ONE_TO_ONE => [],
        ];

        return (null === $this->relations)
            ? json_encode($blank)
            : $this->relations
        ;
    }

    /**
     * @param string $relations
     * @return $this
     */
    public function setRelations(?string $relations): self
    {
        $this->relations = $relations;
        return $this;
    }

    /**
     * @param array $relation
     * @param string     $scope
     * @return $this
     */
    public function addRelation(array $relation, string $scope = RelationType::MANY_TO_ONE): self
    {
        $relations = json_decode($this->getRelations(), true);

        $scopeRelations = $relations[$scope];

        $this->relations = json_encode(array_merge($scopeRelations, $relation));
        return $this;
    }
}
