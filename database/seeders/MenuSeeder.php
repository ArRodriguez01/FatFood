<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu=new Menu();
        $menu->name="La cataloica";
        $menu->ingredientes="Vacuno,Pan Brioche,Lechuga romana,Queso Cheddar,Tomate";
        $menu->section="burgers";
        $menu->allergens=1;
        $menu->price=12.50;
        $menu->url="https://s2.abcstatics.com/abc/www/multimedia/gastronomia/2023/03/07/mejor-hamburguesa-espana-sevilla_20230307190221-RXTcASc7Wu7h5hdg6i3AwmJ-1200x840@abc.jpg";
        $menu->save();
        $menu=new Menu();
        $menu->name="Tequeños";
        $menu->ingredientes="Hojaldre,Queso Brie";
        $menu->section="sides";
        $menu->allergens=1;
        $menu->price=4.50;
        $menu->url="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLxphdX__33qSE6vdN7XIE15g9GfouT5QI_g&usqp=CAU";
        $menu->save();
    }
}
