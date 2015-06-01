<?php
/**
* @author      Baptiste Toinot
* @contributor Laurent Jouanneau
* @copyright   2008 Baptiste Toinot, 2011-2012 Laurent Jouanneau
* @link        http://www.jelix.org
* @licence     GNU Lesser General Public Licence see LICENCE file or http://www.gnu.org/licenses/lgpl.html
*/

/**
 * Content of a URL
 * @since 1.2
 */
class jSitemapUrl {

    /**
     * URL of the page
     * @var string
     */
    public $loc;

    /**
     * The date of last modification of the page
     * @var string
     */
    public $lastmod;

    /**
     * How frequently the page is likely to change
     * @var string
     */
    public $changefreq;

    /**
     * The priority of this URL relative to other URLs
     * @var string
     */
    public $priority;
}
