@extends('layouts.metronic')

@section('content')
<div class="container">
	<div class="row">
		<div class="card card-custom gutter-b col-md-12">
			<div class="card-header flex-wrap border-0 pt-6 pb-0">
				<div class="card-title">
					<h3 class="card-label">Create New Customer Group</h3>
				</div>
			</div>
			<form method="POST" enctype="multipart/form-data" action="{{ route('customer-groups.store') }}">
				@csrf
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
                    {{-- 
                    <div class="form-group">
						<label for="description">Description</label>
						<textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="3"></textarea>
						@error('description')
							<div class="invalid-feedback">{{ $message }}</div>
						@enderror
                    </div> 
                    --}}
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