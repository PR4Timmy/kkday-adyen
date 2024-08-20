<?php

namespace Kkday\Adyen\Service\ResourceModel\BinLookup;

class Get3dsAvailability extends \Kkday\Adyen\Service\AbstractResource
{
    /**
     * @var string
     */
    protected $endpoint;

    /**
     * Include applicationInfo key in the request parameters
     *
     * @var bool
     */
    protected $allowApplicationInfo = false;

    /**
     * Get3dsAvailability constructor.
     *
     * @param \Kkday\Adyen\Service $service
     */
    public function __construct($service)
    {
        $this->endpoint = $service->getClient()->getConfig()->get('endpoint') . '/pal/servlet/BinLookup/' . $service->getClient()->getApiBinLookupVersion() . '/get3dsAvailability';
        parent::__construct($service, $this->endpoint, $this->allowApplicationInfo);
    }
}
