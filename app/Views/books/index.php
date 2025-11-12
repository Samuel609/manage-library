<!DOCTYPE html>
<html>
<head>
    <title>Library - Books</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>Books</h1>
    <a href="<?= site_url('books/create') ?>" class="btn btn-primary mb-3">Add New Book</a>

    <?php if(!empty($books)): ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Published Year</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($books as $book): ?>
            <tr>
                <td><?= esc($book['id']) ?></td>
                <td><?= esc($book['title']) ?></td>
                <td><?= esc($book['author']) ?></td>
                <td><?= esc($book['published_year']) ?></td>
                <td>
                    <a href="<?= site_url('books/edit/'.$book['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?= site_url('books/delete/'.$book['id']) ?>" method="post" style="display:inline-block;">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
        <p>No books found.</p>
    <?php endif; ?>
</div>
</body>
</html>
