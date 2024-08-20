<?php

namespace Kkday\Adyen\Service\ResourceModel\Notification;

class GetNotificationConfigurationList extends \Kkday\Adyen\Service\AbstractResource
{
    /**
     * @var string
     */
    protected $endpoint;

    /**
     * GetNotificationConfigurationList constructor.
     * @param $service
     */
    public function __construct($service)
    {
        $this->endpoint = $service->getClient()->getConfig()->get('endpointNotification') . '/' . $service->getClient()->getApiNotificationVersion() . '/getNotificationConfigurationList';
        parent::__construct($service, $this->endpoint);
    }
}
