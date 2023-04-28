<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use PublishPress\WordPressEDDLicense\Container as EDDContainer;
use PublishPress\WordPressEDDLicense\Services as EDDServices;
use PublishPress\WordPressEDDLicense\ServicesConfig as EDDServicesConfig;

class Wpunit extends \Codeception\Module
{
    /**
     * @param string $pluginVersion
     * @param int $itemID
     * @param string $licenseKey
     * @param string $licenseStatus
     *
     * @param string $apiUrl
     * @return EDDContainer
     *
     * @throws \PublishPress\WordPressEDDLicense\Exception\InvalidParams
     */
    public function getEddContainer($pluginVersion = '0.1.0', $itemID = 0, $licenseKey = '', $licenseStatus = '', $apiUrl = '')
    {
        if (empty($itemID) && isset($_ENV['PUBLISHPRESS_ITEM_ID'])) {
            $itemID = $_ENV['PUBLISHPRESS_ITEM_ID'];
        }

        if (empty($apiUrl) && isset($_ENV['PUBLISHPRESS_API_URL'])) {
            $apiUrl = $_ENV['PUBLISHPRESS_API_URL'];
        }

        $config = new EDDServicesConfig();
        $config->setApiUrl($apiUrl);
        $config->setLicenseKey($licenseKey);
        $config->setLicenseStatus($licenseStatus);
        $config->setPluginVersion($pluginVersion);
        $config->setEddItemId($itemID);
        $config->setPluginAuthor('PublishPress');
        $config->setPluginFile('dummy-plugin-edd-integration/dummy-plugin-edd-integration.php');

        $services = new EDDServices($config);

        $eddContainer = new EDDContainer();
        $eddContainer->register($services);

        return $eddContainer;
    }
}
