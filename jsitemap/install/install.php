<?php
/**
* @author      Laurent Jouanneau
* @copyright   2015-2017 Laurent Jouanneau
* @link        http://www.jelix.org
* @licence     GNU Lesser General Public Licence see LICENCE file or http://www.gnu.org/licenses/lgpl.html
*/

/**
 */
class jsitemapModuleInstaller extends jInstallerModule2 {

    function installEntrypoint(jInstallerEntryPoint2 $entryPoint) {

        if (!$this->firstExec('config')) {
            return;
        }

        if (null == $this->getConfigIni()->getValue('sitemap','responses', null, true)) {
            $this->getConfigIni()->setValue('sitemap','jsitemap~jResponseSitemap','responses', null, true);
        }
    }
}
