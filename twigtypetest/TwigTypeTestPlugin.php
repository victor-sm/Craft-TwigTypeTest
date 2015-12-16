<?php
/**
 * @package   Twig Type Test
 * @author    Victor In.
 * @copyright Copyright 2016
 * @link      https://github.com/victor-in/Craft-TwigTypeTest
 * @license   MIT
 */
namespace Craft;

class TwigTypeTestPlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Twig Type Test');
    }

    public function getVersion()
    {
        return '0.3';
    }
	
	public function getSchemaVersion() {
		return '0.1';
	}

    public function getDeveloper()
    {
        return 'Victor In.';
    }

    public function getDeveloperUrl()
    {
        return 'https://github.com/victor-in/';
    }
	
    public function getDocumentationUrl()
    {
        return 'https://github.com/victor-in/Craft-TwigTypeTest';
    }
	
		public function getReleaseFeedUrl()
	{
		return 'https://github.com/victor-in/Craft-TwigTypeTest/blob/master/changelog.json';
	}

    public function addTwigExtension()
    {
        Craft::import('plugins.twigtypetest.twigextensions.TwigTypeTestTwigExtension');
        return new TwigTypeTestTwigExtension();
    }
}
