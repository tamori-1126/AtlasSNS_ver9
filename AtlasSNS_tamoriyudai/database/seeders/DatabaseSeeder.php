<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //10人のランダムユーザーを生成
        // \App\Models\User::factory(10)->create();

        //特定のユーザーを作成
        \App\Models\User::factory()->create([
            'username' => 'Test User',//ユーザー名
            'email' => 'test@aaaa.com',//メールアドレス
            'password' => Hash::make('aaaa'),//暗号化されたパスワード
        ]);
    }
}
