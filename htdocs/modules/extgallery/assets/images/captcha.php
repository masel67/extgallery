<?php
/*
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 * @copyright    {@link http://xoops.org/ XOOPS Project}
 * @license      {@link http://www.gnu.org/licenses/gpl-2.0.html GNU GPL 2 or later}
 * @package
 * @since
 * @author       XOOPS Development Team,
 */

require dirname(dirname(dirname(dirname(__DIR__)))) . '/mainfile.php';

// defined('XOOPS_ROOT_PATH') || exit('XOOPS root path not defined');

include_once __DIR__ . '/../../class/php-captcha.inc.php';

$aFonts         = array(XOOPS_ROOT_PATH . '/modules/extgallery/fonts/AllStarResort.ttf');
$oVisualCaptcha = new PhpCaptcha($aFonts, 200, 60);
$oVisualCaptcha->Create();
