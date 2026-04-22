<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(135deg,#0f2027,#203a43,#2c5364);
            min-height:100vh;
        }

        .form-box{
            background:white;
            border-radius:20px;
            padding:35px;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <div class="col-md-6 mx-auto form-box shadow">
        <h2 class="text-center mb-4">✏️ Edit Book</h2>

        <form action="{{ route('books.update',$book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label class="fw-bold">Title</label>
            <input type="text" name="title" value="{{ $book->title }}" class="form-control mb-3" required>

            <label class="fw-bold">Author</label>
            <input type="text" name="author" value="{{ $book->author }}" class="form-control mb-3" required>

            <label class="fw-bold">Published Date</label>
            <input type="date" name="published_date" value="{{ $book->published_date }}" class="form-control mb-4" required>

            <button class="btn btn-success w-100">Update Book</button>
        </form>
    </div>

</div>
</body>
</html>