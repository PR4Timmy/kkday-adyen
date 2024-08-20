<?php

namespace Kkday\Adyen\Service\ResourceModel\Notification;

class DeleteNotificationConfigurations extends \Kkday\Adyen\Service\AbstractResource
{
    /**
     * @var string
     */
    protected $endpoint;

    /**
     * DeleteNotificationConfigurations constructor.
     * @param $service
     */
    public function __construct($service)
    {
        $this->endpoint = $service->getClient()->getConfig()->get('endpointNotification') . '/' . $service->getClient()->getApiNotificationVersion() . '/deleteNotificationConfigurations';
        parent::__construct($service, $this->endpoint);
    }
}
