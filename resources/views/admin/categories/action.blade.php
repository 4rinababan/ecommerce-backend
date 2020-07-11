<div>
	<a class="btn btn-info" href="{{ route('categories.show', $id) }}">Show</a>
	<a class="d-inline" href="{{ route('categories.edit', $id) }}"><input type="button" value="Edit" class="btn btn-warning" /></a>
	<form method="POST" action="{{ route('categories.destroy', $id) }}" class="d-inline">
		@csrf
		@method('DELETE')
		<input type="submit" value="Delete" class="btn btn-danger" />
	</form>
</div>