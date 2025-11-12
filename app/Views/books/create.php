<!DOCTYPE html>
<html>
<head>
    <title>Add New Book</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Add New Book</h1>
    <form action="<?= site_url('books/store') ?>" method="post">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>

        <div class="mb-3">
            <label for="published_year" class="form-label">Published Year</label>
            <input type="number" class="form-control" id="published_year" name="published_year" required>
        </div>

        <button type="submit" class="btn btn-success">Add Book</button>
        <a href="<?= site_url('books') ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
