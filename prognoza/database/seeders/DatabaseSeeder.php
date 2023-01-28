<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;
use App\Models\User;
use App\Models\Prognoza;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Prognoza::truncate();

       Region::truncate();

       $u1=new User;
       $u1->name="Ivana";
       $u1->prezime="Drndarevic";
       $u1->email="iki@gmail.com";
       $u1->password="iki";
       $u1->save();
      



       $r1=new Region;
       $r1->naziv="Severna Srbija";
       $r1->save();

       $r2=new Region;
       $r2->naziv="Juzna Srbija";
       $r2->save();

       $r3=new Region;
       $r3->naziv="Istocna Srbija";
       $r3->save();

       $r4=new Region;
       $r4->naziv="Zapadna Srbija";
       $r4->save();

       $r5=new Region;
       $r5->naziv="Severna Srbija";
       $r5->save();

        
    }
}
