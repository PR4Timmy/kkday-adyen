<?php

namespace Kkday\Adyen\Service\ResourceModel\Payment;

class Authorise3D extends \Kkday\Adyen\Service\AbstractResource
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
	 * Authorise3D constructor.
	 *
	 * @param \Kkday\Adyen\Service $service
	 */
    public function __construct($service)
    {
        $this->endpoint = $service->getClient()->getConfig()->get('endpoint') . '/pal/servlet/Payment/' . $service->getClient()->getApiPaymentVersion() . '/authorise3d';
        parent::__construct($service, $this->endpoint, $this->allowApplicationInfo);
    }
}
