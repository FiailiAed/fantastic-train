<?php
namespace BaseView;

class Base {
	public $pageTitle;
	public $pageHtml;

	public function __construct($pageTitle, $pageHtml) {
		$this->pageTitle = $pageTitle ?: <<<HTML
		<h1 class="text-xl font-semibold mb-4"> Base Page Title - No Title Provided </h1>
HTML;
		$this->pageHtml = $pageHtml ?: <<<HTML
		<p class="text-gray-700"> Base Page HTML - No HTML Provided </p>
HTML;

		echo $this->render();
	}

	protected function render() {
		return $this->view();
	}

	private function view() {
		$htmlView = <<<HTML
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?="Lacrosse Portal - Prototype";?></title>

	<!-- Tailwind CDN -->
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

	<!-- Extras -->
	<link rel="shortcut icon" href="../public/images/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="../public/styles/styles.css">

	<!-- Bootstrap: TODO - Remove? -->
	<!-- <link rel="stylesheet" href="../vendor/twbs/bootstrap-icons/font/bootstrap-icons.css"> -->
	<!-- <link rel="stylesheet" href="../public/styles/bootstrap.min.css"> -->
</head>
<body class="bg-gray-100">
	<div class="flex justify-center items-center h-screen">
		<div class="bg-white p-6 shadow-md rounded-md">
			{$this->pageTitle}
			{$this->pageHtml}
		</div>
	</div>
</body>
HTML;
		return $htmlView;
	}
}
?>
