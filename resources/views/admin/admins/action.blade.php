<div>
	<a class="btn btn-info" href="{{ route('admins.show', $id) }}">Show</a>
	<a class="d-inline" href="{{ route('admins.edit', $id) }}"><input type="button" value="Edit" class="btn btn-warning" /></a>
	<form method="POST" action="{{ route('admins.destroy', $id) }}" class="d-inline">
		@csrf
		@method('DELETE')
		<input type="submit" value="Delete" class="btn btn-danger" />
	</form>
</div>