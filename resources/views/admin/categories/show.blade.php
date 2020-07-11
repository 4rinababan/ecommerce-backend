@extends('layouts.metronic')

@section('content')
<div class="container">
	<div class="row">
		<div class="card card-custom gutter-b col-md-12">
			<div class="card-header flex-wrap border-0 pt-6 pb-0">
				<div class="card-title">
					<h3 class="card-label">Category - {{ $data['name'] }}</h3>
				</div>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="name" placeholder="Category Name" value="{{ $data['name'] }}" autocomplete="off" readonly="readonly" />
				</div>
				<div class="form-group">
					<label>Slug</label>
					<input type="text" class="form-control" name="slug" placeholder="Slug" value="{{ $data['slug'] }}" autocomplete="off" readonly="readonly" />
				</div>
				<div class="form-group">
					<label>Logo</label>
					<div class="col-lg-9 col-xl-6">
						<div class="image-input" id="logo" style="background-image: url({{ Storage::url($data['logo']) }}); background-size: contain; background-position: center;">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" id="description" rows="3" readonly="readonly">{{ $data['description'] }}</textarea>
				</div>
				
				{{--
				<div class="form-group">
					<label for="sequence">Sequence</label>
					<input type="number" class="form-control" name="sequence" value="{{ $data['sequence'] }}" autocomplete="off" min="0" max="100" readonly="readonly" />
				</div>
				--}}
				
			</div>
			<div class="card-footer">
				<button type="button" class="btn btn-secondary" id="btn_cancel">Back</button>
			</div>
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