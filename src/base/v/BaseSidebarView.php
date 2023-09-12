<?php
namespace BaseView;

class BaseSidebarView {
	public function __construct() {
	}

	public function render() {
		echo $this->view();
	}

	private function view() {
		// Settings, Players, Coaches, Equipment (icon links)
		$sidebarHtml = <<<HTML
HTML;
		return $sidebardHtml;
	}
}
?>
