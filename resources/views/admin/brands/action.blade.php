<div>
	<a class="d-inline" href="{{ route('brands.edit', $id) }}"><input type="button" value="Edit" class="btn btn-warning" /></a>
	<form method="POST" action="{{ route('brands.destroy', $id) }}" class="d-inline">
		@csrf
		@method('DELETE')
		<input type="submit" value="Delete" class="btn btn-danger" />
	</form>
</div>