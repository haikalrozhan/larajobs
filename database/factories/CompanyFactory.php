<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    // protected $model = User::class;
    /**
     * protected $model = User::class;
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'cname' => $name = $this->faker->company,
            'slug' => Str::slug($name),
            'address' =>$this->faker->address,
            'phone' =>$this->faker->phoneNumber,
            'website' => $this->faker->domainName,
            'logo' => 'img/avatar/man.jpg',
            'cover_photo' => 'img/banner/banner.png',
            'slogan' => 'learn and growth',
            'description' => $this->faker->paragraph(rand(2, 10))
        ];
    }
}
