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
        $account_list = [
            [
                'id' => 1,
                'user_id' => 1,
                'acct_name' => 'account1',
                'init_invest' => 12345.11,
                'start_date' => '2021-09-22'

            ],
            [
                'id' => 2,
                'user_id' => 2,
                'acct_name' => 'account2',
                'init_invest' => 11111.11,
                'start_date' => '2021-10-23'

            ],
            [
                'id' => 3,
                'user_id' => 3,
                'acct_name' => 'account3',
                'init_invest' => 12223.11,
                'start_date' => '2021-11-24'

            ]
        ];
        foreach($account_list as $account){
            \App\Accounts::create($account);
        }
    }
}
