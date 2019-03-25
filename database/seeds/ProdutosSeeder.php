<?php

use Illuminate\Database\Seeder;
use App\Produtos;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produtos = Produtos::insert([
            'nome' => 'Programação',
            'descricao' => 'Aprenda html, jsp, tomcat, postgresql e criar sistemas completos desde o login até os cadastros, consultas e relatórios.',
            'valor' => 29.00,
            'categoria_id' => 2,
        ]);
        $produtos = Produtos::insert([
            'nome' => 'Marketing Digital',
            'descricao' => 'SEO, Google Ads, Facebook e Instagram Ads, LinkedIn Ads, Email Marketing e Análise. O máximo sobre Marketing Digital!',
            'valor' => 45.00,
            'categoria_id' => 2,
        ]);
        $produtos = Produtos::insert([
            'nome' => 'Data Science',
            'descricao' => 'Curso de Data Science',
            'valor' => 45.00,
            'categoria_id' => 2,
        ]);
        $produtos = Produtos::insert([
            'nome' => 'Redes de Computadores',
            'descricao' => 'Redes de Computadores, Protocolos TCP/IP Aplicados à Comunicações Via Satélite, Multicast e Segurança Telecom',
            'valor' => 60.00,
            'categoria_id' => 2,
        ]);
        $produtos = Produtos::insert([
            'nome' => 'Mentoria de Carreira',
            'descricao' => 'Um programa individual, rápido e personalizado para quem busca acelerar a carreira, corrigir desvios e sabotadores comportamentais e conquistar excelentes',
            'valor' => 45.00,
            'categoria_id' => 2,
        ]);
        $produtos = Produtos::insert([
            'nome' => 'Desenvolvimento mobile',
            'descricao' => 'Curso completo de desenvolvimento Android; Crie na prática apps como: Instagram, Flappy Bird, WhatsApp e muito mais.',
            'valor' => 39.00,
            'categoria_id' => 2,
        ]);
    
    }
}
