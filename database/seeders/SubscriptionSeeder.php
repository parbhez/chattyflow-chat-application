<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Subscription;
class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $createSubscriptions = [
            ['name'=>'starter','price'=>'20', 'services' =>'Track up to 100 customers'],
            ['name'=>'team','price'=>'20.50', 'services' =>'Track up to 500 customers'],
            ['name'=>'business','price'=>'50', 'services' =>'Track up to 1000 customers'],

        ];
        
        Subscription::insert($createSubscriptions);

    }
}
