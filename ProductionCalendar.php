<?php
/**
 * @package    Joomla.Library - Production calendar
 * @version    2.0.1
 * @author     Artem Vasilev - webmasterskaya.xyz
 * @copyright  Copyright (c) 2018 - 2021 Webmasterskaya. All rights reserved.
 * @license    MIT, see LICENSE.txt
 * @link       https://webmasterskaya.xyz/
 */

defined('_JEXEC') or die;

use Webmasterskaya\ProductionCalendar\Calendar;

JLoader::registerNamespace(
	'Webmasterskaya\\ProductionCalendar',
	JPATH_LIBRARIES . '/lib_production_calendar/ProductionCalendar',
	false,
	false,
	'psr4'
);

/**
 * Class for B/C
 */
class ProductionCalendar extends Calendar
{

}