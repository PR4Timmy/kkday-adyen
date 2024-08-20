<?php

namespace Kkday\Adyen\Service\ResourceModel\Account;

class CreateAccount extends \Kkday\Adyen\Service\AbstractResource
{
    /**
     * @var string
     */
    protected $endpoint;

    /**
     * CreateAccount constructor.
     * @param $service
     */
    public function __construct($service)
    {
        $this->endpoint = $service->getClient()->getConfig()->get('endpointAccount') . '/' . $service->getClient()->getApiAccountVersion() . '/createAccount';
        parent::__construct($service, $this->endpoint);
    }
}
