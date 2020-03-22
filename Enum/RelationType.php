<?php

namespace Vayes\Tier\Enum;

use Vayes\Enum\BaseEnum;

class RelationType extends BaseEnum
{
    const MANY_TO_ONE  = "ManyToOne";
    const ONE_TO_MANY  = "OneToMany";
    const MANY_TO_MANY = "ManyToMany";
    const ONE_TO_ONE   = "OneToOne";
}
