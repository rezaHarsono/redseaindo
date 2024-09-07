<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::create([
            'name' => 'Yudhi Sugriat',
            'role' => 'President Commissioner',
            'description' => 'Yudhi Sugriat is a distinguished alumnus of the University of Alabama, where he pursued his higher education. With 15 years of substantial experience as a producer of renowned products, he transitioned into the advertising field, serving as a Copywriter for 5 years, before immersing himself in the oil and gas industry until 2010. Since that time, he has been actively involved in the trading of coal, nickel, gas fuel (EN590), and gold bars.',
            'description_short' => 'Yudhi Sugriat is a distinguished alumnus of the University of Alabama, where he pursued his higher education. With 15 years of substantial experience as a producer of renowned products, he transitioned into the advertising field, serving as a Copywriter for 5 years, before immersing himself in the oil and gas industry until 2010.',
            'img' => 'yudhi',
            'img_close' => 'yudhi_close',
            'modal_id' => 1
        ]);

        Person::create([
            'name' => 'Mufid Yanto',
            'role' => 'Chief Executive Officer',
            'description' => 'Mufid Yanto, equipped with a Master of Management degree, boasts an extensive tenure of over 15 years as a proficient coal mining operator in South Kalimantan. His adept management skills have been instrumental in overseeing numerous large-scale mining endeavors, particularly within the region of South Kalimantan.',
            'description_short' => 'Mufid Yanto, equipped with a Master of Management degree, boasts an extensive tenure of over 15 years as a proficient coal mining operator in South Kalimantan. His adept management skills have been instrumental in overseeing numerous large-scale mining endeavors, particularly within the region of South Kalimantan.',
            'img' => 'Yanto',
            'img_close' => 'Yanto_close',
            'modal_id' => 2
        ]);

        Person::create([
            'name' => 'Siti Habibah SH, MH',
            'role' => 'Chief Information and Legal Officer',
            'description' => 'Siti Habibah SH, MH, attained her postgraduate education at the esteemed Faculty of Law, Brawijaya University. As an esteemed legal practitioner, she diligently handles both litigation and non-litigation cases, actively engaging with the Indonesian National Arbitration Agency. Moreover, leveraging her considerable expertise as a lawyer, Siti has effectively facilitated transactions pertaining to the acquisition of coal mining companies.',
            'description_short' => 'Siti Habibah SH, MH, attained her postgraduate education at the esteemed Faculty of Law, Brawijaya University. As an esteemed legal practitioner, she diligently handles both litigation and non-litigation cases, actively engaging with the Indonesian National Arbitration Agency.',
            'img' => 'Habibah',
            'img_close' => 'Habibah_close',
            'modal_id' => 3
        ]);
    }
}
