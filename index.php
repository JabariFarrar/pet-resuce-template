<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<link data-require="bootstrap@3.3.7" data-semver="3.3.7" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<script data-require="bootstrap@3.3.7" data-semver="3.3.7" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--		Font Awesome-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css" />
		<script src="script.js"></script>

	</head>
	<body>
		<form>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h1>Post</h1>
							<h4>Choose pet type</h4>
							<fieldset id="type">
								<label class="radio-inline"><input type="radio" name="type"> Dog</label>
								<label class="radio-inline"><input type="radio" name="type"> Cat</label>
							</fieldset>
						</div>
					</div>
			</div>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<h4>Choose the gender</h4>
							<fieldset id=sex">
								<label class="radio-inline"><input type="radio" name="gender"> Female</label>
								<label class="radio-inline"><input type="radio" name="gender"> Male</label>
							<fieldset>
						</div>
					</div>
				</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<h4> Please enter the breed</h4>
							<label for="formGroupEnterBreed"></label>
							<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Breed Type">
						</div>
					</div>
				</div>
			</div>
			<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<h4>Please enter pet description</h4>
								<label for="exampleTextarea"></label>
								<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
							</div>
						</div>
					</div>
				</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<button type="submit" class="btn-link fa fa-paw fa-2x"> submit</button>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="postImage" class="modal-labels">Upload an image</label>
							<input type="file" id="postImage" ng2FileSelect [uploader]="uploader" />
						</div>
				</form>
		<hgroup class="mb20">
			<h1>Post Results</h1>
			<h2 class="lead"><strong class="text-danger">3</strong> results were found for the search for <strong class="text-danger">Lorem</strong></h2>
		</hgroup>

		<section class="col-xs-12 col-sm-6 col-md-12">
			<article class="search-result row">
				<div class="col-xs-12 col-sm-12 col-md-3">
					<a href="#" title="Lorem ipsum" class="thumbnail"><img src="http://lorempixel.com/250/140/people" alt="Lorem ipsum" /></a>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-2">
					<ul class="meta-search">
						<li><i class="glyphicon glyphicon-calendar"></i> <span>02/15/2014</span></li>
						<li><i class="glyphicon glyphicon-time"></i> <span>4:28 pm</span></li>
						<li><i class="glyphicon glyphicon-tags"></i> <span>People</span></li>
					</ul>
				</div>
	</body>
</html>




