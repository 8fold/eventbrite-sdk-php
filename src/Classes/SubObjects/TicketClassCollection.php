<?php

namespace Eightfold\Eventbrite\Classes\SubObjects;

use Eightfold\Eventbrite\Classes\Core\ApiCollection;

use Eightfold\Eventbrite\Classes\SubObjects\TicketClass;

/**
 * @package Collections
 */
class TicketClassCollection extends ApiCollection
{
    public function __construct(array $payload, $client)
    {
        $class = TicketClass::class;
        $keyToInstantiate = 'ticket_classes';
        $keysToConvertToLocalVars = ['pagination'];
        parent::__construct($payload, $client, $class, $keyToInstantiate, $keysToConvertToLocalVars);
    }
}
