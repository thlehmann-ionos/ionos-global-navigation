<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Thomas Lehmann <t.lehmann@strato.de>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\IonosGlobalNavigation\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'ionosglobalnavigation';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
