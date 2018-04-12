<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    private function slugify($string, $maxlen=0)
    {
        $string = trim(preg_replace('/[^a-z0-9]+/', '-', strtolower($string)), '-');
        if ($maxlen && strlen($string) > $maxlen) {
            $string = substr($string, 0, $maxlen);
            $pos = strrpos($string, '-');
            if ($pos > 0) {
                $string = substr($string, 0, $pos);
            }
        }
        return $string;
    }
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            "Bussiness",
            "IT and Software",
            "Office Productivity",
            "Personal Development",
            "Design",
            "Marketing"
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category,
                'slug' => $this->slugify($category),
            ]);
        }
    }
}
