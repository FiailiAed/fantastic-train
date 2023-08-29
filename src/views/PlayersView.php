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
		<div id="players-div" class="text-center">
			<button hx-post="/api/players"
				hx-trigger="click"
				hx-target="#players-div"
				hx-swap="innerHTML"
			>
				Show Coaches
			</button>
		</div>
HTML;
		return $htmlView;
	}
}
?>

