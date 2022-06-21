<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\Tour;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $car = Car::create([
            'name' => 'Tesla Model S',
            'gearbox' => 'Автомат',
            'engine' => 'Електродвигун',
            'capacity' => '5',
            'price' => '60'
        ]);

        $car = Car::create([
            'name' => 'Chevy Corvette',
            'gearbox' => 'Механіка',
            'engine' => 'Бензиновий двигун',
            'capacity' => '2',
            'price' => '100'
        ]);
        $car = Car::create([
            'name' => 'Volkswagen Jetta',
            'gearbox' => 'Механіка',
            'engine' => 'Дизельний двигун',
            'capacity' => '5',
            'price' => '50'
        ]);
        $car = Car::create([
            'name' => 'Nissan Leaf',
            'gearbox' => 'Автомат',
            'engine' => 'Електродвигун',
            'capacity' => '4',
            'price' => '30'
        ]);
        $car = Car::create([
            'name' => 'Nissan Maxima',
            'gearbox' => 'Автомат',
            'engine' => 'Гібрид',
            'capacity' => '5',
            'price' => '65'
        ]);
        $car = Car::create([
            'name' => 'Ford Fusion',
            'gearbox' => 'Автомат',
            'engine' => 'Гібрид',
            'capacity' => '5',
            'price' => '40'
        ]);
        $car = Car::create([
            'name' => 'Polestar 2',
            'gearbox' => 'Автомат',
            'engine' => 'Електродвигун',
            'capacity' => '5',
            'price' => '110'
        ]);
        
        $car = Car::create([
            'name' => 'BMW X3',
            'gearbox' => 'Автомат',
            'engine' => 'Дизельний двигун',
            'capacity' => '5',
            'price' => '80'
        ]);
        
        $car = Car::create([
            'name' => 'Mazda Miata RF',
            'gearbox' => 'Механіка',
            'engine' => 'Бензиновий двигун',
            'capacity' => '2',
            'price' => '70'
        ]);

        $tour = Tour::create([
            'country' => 'Німеччина',
            'stops' => '12',
            'duration' => '7',
            'living' => 'Готелі 5 зірок',
            'price' => '600'
        ]);

        $tour = Tour::create([
            'country' => 'Шрі-Ланка',
            'stops' => '10',
            'duration' => '5',
            'living' => 'Готелі 4 зірки',
            'price' => '500'
        ]);

        $tour = Tour::create([
            'country' => 'Україна',
            'stops' => '15',
            'duration' => '10',
            'living' => 'Мотелі 3 зірки',
            'price' => '400'
        ]);

        $tour = Tour::create([
            'country' => 'Балі',
            'stops' => '5',
            'duration' => '14',
            'living' => 'Готелі 5 зірок',
            'price' => '900'
        ]);

        $tour = Tour::create([
            'country' => 'Дубай',
            'stops' => '12',
            'duration' => '6',
            'living' => 'Готелі 5 зірок',
            'price' => '1500'
        ]);

        $tour = Tour::create([
            'country' => 'Туреччина',
            'stops' => '14',
            'duration' => '10',
            'living' => 'Мотелі 4 зірки',
            'price' => '650'
        ]);
    }
}
