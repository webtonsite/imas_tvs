<!DOCTYPE html>
<html lang="">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <title>{{ $page->title }}</title>

	    <!-- Styles -->
	    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
	</head>
	<body>

		<header>
			<h1 class="title text-center">{{ $page->title }}</h1>
			<div class="date-created float-right">
				<b>Created:</b> {{ $page->created_at }}
			</div>
		</header>

		<div class="container">

			<main class="py-4">

				<hr>

				<div class="row">
					<div class="col-sm-6">
						<img src="/storage/{{ $page->photo_url }}" class="img-rounded" alt="{{ $page->title }}">
					</div>
					<div class="col-sm-6">
						<div class="description">
							{!! $page->description !!}
						</div>
					</div>
				</div>

				<hr>

			</main>
		</div>

		<footer class="fixed-bottom text-center">
			@All rights reserved
		</footer>

	</body>
</html>