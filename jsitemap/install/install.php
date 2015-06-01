<?php
/**
* @author      Laurent Jouanneau
* @copyright   2015 Laurent Jouanneau
* @link        http://www.jelix.org
* @licence     GNU Lesser General Public Licence see LICENCE file or http://www.gnu.org/licenses/lgpl.html
*/

/**
 */
class jsitemapModuleInstaller extends jInstallerModule {

    function install() {

        if (!$this->firstExec('config')) {
            return;
        }

        if (null == $this->config->getValue('sitemap','responses', null, true)) {
            $this->config->setValue('sitemap','jsitemap~jResponseSitemap','responses', null, true);
        }
    }
}
