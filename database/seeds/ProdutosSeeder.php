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
            'categoria_id' => 1,
            'url_imagem' => 'img/cursoProgramacao.jpg',
            'descricao_longa' =>'No Curso de Desenvolvimento Web Full Stack você aprende a criar sites e sistemas web. Nossos professores especialistas ensinam você do zero, por isso, não é necessário ter conhecimento prévio de linguagem de programação.<br/>

            Ao longo do curso, você conhecerá as tecnologias mais atuais em uso no mercado. Aprenderá Laravel, HTML, PHP e tudo o que for necessário para dominar o Front End e o Back End de um site ou sistema web.
            
            Em 210 horas de curso (em média 5 meses de aulas), você será um desenvolvedor web full stack, profissional muito valorizado por ser versátil e ter a visão de todo o projeto de um site.',
            'link_produto' => 'curso_programacao',
        ]);
        $produtos = Produtos::insert([
            'nome' => 'Marketing Digital',
            'descricao' => 'SEO, Google Ads, Facebook e Instagram Ads, LinkedIn Ads, Email Marketing e Análise. O máximo sobre Marketing Digital!',
            'valor' => 45.00,
            'categoria_id' => 2,
            'url_imagem' => 'img/marketing_digital.jpg',
            'descricao_longa' => 'Curso intensivo de introdução ao Marketing Digital em até 5 meses. 

            Você aprenderá a dominar os principais aspectos e conceitos do Marketing Digital para realizar estratégias e campanhas digitais bem-sucedidas.
            
            Entenderá a importância de gerar conteúdos relevantes baseados na personalidade da marca e no perfil do público, com objetivos de negócio concretos. E aprenderá a otimizar esses conteúdos para obter bons resultados nos buscadores e um bom posicionamento de SEO.
            
            Implementará campanhas de anúncios no Google Ads e nas redes sociais com o Facebook e Instagram Ads. Definirá estratégias de retargeting e saberá como utilizá-las de modo eficiente. Aprenderá também a usar o e-mail marketing para fidelizar os seus clientes. Você compreenderá a importância da definição de métricas e sua posterior análise para atingir os seus objetivos e aprenderá a monitorar tudo com o Google Analytics.',
            'link_produto' => 'curso_marketing',
        ]);
        $produtos = Produtos::insert([
            'nome' => 'Data Science',
            'descricao' => 'Aprenda as técnicas que o mundo real exige e torne-se um profissional competitivo na área de Inteligência Artificial!',
            'valor' => 60.00,
            'categoria_id' => 1,
            'url_imagem' => 'img/datascientist.jpg',
            'descricao_longa' => 'Neste curso presencial e intensivo em até 5 meses, você aprenderá tudo que é preciso para realizar projetos de Data Science do início ao fim. Ao concluir o curso, estará apto para atuar como cientista de dados. Você desenvolverá as habilidades necessárias para atuar em projetos de coleta, análise e estruturação de dados. Dominará os conceitos teóricos e as metodologias mais utilizadas no mundo todo. Para coleta, limpeza, análise e visualização de dados, você utilizará o Python e bibliotecas SciPy, entre outras fontes. Além disso, aplicará técnicas de estatística inferencial e algoritmos de Machine Learning usando NumPy, Pandas e Scikit-learn.',
            'link_produto' => 'curso_data_science',
        ]);
        $produtos = Produtos::insert([
            'nome' => 'Redes de Computadores',
            'descricao' => 'Redes de Computadores, Protocolos TCP/IP Aplicados à Comunicações Via Satélite, Multicast e Segurança Telecom',
            'valor' => 60.00,
            'categoria_id' => 4,
            'url_imagem' => 'img/redes.jpg',
            'descricao_longa' => 'O curso prepara de modo geral profissionais para a administração e projetos de redes. Paralelamente, o aluno egresso de nosso curso está apto para todas as atividades de suporte técnico em ambientes computacionais, assim como a atuação e organização nos setores de help desk nos moldes atuais dos departamentos de informática dentro de grandes empresas.',
            'link_produto' => 'curso_redes',
        ]);
        $produtos = Produtos::insert([
            'nome' => 'Mentoria de Carreira',
            'descricao' => 'Um programa individual, rápido e personalizado para quem busca acelerar a carreira, corrigir desvios e sabotadores comportamentais e conquistar excelentes',
            'valor' => 45.00,
            'categoria_id' => 3,
            'url_imagem' => 'img/mentoria_carreira.jpg',
            'descricao_longa' => 'A evolução que faltava em sua carreira de coach já chegou. Agora, você pode conquistar um novo patamar de crescimento e realizações tornando-se um coach mentor – ou um supervisor de coaches. Amplie sua área de atuação, seus ganhos e sua clientela contribuindo para que outros coaches possam evoluir pessoal e profissionalmente, desenvolver ou aprimorar competências, elevar a eficácia da sua atuação e garantir a qualidade dos seus serviços. Você aprenderá tudo isso e muito mais com uma formação única no mercado, o programa Mentoring – Supervisão no Coaching.',
            'link_produto' => 'curso_mentoria',
        ]);
        $produtos = Produtos::insert([
            'nome' => 'Desenvolvimento mobile',
            'descricao' => 'Curso completo de desenvolvimento Android; Crie na prática apps como: Instagram, Flappy Bird, WhatsApp e muito mais.',
            'valor' => 39.00,
            'categoria_id' => 1,
            'url_imagem' => 'img/mobile.jpg',
            'descricao_longa' => 'Este curso presencial e intensivo abordará tudo o que você precisa saber para desenvolver aplicativos mobile Android do princípio ao fim. Ensinamos você do zero, com aulas focadas na prática, então não é necessário ter conhecimento prévio de linguagens de programação.

            Nossos professores especialistas são protagonistas em suas áreas de atuação e vão ensinar você a criar aplicativos mobile funcionais, incorporando os conhecimentos técnicos e as metodologias de trabalho mais atuais e usadas no mercado. Você sairá do curso com um app pronto e publicado na Play Store, como portfólio.
            
            Em 199,5 horas de curso (em média 5 meses de aulas), você estará pronto para trabalhar como desenvolvedor mobile Android, com muitas possibilidades de carreira. Conte também com nosso suporte de mentoria para escolher qual o melhor caminho para atingir seu objetivo profissional, seja trabalhando numa grande empresa, ou como freelancer ou como empreendedor na sua própria startup.',
            'link_produto' => 'curso_mobile'
        ]);
    
    }
}
