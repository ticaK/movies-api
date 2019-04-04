<?php

use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $genres = ['Comedy', 'Horror','Action','Triller','Drama'];
            foreach($genres as $genre){
                factory(App\Movie::class,3)->create([
                    'genre'=>$genre
                ]);
            }
        
    }
}
