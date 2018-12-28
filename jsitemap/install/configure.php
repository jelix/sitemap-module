<?php
/**
 * @author      Laurent Jouanneau
 * @copyright   2015-2018 Laurent Jouanneau
 * @link        http://www.jelix.org
 * @licence     GNU Lesser General Public Licence see LICENCE file or http://www.gnu.org/licenses/lgpl.html
 */

/**
 */
class jsitemapModuleConfigurator extends \Jelix\Installer\Module\Configurator {

    function configure(\Jelix\Installer\Module\API\ConfigurationHelpers $helpers) {
        if (null == $helpers->getConfigIni()->getValue('sitemap','responses', null, true)) {
            $helpers->getConfigIni()->setValue('sitemap','jsitemap~jResponseSitemap','responses', null, true);
        }
    }
}
