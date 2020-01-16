<?php

use Phinx\Seed\AbstractSeed;

class DatabaseSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $tables = ['types', 'categories', 'users', 'jobs'];
        foreach ($tables as $table) {
            ${$table} = $this->table($table);
            ${$table}->truncate();
        }

        $typesData = [
            ['name' => 'Full Time', 'color' => '#28a745'],
            ['name' => 'Part Time', 'color' => '#fd7e14'],
            ['name' => 'Freelance', 'color' => '#dc3545'],
        ];
        $types->insert($typesData)->save();

        for ($i = 0; $i < 7; $i++) {
            $categoryData = [
                'name' => $faker->sentence(2, true),
            ];

            $categories->insert($categoryData)->save();

            $categoryId = $this->getAdapter()->getConnection()->lastInsertId();

            for ($j = 0; $j < 10; $j++) {
                $userData = [
                    'first_name' => $faker->firstName,
                    'last_name' => $faker->lastName,
                    'email' => $faker->unique()->safeEmail,
                    'username' => $faker->unique()->userName,
                    'password' => '$2y$10$rqEf0LcfiV/ibwFSswNpiu8WIkYmwwO8mx.QuVOsxeSUf/w.rXUxi', // password
                    'role' => 'Employer',
                    'created' => date('Y-m-d H:i:s'),
                ];

                $users->insert($userData)->save();

                $userId = $this->getAdapter()->getConnection()->lastInsertId();

                $jobData = [
                    'category_id' => $categoryId,
                    'user_id' => $userId,
                    'type_id' => $faker->numberBetween(1,3),
                    'company_name' => $faker->company,
                    'title' => $faker->jobTitle,
                    'description' => $faker->paragraphs(5, true),
                    'city' => $faker->city,
                    'state' => $faker->stateAbbr,
                    'contact_email' => $faker->safeEmail,
                    'created' => date('Y-m-d H:i:s'),
                ];

                $jobs->insert($jobData)->save();
            }
        }
    }
}
