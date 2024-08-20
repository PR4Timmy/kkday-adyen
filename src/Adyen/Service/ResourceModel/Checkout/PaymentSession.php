<?php

namespace Kkday\Adyen\Service\ResourceModel\Checkout;

class PaymentSession extends \Kkday\Adyen\Service\AbstractCheckoutResource
{
	/**
	 * @var string
	 */
	protected $endpoint;

	/**
	 * PaymentSession constructor.
	 *
	 * @param \Kkday\Adyen\Service $service
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function __construct($service)
	{
		$this->endpoint = $this->getCheckoutEndpoint($service) . '/' . $service->getClient()->getApiCheckoutVersion() . '/paymentSession';
		parent::__construct($service, $this->endpoint);
	}
}
