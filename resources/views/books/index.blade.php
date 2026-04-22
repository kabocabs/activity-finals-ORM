<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: linear-gradient(135deg,#0f2027,#203a43,#2c5364);
            min-height:100vh;
            color:white;
        }

        .main-box{
            background:white;
            color:#333;
            border-radius:20px;
            padding:30px;
        }

        .table th{
            background:#2c5364;
            color:white;
        }
    </style>
</head>

<body>

<div class="container py-5">

    <div class="text-center mb-4">
        <h1>📚  BOOKS</h1>
        <a href="{{ route('books.create') }}" class="btn btn-info mt-3 shadow">
            + Add New Book
        </a>
    </div>

    <div class="main-box shadow">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th width="200">Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->published_date }}</td>
                    <td>
                        <a href="{{ route('books.edit',$book->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('books.destroy',$book->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

</div>
</body>
</html>