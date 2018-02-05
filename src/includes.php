<?php
/**
 * @package WordPress-EDD-License-Integration
 * @author PublishPress
 *
 * Copyright (c) 2018 PublishPress
 *
 * This file is part of WordPress-EDD-License-Integration
 *
 * WordPress-EDD-License-Integration is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * WordPress-EDD-License-Integration is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with WordPress-EDD-License-Integration.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( ! defined( 'ABSPATH' ) ) die('No direct script access allowed.');


if ( ! defined( 'PUBLISHPRESS_EDD_LICENSE_INTEGRATION_LOADED' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';

     if ( ! defined( 'PUBLISHPRESS_EDD_LICENSE_INTEGRATION_VERSION' ) ) {
        define( 'PUBLISHPRESS_EDD_LICENSE_INTEGRATION_VERSION', '2.0.0' );
    }

	define( 'PUBLISHPRESS_EDD_LICENSE_INTEGRATION_LOADED', true );
}

// $edd_license_language = new PublishPress\EDD_License\Language;
