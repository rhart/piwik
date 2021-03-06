<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik
 * @package Piwik
 */
namespace Piwik\ViewDataTable\GenerateGraphHTML;
use Piwik\ViewDataTable\GenerateGraphHTML;

/**
 *
 * Generates HTML embed for the vertical bar chart
 *
 * @package Piwik
 * @subpackage ViewDataTable
 */

class ChartVerticalBar extends GenerateGraphHTML
{
    public function __construct()
    {
        parent::__construct();
        $this->viewProperties['graph_type'] = 'bar';
        $this->viewProperties['graph_limit'] = 6;
    }

    protected function getViewDataTableId()
    {
        return 'graphVerticalBar';
    }

    protected function getViewDataTableIdToLoad()
    {
        return 'generateDataChartVerticalBar';
    }
}
