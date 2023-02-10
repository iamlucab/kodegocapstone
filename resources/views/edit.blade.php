@extends('master')

@section('content')

<div class="card">
	<div class="card-header"><span class="text-xs font-weight-bold text-primary text-uppercase mb-1">FOUNDATION INFORMATION</div>
	<div class="card-body">
		<form method="post" action="{{ route('organization.update', $organization->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Organization's Name</label>
				<div class="col-sm-10">
					<input type="text" name="org_name" class="form-control" value="{{ $organization->org_name }}" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Organization Address</label>
				<div class="col-sm-10">
					<input type="text" name="org_address" class="form-control" value="{{ $organization->org_address }}" />
				</div>
			</div>
            <div class="row mb-3">
				<label class="col-sm-2 col-label-form">Email</label>
				<div class="col-sm-10">
					<input type="text" name="org_email" class="form-control" value="{{ $organization->org_email }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Category</label>
				<div class="col-sm-10">
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
					<br />
					<img src="{{ asset('images/' . $organization->org_photo) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_org_photo" value="{{ $organization->org_photo }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $organization->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit Information" />
			</div>	
		</form>
	</div>
	
</div>
@include('partials/footer')
<script>
document.getElementsByName('advocacy')[0].value = "{{ $organization->advocacy }}";
</script>

@endsection('content')
