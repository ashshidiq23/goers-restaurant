<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\RestaurantSchedule;

class RestaurantSeeder extends Seeder
{
    public function run(): void
    {
        $restaurants = [
            [
                'name' => 'Kushi Tsuru',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:30', 'close' => '21:00'],
                ],
            ],
            [
                'name' => 'Osakaya Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Sun'], 'open' => '11:30', 'close' => '21:00'],
                    ['days' => ['Fri', 'Sat'], 'open' => '11:30', 'close' => '21:30'],
                ],
            ],
            [
                'name' => 'The Stinking Rose',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Sun'], 'open' => '11:30', 'close' => '22:00'],
                    ['days' => ['Fri', 'Sat'], 'open' => '11:30', 'close' => '23:00'],
                ],
            ],
            [
                'name' => "McCormick & Kuleto's",
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Sun'], 'open' => '11:30', 'close' => '22:00'],
                    ['days' => ['Fri', 'Sat'], 'open' => '11:30', 'close' => '23:00'],
                ],
            ],
            [
                'name' => 'Mifune Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:00', 'close' => '22:00'],
                ],
            ],
            [
                'name' => 'The Cheesecake Factory',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu'], 'open' => '11:00', 'close' => '23:00'],
                    ['days' => ['Fri', 'Sat'], 'open' => '11:00', 'close' => '00:30'],
                    ['days' => ['Sun'], 'open' => '10:00', 'close' => '23:00'],
                ],
            ],
            [
                'name' => 'New Delhi Indian Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'], 'open' => '11:30', 'close' => '22:00'],
                    ['days' => ['Sun'], 'open' => '17:30', 'close' => '22:00'],
                ],
            ],
            [
                'name' => 'Iroha Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Sun'], 'open' => '11:30', 'close' => '21:30'],
                    ['days' => ['Fri', 'Sat'], 'open' => '11:30', 'close' => '22:00'],
                ],
            ],
            [
                'name' => 'Rose Pistola',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu'], 'open' => '11:30', 'close' => '22:00'],
                    ['days' => ['Fri', 'Sat', 'Sun'], 'open' => '11:30', 'close' => '23:00'],
                ],
            ],
            [
                'name' => "Alioto's Restaurant",
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:00', 'close' => '23:00'],
                ],
            ],
            [
                'name' => 'Canton Seafood & Dim Sum Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'], 'open' => '10:30', 'close' => '21:30'],
                    ['days' => ['Sat', 'Sun'], 'open' => '10:00', 'close' => '21:30'],
                ],
            ],
            [
                'name' => 'All Season Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'], 'open' => '10:00', 'close' => '21:30'],
                    ['days' => ['Sat', 'Sun'], 'open' => '09:30', 'close' => '21:30'],
                ],
            ],
            [
                'name' => 'Bombay Indian Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:30', 'close' => '22:30'],
                ],
            ],
            [
                'name' => "Sam's Grill & Seafood Restaurant",
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'], 'open' => '11:00', 'close' => '21:00'],
                    ['days' => ['Sat'], 'open' => '17:00', 'close' => '21:00'],
                ],
            ],
            [
                'name' => '2G Japanese Brasserie',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Sun'], 'open' => '11:00', 'close' => '22:00'],
                    ['days' => ['Fri', 'Sat'], 'open' => '11:00', 'close' => '23:00'],
                ],
            ],
            [
                'name' => 'Restaurant Lulu',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Sun'], 'open' => '11:30', 'close' => '21:00'],
                    ['days' => ['Fri', 'Sat'], 'open' => '11:30', 'close' => '22:00'],
                ],
            ],
            [
                'name' => 'Sudachi',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed'], 'open' => '17:00', 'close' => '00:30'],
                    ['days' => ['Thu', 'Fri'], 'open' => '17:00', 'close' => '01:30'],
                    ['days' => ['Sat'], 'open' => '15:00', 'close' => '01:30'],
                    ['days' => ['Sun'], 'open' => '15:00', 'close' => '23:30'],
                ],
            ],
            [
                'name' => 'Hanuri',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:00', 'close' => '00:00'],
                ],
            ],
            [
                'name' => 'Herbivore',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu'], 'open' => '09:00', 'close' => '22:00'],
                    ['days' => ['Fri', 'Sat'], 'open' => '09:00', 'close' => '23:00'],
                ],
            ],
            [
                'name' => 'Penang Garden',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu'], 'open' => '11:00', 'close' => '22:00'],
                    ['days' => ['Fri', 'Sat'], 'open' => '10:00', 'close' => '22:30'],
                    ['days' => ['Sun'], 'open' => '11:00', 'close' => '23:00'],
                ],
            ],
            [
                'name' => 'John\'s Grill',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'], 'open' => '11:00', 'close' => '22:00'],
                    ['days' => ['Sun'], 'open' => '12:00', 'close' => '22:00'],
                ],
            ],
            [
                'name' => 'Quan Bac',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:00', 'close' => '22:00'],
                ],
            ],
            [
                'name' => 'Bamboo Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'], 'open' => '11:00', 'close' => '23:59'],
                    ['days' => ['Sun'], 'open' => '12:00', 'close' => '23:59'],
                ],
            ],
            [
                'name' => 'Burger Bar',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Sun'], 'open' => '11:00', 'close' => '22:00'],
                    ['days' => ['Fri', 'Sat'], 'open' => '11:00', 'close' => '00:00'],
                ],
            ],
            [
                'name' => 'Blu Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'], 'open' => '11:30', 'close' => '22:00'],
                    ['days' => ['Sat', 'Sun'], 'open' => '07:00', 'close' => '15:00'],
                ],
            ],
            [
                'name' => 'Naan \'N\' Curry',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:00', 'close' => '04:00'],
                ],
            ],
            [
                'name' => 'Shanghai China Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:00', 'close' => '21:30'],
                ],
            ],
            [
                'name' => 'Tres',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Sun'], 'open' => '11:30', 'close' => '22:00'],
                    ['days' => ['Fri', 'Sat'], 'open' => '11:30', 'close' => '23:00'],
                ],
            ],
            [
                'name' => 'Isobune Sushi',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:30', 'close' => '21:30'],
                ],
            ],
            [
                'name' => 'Viva Pizza Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:00', 'close' => '00:00'],
                ],
            ],
            [
                'name' => 'Far East Cafe',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:30', 'close' => '22:00'],
                ],
            ],
            [
                'name' => 'Parallel 37',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:30', 'close' => '22:00'],
                ],
            ],
            [
                'name' => 'Bai Thong Thai Cuisine',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'], 'open' => '11:00', 'close' => '23:00'],
                    ['days' => ['Sun'], 'open' => '11:00', 'close' => '22:00'],
                ],
            ],
            [
                'name' => 'Alhamra',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:00', 'close' => '23:00'],
                ],
            ],
            [
                'name' => 'A-1 Cafe Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:00', 'close' => '22:00'],
                ],
            ],
            [
                'name' => 'Nick\'s Lighthouse',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:00', 'close' => '22:30'],
                ],
            ],
            [
                'name' => 'Paragon Restaurant & Bar',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'], 'open' => '11:30', 'close' => '22:00'],
                    ['days' => ['Sat'], 'open' => '17:30', 'close' => '22:00'],
                ],
            ],
            [
                'name' => 'Chili Lemon Garlic',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'], 'open' => '11:00', 'close' => '22:00'],
                    ['days' => ['Sat', 'Sun'], 'open' => '17:00', 'close' => '22:00'],
                ],
            ],
            [
                'name' => 'Bow Hon Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:00', 'close' => '22:30'],
                ],
            ],
            [
                'name' => 'San Dong House',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:00', 'close' => '23:00'],
                ],
            ],
            [
                'name' => 'Thai Stick Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '11:00', 'close' => '01:00'],
                ],
            ],
            [
                'name' => 'Cesario\'s',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Sun'], 'open' => '11:30', 'close' => '22:00'],
                    ['days' => ['Fri', 'Sat'], 'open' => '11:30', 'close' => '22:30'],
                ],
            ],
            [
                'name' => 'Colombini Italian Cafe Bistro',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'], 'open' => '12:00', 'close' => '22:00'],
                    ['days' => ['Sat', 'Sun'], 'open' => '17:00', 'close' => '22:00'],
                ],
            ],
            [
                'name' => 'Sabella & La Torre',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Sun'], 'open' => '10:00', 'close' => '22:30'],
                    ['days' => ['Fri', 'Sat'], 'open' => '10:00', 'close' => '00:30'],
                ],
            ],
            [
                'name' => 'Soluna Cafe and Lounge',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'], 'open' => '11:30', 'close' => '22:00'],
                    ['days' => ['Sat'], 'open' => '17:00', 'close' => '22:00'],
                ],
            ],
            [
                'name' => 'Tong Palace',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'], 'open' => '09:00', 'close' => '21:30'],
                    ['days' => ['Sat', 'Sun'], 'open' => '09:00', 'close' => '22:00'],
                ],
            ],
            [
                'name' => 'India Garden Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '10:00', 'close' => '23:00'],
                ],
            ],
            [
                'name' => 'Sapporo-Ya Japanese Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'], 'open' => '11:00', 'close' => '23:00'],
                    ['days' => ['Sun'], 'open' => '11:00', 'close' => '22:30'],
                ],
            ],
            [
                'name' => 'Santorini\'s Mediterranean Cuisine',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '08:00', 'close' => '22:30'],
                ],
            ],
            [
                'name' => 'Kyoto Sushi',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu'], 'open' => '11:00', 'close' => '22:30'],
                    ['days' => ['Fri'], 'open' => '11:00', 'close' => '23:00'],
                    ['days' => ['Sat'], 'open' => '11:30', 'close' => '23:00'],
                    ['days' => ['Sun'], 'open' => '16:30', 'close' => '22:30'],
                ],
            ],
            [
                'name' => 'Marrakech Moroccan Restaurant',
                'schedules' => [
                    ['days' => ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], 'open' => '17:30', 'close' => '02:00'],
                ],
            ],
            [
                'name' => 'Parallel 37',
                'schedules' => [
                    ['days' => ['Mon'], 'open' => '17:00', 'close' => '18:15'],
                    ['days' => ['Fri'], 'open' => '17:00', 'close' => '18:15'],
                    ['days' => ['Tue'], 'open' => '12:15', 'close' => '12:15'],
                    ['days' => ['Wed'], 'open' => '13:15', 'close' => '17:45'],
                    ['days' => ['Thu', 'Sat'], 'open' => '10:00', 'close' => '15:00'],
                    ['days' => ['Sun'], 'open' => '06:30', 'close' => '12:45'],
                ],
            ],
        ];

        foreach ($restaurants as $data) {
            $restaurant = Restaurant::create(['name' => $data['name']]);

            foreach ($data['schedules'] as $schedule) {
                foreach ($schedule['days'] as $day) {
                    RestaurantSchedule::create([
                        'restaurant_id' => $restaurant->id,
                        'day' => $day,
                        'open_time' => $schedule['open'],
                        'close_time' => $schedule['close'],
                    ]);
                }
            }
        }
    }
}
