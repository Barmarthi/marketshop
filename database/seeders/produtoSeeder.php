<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert(
            [
                    [
                        'name'=> 'Fritadeira Elétrica Sem Óleo/Air Friyer',
                        'descricao'=>'A Fritadeira Elétrica sem óleo/Air Fryer BFR40BI da Britânia de 4,35 litros',
                        'valor'=> 383.04,
                        'foto'=> 'https://a-static.mlcdn.com.br/800x560/fritadeira-eletrica-sem-oleo-air-fryer-mondial-family-afn-40-bi-preto-4l-com-timer/magazineluiza/228887000/b292a00ee4877b67edf2f997046f5361.jpg',
                        'user_id'=> 1,

                    ],
                    [
                        'name'=> 'Bota Feminina Coturno Salto Grosso Moda Tratorado Cano Curto',
                        'descricao'=>'Bota Feminina',
                        'valor'=> 99.90,
                        'foto'=> 'https://m.media-amazon.com/images/I/61JMtBrRsUL._AC_SY695_.jpg',
                        'user_id'=> 1,

                    ],
                    [
                        'name'=> 'Motorola Moto G04 Dual SIM 128GB Grafite 4GB RAM',
                        'descricao'=>'O processador octa-core não te deixa na mão na hora de navegar.',
                        'valor'=> 729,
                        'foto'=> 'https://http2.mlstatic.com/D_NQ_NP_2X_984507-MLU74799061201_022024-F.webp',
                        'user_id'=> 1,

                    ],
                    [
                        'name'=> 'Jaqueta De Couro Legítimo David Beckham Motoqueiro Novo',
                        'descricao'=>'A Jaqueta de Couro David é a personificação do estilo urbano com um toque inigualável de versatilidade casual.',
                        'valor'=> 1.005,
                        'foto'=> 'https://http2.mlstatic.com/D_NQ_NP_2X_620684-MLB52500870530_112022-F.webp',
                        'user_id'=> 1,

                    ],
                    [
                        'name'=> 'Tênis Feminino Angel 3 Olympikus',
                        'descricao'=>'O Tênis Angel 3 Feminino Olympikus é ideal para quem busca conforto e maior performance.',
                        'valor'=> 125,
                        'foto'=> 'https://http2.mlstatic.com/D_NQ_NP_2X_858704-MLB75414737956_042024-F.webp',
                        'user_id'=> 1,

                    ],
                    
            ]

            );
    }
}
