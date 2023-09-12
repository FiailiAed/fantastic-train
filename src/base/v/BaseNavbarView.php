<?php
namespace BaseView;

class BaseNavbarView {
	public function __construct() {
	}

	public function render() {
		echo $this->view();
	}

	private function view() {
		// Logo, Team Name, Sport
		$navbarHtml = <<<HTML
HTML;
		return $navbarHtml;
	}
}
?>

