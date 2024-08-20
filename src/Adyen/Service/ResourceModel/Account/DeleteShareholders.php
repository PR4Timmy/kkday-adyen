<?php

namespace Kkday\Adyen\Service\ResourceModel\Account;

class DeleteShareholders extends \Kkday\Adyen\Service\AbstractResource
{
    /**
     * @var string
     */
    protected $endpoint;

    /**
     * DeleteShareholders constructor.
     * @param $service
     */
    public function __construct($service)
    {
        $this->endpoint = $service->getClient()->getConfig()->get('endpointAccount') . '/' . $service->getClient()->getApiAccountVersion() . '/deleteShareholders';
        parent::__construct($service, $this->endpoint);
    }
}
