<?php

namespace Kkday\Adyen\Service\ResourceModel\Payout\ThirdParty;

class StoreDetail extends \Kkday\Adyen\Service\AbstractResource
{
	/**
	 * @var string
	 */
	protected $endpoint;

	/**
	 * StoreDetail constructor.
	 *
	 * @param \Kkday\Adyen\Service $service
	 */
	public function __construct($service)
	{
		$this->endpoint = $service->getClient()->getConfig()->get('endpoint') . '/pal/servlet/Payout/' . $service->getClient()->getApiPayoutVersion() . '/storeDetail';
		parent::__construct($service, $this->endpoint);
	}
}
