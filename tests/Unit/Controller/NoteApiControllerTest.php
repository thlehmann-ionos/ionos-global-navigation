<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Thomas Lehmann <t.lehmann@strato.de>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\IonosGlobalNavigation\Tests\Unit\Controller;

use OCA\IonosGlobalNavigation\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
