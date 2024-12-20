<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    # Dashboard sayfasına sadece “admin”, “uzman” veya “yazar” rolü olan kullanıcılar girebilmesi için roller oluşturuldu.
    public function run(): void
    {
        //

        Role::create(['name'=>'Admin','slug'=>'admin','description'=>'Yönetici']);
        Role::create(['name'=>'Uzman','slug'=>'uzman','description'=>'Uzman Kullanıcı']);
        Role::create(['name'=>'Yazar','slug'=>'yazar','description'=>'İçerik Yazarı']);
        Role::create(['name'=>'Kullanıcı','slug'=>'kullanici','description'=>'Standart Kullanıcı']);
    }
}
