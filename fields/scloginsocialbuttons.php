<?php
/**
 * @package         SCLogin
 * @copyright (c)   2009-@CURRENT_YEAR@ by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v@VERSION@
 * @build-date      @DATE@
 */

defined('JPATH_PLATFORM') or die;

jimport('joomla.form.helper');
jimport('sourcecoast.utilities');

$factoryPath = JPATH_SITE . '/components/com_jfbconnect/libraries/factory.php';
if (JFile::exists($factoryPath))
{
    require_once $factoryPath;
}

if (class_exists('JFBCFactory'))
{
    SCStringUtilities::loadLanguage('com_jfbconnect', JPATH_ADMINISTRATOR);
    require_once(JPATH_ADMINISTRATOR . '/components/com_jfbconnect/models/fields/socialbuttons.php');
    class JFormFieldScloginSocialbuttons extends JFormFieldSocialbuttons
    {
    }
}
else
{
    class JFormFieldScloginSocialButtons extends JFormField
    {
        public function getInput()
        {
            return "";
        }
        public function getLabel()
        {
            return "";
        }
    }
}