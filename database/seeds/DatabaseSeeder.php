<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Oferta;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        if(User::where('email','=','admin@mail.com')->count()){
            $user = User::where('email','=','admin@mail.com')->first();
        }else{
            $user = new User;
        }

        $user->name = "Admin";
        $user->email = "admin@mail.com";
        $user->password = bcrypt("123456");
        $user->save();

        $oferta = [
            'titulo' => 'Arroz',
            'descricao' => 'Arroz Parborizado',
            'validade' => '2016-09-24',
            'valor' => 5.90,
            'valor_f' => 'R$ 5,90',
            'imagem' => 'https://www.google.com/imgres?imgurl=http%3A%2F%2Fwww.receitasnestle.com.br%2Fimages%2Fdefault-source%2Frecipes%2Farrozbasicoe176af1d83b963b0a6c0ff0000205b53.tmb-customthum.jpg&imgrefurl=https%3A%2F%2Fwww.receitasnestle.com.br%2Freceitas%2Farroz-basico&docid=TEDJgh-V1YRO0M&tbnid=awmp8vBMqE2b-M%3A&vet=10ahUKEwjQpNzI7tLiAhULFrkGHd6qAdUQMwjHASgAMAA..i&w=530&h=353&bih=610&biw=1280&q=arroz&ved=0ahUKEwjQpNzI7tLiAhULFrkGHd6qAdUQMwjHASgAMAA&iact=mrc&uact=8'
        ];

        Oferta::create($oferta);
    }
}
