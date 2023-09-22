<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\blog>
 */
class blogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul'   => $this->faker->sentence(mt_rand(3,8)),
            'slug'    => $this->faker->slug(),
            'subjudul'   => $this->faker->paragraph(2),
            //'isi'   =>'<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5,10))) . '</p>',
            'isi' => collect($this->faker->paragraphs(mt_rand(5,10)))
                       ->map(fn($p) => "<p>$p</p>")
                       ->implode(''),
            'user_id'  => mt_rand(1,3),
            'category_id'  => mt_rand(1,3),
        ];
    }
}
