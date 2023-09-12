<?php
namespace Views;

class PlayersView {
	public function __construct() {
	}

	public function render() {
		return $this->view();
	}

	private function view() {
		$htmlView = <<<HTML
		<button id="" class="" hx-get="api/players" hx-trigger="click" hx-select="#players-table" hx-swap="outerHTML">
			Load Players...
		</button>
		<table class="text-center" id="players-table">
		</table>
HTML;
		return $htmlView;
	}
}
?>

