<?php
/**
 * @package   Twig Type Test
 * @author    Victor In.
 * @copyright Copyright 2014
 * @link      https://github.com/victor-in/Craft-TwigTypeTest
 * @license   MIT
 */
namespace Craft;

class TwigTypeTestPlugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Twig Type Test');
    }

    function getVersion()
    {
        return '0.2';
    }

    function getDeveloper()
    {
        return 'Victor In.';
    }

    function getDeveloperUrl()
    {
        return 'https://github.com/victor-in/';
    }

    function addTwigExtension()
    {
        Craft::import('plugins.twigtypetest.twigextensions.TwigTypeTestTwigExtension');
        return new TwigTypeTestTwigExtension();
    }
}
