<h1>Add New Book</h1>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <label>Title:</label>
    <input type="text" name="title" required>
    <br>

    <label>Author:</label>
    <input type="text" name="author" required>
    <br>

    <label>Published Date:</label>
    <input type="date" name="published_date" required>
    <br>

    <button type="submit">Save</button>
</form>