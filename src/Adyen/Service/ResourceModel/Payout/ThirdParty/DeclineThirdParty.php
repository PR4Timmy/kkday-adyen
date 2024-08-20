<?php

namespace Kkday\Adyen\Service\ResourceModel\Payout\ThirdParty;

class DeclineThirdParty extends \Kkday\Adyen\Service\AbstractResource
{
	/**
	 * @var string
	 */
	protected $endpoint;

	/**
	 * DeclineThirdParty constructor.
	 *
	 * @param \Kkday\Adyen\Service $service
	 */
	public function __construct($service)
	{
		$this->endpoint = $service->getClient()->getConfig()->get('endpoint') . '/pal/servlet/Payout/' . $service->getClient()->getApiPayoutVersion() . '/declineThirdParty';
		parent::__construct($service, $this->endpoint);
	}
}
