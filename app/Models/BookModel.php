<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';        // Name of your table
    protected $primaryKey = 'id';      // Primary key column
    protected $allowedFields = [
        'title',
        'author',
        'genre',
        'published_year',
        'cover_image'
    ]; // Columns you can insert/update

    protected $useTimestamps = true; // Automatically handle created_at & updated_at
}
