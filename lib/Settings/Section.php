<?php
/**
 * @copyright Copyright (c) 2016 Julius Härtl <jus@bitgrid.net>
 *
 * @author Julius Härtl <jus@bitgrid.net>
 *
 * @license GNU AGPL version 3 or any later version
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as
 *  published by the Free Software Foundation, either version 3 of the
 *  License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\IssueTemplate\Settings;

use OCP\IL10N;
use OCP\IURLGenerator;
use OCP\Settings\ISection;

/** TODO: Move to IIconSection for NC 12 */
class Section implements ISection {

	/** @var IL10N */
	private $l10n;
	/** @var IURLGenerator */
	private $urlGenerator;

	public function __construct(IL10N $l, IURLGenerator $urlGenerator) {
		$this->l10n = $l;
		$this->urlGenerator = $urlGenerator;
	}

	public function getID() {
		return 'issuetemplate';
	}

	public function getName() {
		return $this->l10n->t('Issue reporting');
	}
	
	public function getPriority() {
		return 30;
	}

	public function getIcon() {
		return $this->urlGenerator->imagePath('issuetemplate', 'app-dark.svg');
	}
}
