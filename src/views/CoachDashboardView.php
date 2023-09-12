<?php
namespace Views;

class CoachDashboardView {
	public function __construct() {
	}

	public function render() {
		echo $this->view();
	}

	private function view() {
		// Schedule, Players, Coaches, Equipment (overview cards)
		$dashboardHtml = <<<HTML
HTML;
		return $dashboardHtml;
	}
}
?>
