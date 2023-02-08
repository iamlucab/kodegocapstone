@extends('master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Organization Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('organization.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Organization Name</b></label>
			<div class="col-sm-10">
				{{ $organization->org_name }}
			</div>
		</div>

        <div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Address</b></label>
			<div class="col-sm-10">
				{{ $organization->org_address }}
			</div>
		</div>

		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Student Email</b></label>
			<div class="col-sm-10">
				{{ $organization->student_email }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Category</b></label>
			<div class="col-sm-10">
				{{ $organization->advocacy }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Upload Photo</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $organization->org_photo) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('content')
