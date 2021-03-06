<?php

namespace Handcrafted\Shippo\Resource;

use Handcrafted\Shippo\MapperTrait;
use Handcrafted\Shippo\Meta\Message;
use Handcrafted\Shippo\Meta\ServiceLevel;

class Rate {

  use MapperTrait;

  /**
   * @var string
   */
  public readonly string $objectCreated;

  /**
   * @var string
   */
  public readonly string $objectId;

  /**
   * @var string
   */
  public readonly string $objectOwner;

  /**
   * @var string
   */
  public readonly string $shipment;

  /**
   * @var string[]
   */
  public readonly array $attributes;

  /**
   * @var string
   */
  public readonly string $amountLocal;

  /**
   * @var string
   */
  public readonly string $currencyLocal;

  /**
   * @var string
   */
  public readonly string $amount;

  /**
   * @var string
   */
  public readonly string $currency;

  /**
   * @var string
   */
  public readonly string $provider;

  /**
   * @var string
   */
  public readonly string $providerImage75;

  /**
   * @var string
   */
  public readonly string $providerImage200;

  /**
   * @var ServiceLevel
   */
  public readonly ServiceLevel $serviceLevel;

  /**
   * @var integer
   */
  public readonly int $estimatedDays;

  /**
   * @var string
   */
  public readonly string $durationTerms;

  /**
   * @var string
   */
  public readonly string $carrierAccount;

  /**
   * @var string
   */
  public readonly string $zone;

  /**
   * @var \Handcrafted\Shippo\Meta\Message[]
   */
  public readonly array $messages;

  /**
   * @var bool
   */
  public readonly bool $test;

  public function __construct(\stdClass $source) {
    // Need to map the service levels to a new class.
    $this->serviceLevel = new ServiceLevel($source->servicelevel);
    $this->messages = array_map(fn($m) => new Message($m), $source->messages);
    $this->map($source);
  }

}
