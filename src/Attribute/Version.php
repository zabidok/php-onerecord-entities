<?php

namespace Zabidok\OneRecordEntities\Attribute;
#[\Attribute]
class Version
{
    public function __construct(public string $version) {}
}