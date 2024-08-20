<?php

namespace Kkday\Adyen\Service\ResourceModel\Checkout;

class Payments extends \Kkday\Adyen\Service\AbstractCheckoutResource
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
	 * Payments constructor.
	 *
	 * @param \Kkday\Adyen\Service $service
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function __construct($service)
	{
		$this->endpoint = $this->getCheckoutEndpoint($service) . '/' . $service->getClient()->getApiCheckoutVersion() . '/payments';
		parent::__construct($service, $this->endpoint, $this->allowApplicationInfo);
	}
}
