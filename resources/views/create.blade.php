
@extends('master')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Add Legitimate Organization</div>
	<div class="card-body">
		<form method="post" action="{{ route('organization.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Organization's Name</label>
				<div class="col-sm-10">
					<input type="text" name="org_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Address</label>
				<div class="col-sm-10">
					<input type="text" name="org_address" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Email Address</label>
				<div class="col-sm-10">
					<input type="text" name="org_email" class="form-control" />
				</div>
			</div>

			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Advocacy</label>
				<div class="col-sm-12">
					<select name="advocacy" class="form-control">
						<option value="Health Advocacy">Health Advocacy</option>
						<option value="Environment">Environment</option>
						<option value="Childrens Foundation">Childrens Foundation</option>
						<option value="Others">Others</option>
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Photo</label>
				<div class="col-sm-10">
					<input type="file" name="org_photo" />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add Organization" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')
