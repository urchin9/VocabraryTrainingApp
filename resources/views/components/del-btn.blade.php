<form action="{{ url($table . '/' . $id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn delete">Delete</button>
</form>