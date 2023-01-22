<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookController extends Controller
{
    public function insert() {
        $result = DB::table('book')->insert(
            [
                'title' => 'Buku Laravel',
                'description' => 'Ini buku Laravel',
                'author' => 'alya',
                'created_at' => now(), 
                'updated_at' => now()
            ]
        );

        dump($result);
    }

    public function insertOrm() {
        $result = Book::create(
            [
                'title' => 'Buku Laravel2',
                'description' => 'Ini buku Laravel',
                'author' => 'alya'
            ]
        );

        dump($result);
    }
}
