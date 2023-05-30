<?php

/*****************************************************************
 * This file is generated on composer update command by
 * a custom script. 
 * 
 * Do not edit it manually!
 ****************************************************************/

use PublishPress\WordpressEddLicense\Versions;

class VersionsCest
{
    public function testAllVersionsAreRegistered(WpunitTester $I)
    {
        $versions = Versions::getInstance();

        $registeredVersions = $versions->getVersions();

        $I->assertNotEmpty($registeredVersions);
        $I->assertEquals([
            '2.0.0.1' => 'PublishPress\WordpressEddLicense\initialize2Dot0Dot0Dot1',
            '2.0.0.2' => 'PublishPress\WordpressEddLicense\initialize2Dot0Dot0Dot2',
            '3.0.1' => 'PublishPress\WordpressEddLicense\initialize3Dot0Dot1',
        ], $registeredVersions);
    }

    public function testLatestVersionIsTheCurrentVersion(WpunitTester $I)
    {
        $versions = Versions::getInstance();

        $latestVersion = $versions->latestVersion();

        $I->assertEquals('3.0.1', $latestVersion);
    }

    public function testLatestVersionCallbackIsTheLastOne(WpunitTester $I)
    {
        $versions = Versions::getInstance();

        $latestVersionCallback = $versions->latestVersionCallback();

        $I->assertEquals('PublishPress\WordpressEddLicense\initialize3Dot0Dot1', $latestVersionCallback);
    }

    public function testInitializeLatestVersion(WpunitTester $I)
    {
        $versions = Versions::getInstance();

        $versions->initializeLatestVersion();

        $I->assertTrue(class_exists('PublishPress\WordPressEDDLicense\License'));

        $didAction = (bool)did_action('publishpress_wordpress_edd_license_3Dot0Dot1_initialized');
        $I->assertTrue($didAction);
    }
}
