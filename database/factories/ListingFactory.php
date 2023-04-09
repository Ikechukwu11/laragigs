<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        $title = array(
            "Senior Laravel Developer Needed",
            "PHP/Laravel Developer - Work From Home",
            "Full Stack PHP/Laravel Developer",
            "Laravel Web Developer - Remote",
            "Experienced Laravel Developer",
            "PHP/Laravel Developer - Contract",
            "Laravel Backend Developer",
            "Full Stack Web Developer - Laravel",
            "Laravel Developer - Remote",
            "Senior PHP/Laravel Engineer",
            "PHP/Laravel Developer - Full Time",
            "Laravel Developer - Freelance",
            "PHP/Laravel Developer - Part Time",
            "Laravel Developer - Contract",
            "Web Application Developer - Laravel",
            "PHP/Laravel Developer - Remote",
        );
        $tags = array(
            "Laravel Nova",
            "Eloquent ORM",
            "Blade Templates",
            "API Development",
            "Migrations",
            "Lumen Micro-Framework",
            "Testing with PHPUnit",
            "Middleware",
            "Model-View-Controller",
            "Form Validation",
            "Queues",
            "Authentication",
            "Routing",
            "Database Seeding",
            "Artisan CLI",
            "Task Scheduling",
            "Cache",
            "Laravel Horizon",
            "Pagination",
            "Collections",
            "Resource Controllers",
            "Blade Components",
            "Model Factories",
            "Authorization",
            "Laravel Echo",
            "Laravel Mix",
            "Polymorphic Relations",
            "Request Lifecycle",
            "Observer Pattern",
            "Package Development"
        );
        $desc = array(
            'We are looking for an experienced Senior Laravel Developer to join our team. As a Senior Laravel Developer, you will be responsible for developing and maintaining high-quality web applications using Laravel framework.',
            'We are seeking a PHP/Laravel Developer to work remotely from home. The ideal candidate should have experience in developing web applications using Laravel framework and should be comfortable working independently.',
            'We are seeking a Full Stack PHP/Laravel Developer to join our team. The ideal candidate should have experience in developing both frontend and backend of web applications using PHP and Laravel framework.',
            'We are looking for a Laravel Web Developer to work remotely. The ideal candidate should have experience in developing web applications using Laravel framework and should be comfortable working independently.',
            'We are seeking an experienced Laravel Developer to join our team. The ideal candidate should have strong experience in developing web applications using Laravel framework and should be able to work on complex projects.',
            'We are looking for a PHP/Laravel Developer to work on a contract basis. The ideal candidate should have experience in developing web applications using Laravel framework and should be able to work independently.',
            'We are seeking a Laravel Backend Developer to join our team. The ideal candidate should have experience in developing backend of web applications using Laravel framework and should be comfortable working with databases and APIs.',
            'We are looking for a Full Stack Web Developer with experience in Laravel framework to join our team. The ideal candidate should have experience in developing both frontend and backend of web applications using Laravel framework.',
            'We are seeking a Laravel Developer to work remotely. The ideal candidate should have experience in developing web applications using Laravel framework and should be comfortable working independently.',
            'We are looking for a Senior PHP/Laravel Engineer to join our team. The ideal candidate should have strong experience in developing web applications using Laravel framework and should be able to mentor and guide junior developers.',
            'We are seeking a Full Time PHP/Laravel Developer to join our team. The ideal candidate should have experience in developing web applications using Laravel framework and should be able to work independently.',
            'We are looking for a Freelance Laravel Developer to work on a project basis. The ideal candidate should have experience in developing web applications using Laravel framework and should be able to work independently.',
            'We are seeking a Part Time PHP/Laravel Developer to join our team. The ideal candidate should have experience in developing web applications using Laravel framework and should be able to work independently.',
            'We are looking for a Laravel Developer to work on a contract basis. The ideal candidate should have experience in developing web applications using Laravel framework and should be able to work independently.',
            'We are seeking a Web Application Developer with experience in Laravel framework to join our team. The ideal candidate should have experience in developing web applications using Laravel framework and should be able to work independently.',
            'We are looking for a PHP/Laravel Developer to work remotely. The ideal candidate should have experience in developing web applications using Laravel framework and should be comfortable working independently.'
        );

        // Get a random key from the array
        $rand_keys = array_rand($tags, 3);

        //Create an array with the randomly selected tags enclosed in single quotes
        //$random_tags = array("'".$tags[$rand_keys[0]].",".$tags[$rand_keys[1]].",".$tags[$rand_keys[2]]."'");
        $random_tags = array($tags[$rand_keys[0]].",".$tags[$rand_keys[1]].",".$tags[$rand_keys[2]]);

        //Join the array elements into a single string with commas
        //$random_tags_str = strtolower(implode(", ", $random_tags));
         $random_tags_str = implode(", ", $random_tags);
        $random_desc_str = $desc[array_rand($desc)];
        $random_titles_str = $title[array_rand($title)];
        //return $random_tags;

        return [
            'title'=>$random_titles_str,
            //$this->faker->sentence(),
            'tags'=>$random_tags_str,
            'company'=>$this->faker->company(),
            'location'=>$this->faker->city(),
            'email'=>$this->faker->companyEmail(),
            'website'=>$this->faker->url(),
            'description'=>$random_desc_str,
            //$this->faker->paragraph(5),
            //
        ];
    }
}
