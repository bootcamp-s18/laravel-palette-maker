<!doctype html>
<html>
<head>
	<title>PHP Palette Maker</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body class="container">

	<p><a href="/palettemaker?">Clear params</a></p>

	<h1 class="mt-3">PHP Palette Maker</h1>

	<div class="mt-3 alert alert-success rounded-0"></div>

	<div class="mt-3 alert alert-danger rounded-0"></div> 

	<div>
		<form class="form-inline mt-5" method="get" action="">
			<label class="sr-only" for="colorName">Color Name</label>
			<input type="text" class="rounded-0 form-control mb-2 mr-sm-2 mb-sm-0" id="colorName" name="colorName" placeholder="The deep dark void...">

			<label class="sr-only" for="hexCode">Hex Code</label>
			<div class="input-group mb-2 mr-sm-2 mb-sm-0">
				<div class="input-group-prepend">
					<div class="rounded-0 input-group-text">#</div>
				</div>
				<input type="text" class="rounded-0form-control" id="hexCode" name="hexCode" placeholder="a1b2c3" maxlength="6" size="6">
			</div>

			<button type="submit" class="btn btn-secondary rounded-0">Add Color</button>
		</form>
	</div>

	<div>
		<form class="form-inline mt-3" method="get" action="">
			<label class="sr-only" for="paletteName">Palette Name</label>
			<input type="text" class="rounded-0 form-control mb-2 mr-sm-2 mb-sm-0" id="paletteName" name="paletteName" placeholder="The most beautiful...">
			<button type="submit" class="btn btn-secondary rounded-0">Add Palette</button>
		</form>
	</div>

	<div class="row mt-5">

		<!-- List of palettes -->

		<div class="col-sm-12 col-md-6">

			<h4>Palettes</h4>

			<div class="accordian" id="palettes">

@foreach ($palettes as $palette)

<div class="card rounded-0">
	<div class="card-header" id="palette{{ $palette->id }}" style="margin: 0 !important; padding: 0 !important;">
		<h5 class="mb-0 float-left">
			<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $palette->id }}">{{ $palette->name }}</button>
		</h5>
		<div class="float-right col col-sm-auto text-right">
			<form method="post" action="">
				<button class="btn text-danger bg-transparent" type="submit"><i class="fas fa-trash-alt"></i></button>
				<input type="hidden" name="deletePaletteId" value="{{ $palette->id }}">
			</form>
		</div>
	</div>
	<div id="collapse{{ $palette->id }}" class="collapse" data-parent="#palettes">
		<div class="card-body">

@foreach ($palette->colors as $color)

			<div class="card rounded-0">
				<div class="card-header row" id="color{{ $color->id }}" style="margin: 0 !important; padding: 0 !important; background-color: #FFFFFF;">
					<div class="col m-auto"><strong>{{ $color->name }}</strong> <span class="text-secondary">#{{ $color->hex }}</span></div>
					<div class="col m-auto" style="border: 1px solid #000; height: 30px; width: 60px; background-color: #{{ $color->hex }};"></div>
					<div class="col col-sm-auto text-right">
						<form method="post" action="">
							<button class="btn text-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
							<input type="hidden" name="deleteColorId" value="{{ $color->id }}">
							<input type="hidden" name="deleteFromPaletteId" value="{{ $palette->id }}">
						</form>
					</div>
				</div>
			</div>

@endforeach

		</div>
	</div>
</div>

@endforeach

			</div>

		</div>

		<!-- List of colors -->

		<div class="col-sm-12 col-md-6 mt-sm-3 mt-md-0">

			<h4>Colors</h4>

			@foreach ($colors as $color)

			<div class="card rounded-0">
				<div class="card-header row" id="color{{ $color->id }}" style="margin: 0 !important; padding: 0 !important; background-color: #FFFFFF;">
					<div class="col m-auto"><strong>{{ $color->name }}</strong> <span class="text-secondary">#{{ $color->hex }}</span></div>
					<div class="col m-auto" style="border: 1px solid #000; height: 30px; width: 60px; background-color: #{{ $color->hex }};"></div>

@if ( count($color->palettes) > 0 )

					<div class="col col-sm-auto text-right">
						<button class="btn" disabled><i class="far fa-trash-alt"></i></button>
					</div>

@else 

					<div class="col col-sm-auto text-right">
						<form method="post" action="">
							<button class="btn text-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
							<input type="hidden" name="deleteColorId" value="' . $id . '">
						</form>
					</div>

@endif

				</div>
			</div>

			@endforeach

		</div>

	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


</body>
</html>