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
        //HAMBURGUESAS
        $menu=new Menu();
        $menu->name="La catolica";
        $menu->ingredientes="Pan Brioche,Carne de Vacuno,Lechuga romana,Queso Cheddar,Tomate";
        $menu->section="burgers";
        $menu->allergens=1;
        $menu->price=11.50;
        $menu->url="https://s2.abcstatics.com/abc/www/multimedia/gastronomia/2023/03/07/mejor-hamburguesa-espana-sevilla_20230307190221-RXTcASc7Wu7h5hdg6i3AwmJ-1200x840@abc.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="La Burgiana";
        $menu->ingredientes="Pan,Carne de Vacuno,Cebolla Caramelizada,Pepinillos,Mayonesa,Queso Cheddar";
        $menu->section="burgers";
        $menu->allergens=1;
        $menu->price=12.80;
        $menu->url="https://estaticos-cdn.prensaiberica.es/clip/18b1690a-1e3b-490c-a959-dc01892a1eff_16-9-discover-aspect-ratio_default_0.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="La Quemada";
        $menu->ingredientes="PanSemillas,Carne de Vacuno, Rucula,Salmon,Mayonesa";
        $menu->section="burgers";
        $menu->allergens=1;
        $menu->price=12.60;
        $menu->url="https://assets.tmecosys.com/image/upload/t_web767x639/img/recipe/ras/Assets/86A66143-E5A0-4957-9913-B47DF0F49C9F/Derivates/56CC31D7-6A87-49B5-BEBD-34728D9999A4.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="La Lasaña";
        $menu->ingredientes="Pan,Carne de Buey,Bechamel";
        $menu->section="burgers";
        $menu->allergens=1;
        $menu->price=16.50;
        $menu->url="https://img2.rtve.es/i/?w=1600&i=1649416954898.jpg";
        $menu->save();

        $menu=new Menu();
        $menu->name="La Cascada";
        $menu->ingredientes="Pan,Carne de Vacuno,Bacon,Queso chedar";
        $menu->section="burgers";
        $menu->allergens=1;
        $menu->price=16.50;
        $menu->url="https://media.traveler.es/photos/64073862458376745858219e/16:9/pass/BFPP.jpeg";
        $menu->save();
        //ENTRANTES
        $menu=new Menu();
        $menu->name="Tequeños";
        $menu->ingredientes="Hojaldre,Queso Brie";
        $menu->section="sides";
        $menu->allergens=1;
        $menu->price=2.89;
        $menu->url="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLxphdX__33qSE6vdN7XIE15g9GfouT5QI_g&usqp=CAU";
        $menu->save();

        $menu=new Menu();
        $menu->name="Patatas";
        $menu->ingredientes="Patatas con Sal";
        $menu->section="sides";
        $menu->allergens=1;
        $menu->price=4.20;
        $menu->url="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLxphdX__33qSE6vdN7XIE15g9GfouT5QI_g&usqp=CAU";
        $menu->save();

        $menu=new Menu();
        $menu->name="Patatas Deluxe";
        $menu->ingredientes="Patatas con tiras de bacon y queso cheddar";
        $menu->section="sides";
        $menu->allergens=1;
        $menu->price=4.90;
        $menu->url="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLxphdX__33qSE6vdN7XIE15g9GfouT5QI_g&usqp=CAU";
        $menu->save();

        $menu=new Menu();
        $menu->name="Tequeños";
        $menu->ingredientes="Hojaldre,Queso Brie";
        $menu->section="sides";
        $menu->allergens=1;
        $menu->price=4.50;
        $menu->url="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLxphdX__33qSE6vdN7XIE15g9GfouT5QI_g&usqp=CAU";
        $menu->save();
        $menu=new Menu();
        $menu->name="Tequeños";
        $menu->ingredientes="Hojaldre,Queso Brie";
        $menu->section="sides";
        $menu->allergens=1;
        $menu->price=4.50;
        $menu->url="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLxphdX__33qSE6vdN7XIE15g9GfouT5QI_g&usqp=CAU";
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
