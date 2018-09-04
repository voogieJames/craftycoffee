<?php
/**
 * Lol Module module for Craft CMS 3.x
 *
 * Lol module
 *
 * @link      http://lol.no
 * @copyright Copyright (c) 2018 lol
 */

namespace modules\lolmodule\variables;

use modules\lolmodule\LolModule;

use Craft;

/**
 * Lol Module Variable
 *
 * Craft allows modules to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.lolModule }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    lol
 * @package   LolModule
 * @since     0.0.1
 */
class LolModuleVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.lolModule.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.lolModule.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }

    public function htmlentities(string $string) {
        return htmlentities($string);
    }
}
