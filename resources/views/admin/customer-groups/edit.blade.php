@extends('layouts.metronic')

@section('content')
<div class="container">
	<div class="row">
		<div class="card card-custom gutter-b col-md-12">
			<div class="card-header flex-wrap border-0 pt-6 pb-0">
				<div class="card-title">
					<h3 class="card-label">Update Customer Group</h3>
				</div>
			</div>
			<form method="POST" enctype="multipart/form-data" action="{{ route('customer-groups.update', $data->id) }}">
				@csrf
				@method('PUT')
				<div class="card-body">
					<div class="form-group">
						<label>Group Name *</label>
						<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Group Name" value="{{ old('name') ?? (isset($data) ? $data['name'] : '') }}" autocomplete="off" />
						@error('name')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<label>Description</label>
						<input type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description" value="{{ old('description') ?? (isset($data) ? $data['description'] : '') }}" autocomplete="off" />
						@error('description')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					{{-- <div class="form-group">
						<label>Logo *</label>
						<div class="col-lg-9 col-xl-6 @error('logo') is-invalid @enderror">
							<div class="image-input image-input-empty" id="logo" style="background-image: url({{ isset($data) ? $data['logo'] : asset('media/defaults/category.png') }}); background-size: contain; background-position: center;">
								<div class="image-input-wrapper" style="background-size: contain; background-position: center;"></div>
								<label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change Logo">
									<i class="fa fa-pen icon-sm text-muted"></i>
									<input type="file" name="logo" accept=".png, .jpg, .jpeg" />
									<input type="hidden" name="logo_remove" />
								</label>
								<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Reset Logo">
									<i class="ki ki-bold-close icon-xs text-muted"></i>
								</span>
								<span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove Logo">
									<i class="ki ki-bold-close icon-xs text-muted"></i>
								</span>
							</div>
						</div>
						@error('logo')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3"></textarea>
						@error('description')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div> --}}
					{{--
					<div class="form-group">
						<label for="website">Website</label>
						<input type="text" class="form-control @error('website') is-invalid @enderror" name="website" placeholder="Brand's Website URL" value="" autocomplete="off" />
						@error('website')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					--}}
					{{--
					<div class="form-group">
						<label for="sequence">Sequence</label>
						<input type="number" class="form-control @error('sequence') is-invalid @enderror" name="sequence" value="{{ old('sequence') ?? $model->sequence ?? '50' }}" autocomplete="off" min="0" max="100" />
						@error('sequence')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					--}}
					{{--
					<div class="form-group">
						<label>Is Hot?</label>
						<div class="checkbox-inline">
							<label class="checkbox">
							<input type="checkbox" name="is_hot" />
							<span></span></label>
						</div>
						@error('is_hot')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
					</div>
					--}}
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary mr-2">Submit</button>
					<button type="button" class="btn btn-secondary" id="btn_cancel">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

{{-- Scripts Section --}}
@section('scripts')
	{{-- page scripts --}}
	<script type="text/javascript">
		$(document).ready(function(){
			$("#btn_cancel").on('click', function(){
				window.history.back();
			});
		});
	</script>
@endsection