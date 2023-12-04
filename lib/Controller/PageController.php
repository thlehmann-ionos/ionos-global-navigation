<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Thomas Lehmann <t.lehmann@strato.de>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\IonosGlobalNavigation\Controller;

use OCA\IonosGlobalNavigation\AppInfo\Application;
use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\IRequest;
use OCP\Util;

class PageController extends Controller {
	public function __construct(IRequest $request) {
		parent::__construct(Application::APP_ID, $request);
	}

	/**
	 * @NoAdminRequired
	 * @NoCSRFRequired
	 */
	public function index(): TemplateResponse {
		Util::addScript(Application::APP_ID, 'ionosglobalnavigation-main');

		return new TemplateResponse(Application::APP_ID, 'main');
	}
}
