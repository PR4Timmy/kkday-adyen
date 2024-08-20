<?php

namespace Kkday\Adyen\Service\ResourceModel\Checkout;

class PaymentMethods extends \Kkday\Adyen\Service\AbstractCheckoutResource
{
	/**
	 * @var string
	 */
	protected $endpoint;

	/**
	 * PaymentMethods constructor.
	 *
	 * @param \Kkday\Adyen\Service $service
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function __construct($service)
	{
		$this->endpoint = $this->getCheckoutEndpoint($service) . '/' . $service->getClient()->getApiCheckoutVersion() . '/paymentMethods';
		parent::__construct($service, $this->endpoint);
	}
}
