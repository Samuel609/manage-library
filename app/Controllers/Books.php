<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\Controller;

class Books extends Controller
{
    // Display all books
    public function index()
    {
        $bookModel = new BookModel();
        $data['books'] = $bookModel->findAll();
        return view('books/index', $data);
    }

    // Show form to create a new book
    public function create()
    {
        return view('books/create');
    }

    // Save a new book
    public function store()
    {
        $bookModel = new BookModel();
        $bookModel->save([
            'title' => $this->request->getPost('title'),
            'author' => $this->request->getPost('author'),
            'published_year' => $this->request->getPost('published_year'),
        ]);
        return redirect()->to('/books');
    }

    // Show form to edit an existing book
    public function edit($id)
    {
        $bookModel = new BookModel();
        $data['book'] = $bookModel->find($id);
        return view('books/edit', $data);
    }

    // Update the book in the database
    public function update($id)
    {
        $bookModel = new BookModel();
        $bookModel->update($id, [
            'title' => $this->request->getPost('title'),
            'author' => $this->request->getPost('author'),
            'published_year' => $this->request->getPost('published_year'),
        ]);
        return redirect()->to('/books');
    }

    // Delete a book
    public function delete($id)
    {
        $bookModel = new BookModel();
        $bookModel->delete($id);
        return redirect()->to('/books');
    }
}
