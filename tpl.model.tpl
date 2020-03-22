<?php

namespace Prime\Model;

use Prime\Util\Bridge\Framework\BaseModel;
use Vayes\Tier\TierModelInterface;

class @tierModel extends BaseModel implements TierModelInterface
{
    protected $tierName = '@slug';

    public function __construct(?string $auxDB = null)
    {
        parent::__construct($auxDB);
    }
}
