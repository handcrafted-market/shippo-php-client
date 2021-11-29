<?php

namespace Handcrafted\Shippo\Meta;

use Handcrafted\Shippo\Mapper;

class ManifestError extends Mapper {

  protected string $code;

  protected string $message;

  public function code() {
    return $this->code;
  }

  public function message() {
    return $this->message;
  }

}