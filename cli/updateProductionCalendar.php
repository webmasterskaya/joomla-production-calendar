<?php
/**
 * @package    Joomla.Library - Production calendar
 * @version    2.0.1
 * @author     Artem Vasilev - webmasterskaya.xyz
 * @copyright  Copyright (c) 2018 - 2021 Webmasterskaya. All rights reserved.
 * @license    MIT, see LICENSE.txt
 * @link       https://webmasterskaya.xyz/
 */

// Initialize Joomla framework
use Joomla\CMS\Application\CliApplication;

const _JEXEC = 1;

// Load system defines
if (file_exists(dirname(__DIR__) . '/defines.php'))
{
	require_once dirname(__DIR__) . '/defines.php';
}

if (!defined('_JDEFINES'))
{
	define('JPATH_BASE', dirname(__DIR__));
	require_once JPATH_BASE . '/includes/defines.php';
}

// Get the framework.
require_once JPATH_LIBRARIES . '/import.legacy.php';

// Bootstrap the CMS libraries.
require_once JPATH_LIBRARIES . '/cms.php';

class updateProductionCalendar extends CliApplication
{
	/**
	 * @throws Exception
	 */
	public function doExecute()
	{
		$year = !empty($this->input->args[0])
			? $this->input->args[0]
			: date(
				'Y'
			);

		JLoader::registerNamespace(
			'Webmasterskaya\\ProductionCalendar',
			JPATH_LIBRARIES . '/lib_production_calendar/ProductionCalendar',
			false, false, 'psr4'
		);

		if ($year == 'all')
		{
			Webmasterskaya\ProductionCalendar\Updater::updateAll();
		}
		else
		{
			Webmasterskaya\ProductionCalendar\Updater::update($year);
		}
	}
}

CliApplication::getInstance('updateProductionCalendar')->execute();