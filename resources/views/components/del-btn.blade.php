<form action="{{ url($table . '/' . $id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn delete" onclick="return confirm('Are you sure?');">Delete</button>
</form>