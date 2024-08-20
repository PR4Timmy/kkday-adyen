<?php

namespace Kkday\Adyen\Service;

class Checkout extends \Kkday\Adyen\ApiKeyAuthenticatedService
{
	/**
	 * @var ResourceModel\Checkout\PaymentSession
	 */
	protected $paymentSession;

	/**
	 * @var ResourceModel\Checkout\PaymentsResult
	 */
	protected $paymentsResult;

	/**
	 * @var ResourceModel\Checkout\PaymentMethods
	 */
	protected $paymentMethods;

	/**
	 * @var ResourceModel\Checkout\Payments
	 */
	protected $payments;

	/**
	 * @var ResourceModel\Checkout\PaymentsDetails
	 */
	protected $paymentsDetails;

	/**
	 * Checkout constructor.
	 *
	 * @param \Kkday\Adyen\Client $client
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function __construct(\Kkday\Adyen\Client $client)
	{
		parent::__construct($client);
		$this->paymentSession = new \Kkday\Adyen\Service\ResourceModel\Checkout\PaymentSession($this);
		$this->paymentsResult = new \Kkday\Adyen\Service\ResourceModel\Checkout\PaymentsResult($this);
		$this->paymentMethods = new \Kkday\Adyen\Service\ResourceModel\Checkout\PaymentMethods($this);
		$this->payments = new \Kkday\Adyen\Service\ResourceModel\Checkout\Payments($this);
		$this->paymentsDetails = new \Kkday\Adyen\Service\ResourceModel\Checkout\PaymentsDetails($this);
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function paymentSession($params)
	{
		$result = $this->paymentSession->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function paymentsResult($params)
	{
		$result = $this->paymentsResult->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function paymentMethods($params)
	{
		$result = $this->paymentMethods->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function payments($params)
	{
		$result = $this->payments->request($params);
		return $result;
	}

	/**
	 * @param $params
	 * @return mixed
	 * @throws \Kkday\Adyen\AdyenException
	 */
	public function paymentsDetails($params)
	{
		$result = $this->paymentsDetails->request($params);
		return $result;
	}
}
