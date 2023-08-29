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
		<div id="players-div" 
			class="text-center"
			hx-get="api/players"
			hx-trigger="load"
			hx-target="#players-div"
			hx-swap="innerHTML"
		>
		</div>
HTML;
		return $htmlView;
	}
}
?>

