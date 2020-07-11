@extends('layouts.metronic')

@section('content')
<div class="container">
	<div class="row">
		@if (session('success'))
		<div class="alert alert-custom alert-success alert-shadow gutter-b col-lg-12 col-xl-12" role="alert">
			<div class="alert-icon">
				{{ Metronic::getSVG('media/svg/icons/Navigation/Double-check.svg', 'svg-icon-white svg-icon-xl') }}
			</div>
			<div class="alert-text">{{ session('success') }}</div>
		</div>
		@endif
		<div class="card card-custom gutter-b col-md-12">
			<div class="card-header flex-wrap border-0 pt-6 pb-0">
				<div class="card-title">
					<h3 class="card-label">Categories
				</div>
			</div>
			<div class="card-body">
				{{ $dataTable->table([], true) }}
			</div>
		</div>
	</div>
</div>
@endsection

{{-- Scripts Section --}}
@section('scripts')
	{{-- page scripts --}}
	{{ $dataTable->scripts() }}
@endsection