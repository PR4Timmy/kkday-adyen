<?php

namespace Kkday\Adyen\Service\ResourceModel\Modification;

class Refund extends \Kkday\Adyen\Service\AbstractResource
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
	protected $allowApplicationInfo = true;

	/**
	 * Refund constructor.
	 *
	 * @param \Kkday\Adyen\Service $service
	 */
    public function __construct($service)
    {
        $this->endpoint = $service->getClient()->getConfig()->get('endpoint') . '/pal/servlet/Payment/' . $service->getClient()->getApiPaymentVersion() . '/refund';
        parent::__construct($service, $this->endpoint, $this->allowApplicationInfo);
    }
}
