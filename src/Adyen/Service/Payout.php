<?php

namespace Kkday\Adyen\Service;

class Payout extends \Kkday\Adyen\Service
{
	/**
	 * @var ResourceModel\Payout\Confirm
	 */
	protected $confirm;

	/**
	 * @var ResourceModel\Payout\Decline
	 */
	protected $decline;

	/**
	 * @var ResourceModel\Payout\StoreDetailsAndSubmit
	 */
	protected $storeDetailsAndSubmit;

	/**
	 * @var ResourceModel\Payout\Submit
	 */
	protected $submit;

	/**
	 * @var ResourceModel\Payout\ThirdParty\ConfirmThirdParty
	 */
	protected $confirmThirdParty;

	/**
	 * @var ResourceModel\Payout\ThirdParty\DeclineThirdParty
	 */
	protected $declineThirdParty;

	/**
	 * @var ResourceModel\Payout\ThirdParty\StoreDetailsAndSubmitThirdParty
	 */
	protected $storeDetailsAndSubmitThirdParty;

	/**
	 * @var ResourceModel\Payout\ThirdParty\SubmitThirdParty
	 */
	protected $submitThirdParty;

	/**
	 * @var ResourceModel\Payout\ThirdParty\StoreDetail
	 */
	protected $storeDetail;

	/**
	 * Payout constructor.
	 *
	 * @param \Kkday\Adyen\Client $client
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function __construct(\Kkday\Adyen\Client $client)
	{
		parent::__construct($client);
		$this->confirm = new \Kkday\Adyen\Service\ResourceModel\Payout\Confirm($this);
		$this->decline = new \Kkday\Adyen\Service\ResourceModel\Payout\Decline($this);
		$this->storeDetailsAndSubmit = new \Kkday\Adyen\Service\ResourceModel\Payout\StoreDetailsAndSubmit($this);
		$this->submit = new \Kkday\Adyen\Service\ResourceModel\Payout\Submit($this);
		$this->confirmThirdParty = new \Kkday\Adyen\Service\ResourceModel\Payout\ThirdParty\ConfirmThirdParty($this);
		$this->declineThirdParty = new \Kkday\Adyen\Service\ResourceModel\Payout\ThirdParty\DeclineThirdParty($this);
		$this->storeDetailsAndSubmitThirdParty = new \Kkday\Adyen\Service\ResourceModel\Payout\ThirdParty\StoreDetailsAndSubmitThirdParty($this);
		$this->submitThirdParty = new \Kkday\Adyen\Service\ResourceModel\Payout\ThirdParty\SubmitThirdParty($this);
		$this->storeDetail = new \Kkday\Adyen\Service\ResourceModel\Payout\ThirdParty\StoreDetail($this);
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function confirm($params)
	{
		$result = $this->confirm->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function decline($params)
	{
		$result = $this->decline->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function storeDetailsAndSubmit($params)
	{
		$result = $this->storeDetailsAndSubmit->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function submit($params)
	{
		$result = $this->submit->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function confirmThirdParty($params)
	{
		$result = $this->confirmThirdParty->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function declineThirdParty($params)
	{
		$result = $this->declineThirdParty->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function storeDetailsAndSubmitThirdParty($params)
	{
		$result = $this->storeDetailsAndSubmitThirdParty->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function submitThirdParty($params)
	{
		$result = $this->submitThirdParty->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function storeDetail($params)
	{
		$result = $this->storeDetail->request($params);
		return $result;
	}
}
