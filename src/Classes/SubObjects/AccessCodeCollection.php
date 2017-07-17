<?php

namespace Eightfold\Eventbrite\Classes\SubObjects;

use Eightfold\Eventbrite\Classes\Core\ApiCollection;

use Eightfold\Eventbrite\Classes\SubObjects\AccessCode;

/**
 * @package Collections
 */
class AccessCodeCollection extends ApiCollection
{
    /**
     * [__construct description]
     *
     * @param [type] $client  [description]
     * @param [type] $payload [description]
     */
    public function __construct($client, $endpoint)
    {
        parent::__construct($client, $endpoint, 'access_codes', AccessCode::class);
    }

    // public function __construct(array $payload, $client)
    // {
    //     $class = AccessCode::class;
    //     $keyToInstantiate = 'access_codes';
    //     $keysToConvertToLocalVars = ['pagination'];
    //     parent::__construct($payload, $client, $class, $keyToInstantiate, $keysToConvertToLocalVars);
    // }
}
