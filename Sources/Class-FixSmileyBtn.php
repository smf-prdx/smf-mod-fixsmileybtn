<?php

/**
 * Class-FixSmileyBtn.php
 *
 * @package prdx:fixsmileybtn
 * @link https://cientoseis.es
 * @author prdx (https://www.simplemachines.org/community/index.php?action=profile;u=674744)
 * @copyright 2025, prdx
 * @license https://opensource.org/licenses/BSD-3-Clause BSD
 *
 */

if (!defined('SMF'))
    die('No direct access...');

final class FixSmileyBtn
{
    public function hooks(): void
    {
        add_integration_function('integrate_pre_css_output', __CLASS__ . '::css#', false, __FILE__);
    }

    public function css(): void
    {
        loadCSSFile('FixSmileyBtn.css', ['minimize' => true, 'default_theme' => true], 'FixSmileyBtn');
    }
}
