<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'acct_name' => 'Engineer',
                'init_invest' => 13600,
                'start_date' => '2020-12-10',
                'remarks' => 'Outstanding'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Business',
                'init_invest' => 14900,
                'start_date' => '2020-12-11',
                'remarks' => 'Hardworking'
            ],
            [
                'user_id' => 1,
                'acct_name' => 'Engineer',
                'init_invest' => 19800,
                'start_date' => '2020-12-10',
                'remarks' => 'Outstanding'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Business',
                'init_invest' => 12700,
                'start_date' => '2020-12-11',
                'remarks' => 'Outstanding'
            ],

        ];
        foreach($data as $account){
            \App\Account::create($account);
        }
    }
}
