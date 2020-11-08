<?php
use App\Book;
use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create(['title' => 'A','author' => 'Nama Pengarang','publication' => 'Malang', 'year' => '2020']);
    }
}
