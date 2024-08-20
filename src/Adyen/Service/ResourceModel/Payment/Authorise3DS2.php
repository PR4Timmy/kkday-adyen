<?php

namespace Kkday\Adyen\Service\ResourceModel\Payment;

class Authorise3DS2 extends \Kkday\Adyen\Service\AbstractResource
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
	 * Authorise3DS2 constructor.
	 *
	 * @param \Kkday\Adyen\Service $service
	 */
    public function __construct($service)
    {
        $this->endpoint = $service->getClient()->getConfig()->get('endpoint') . '/pal/servlet/Payment/' . $service->getClient()->getApiPaymentVersion() . '/authorise3ds2';
        parent::__construct($service, $this->endpoint, $this->allowApplicationInfo);
    }
}
