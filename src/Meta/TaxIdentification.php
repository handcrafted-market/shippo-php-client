<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Enum\TaxIdType;
use Handcrafted\Shippo\MapperTrait;

class TaxIdentification {

  use MapperTrait;

  public readonly ?string $number;

  public readonly TaxIdType $type;

  public function __construct(\stdClass $source) {
    $this->type = TaxIdType::from($source->type);
    $this->map($source);
  }

}