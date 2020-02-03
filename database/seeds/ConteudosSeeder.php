<?php

use Illuminate\Database\Seeder;

class ConteudosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conteudos = [
            ['curso_id' => 1, 'titulo' => "HTML", 'subtitulo' => "O que é HTML?", 'conteudo' => "<p>Criada pelo britânico Tim Berners-Lee, o acrônimo HTML significa <i>HiperText Markup Language</i>, traduzindo ao português: Linguagem de Marcação de Hipertexto.</p><p>O HTML é o componente básico da web, ele permite inserir o conteúdo e estabelecer a estrutura básica de um website. Portanto, ele serve para dar significado e organizar as informações de uma página na web. Sem isso, o navegador não saberia exibir textos como elementos ou carregar imagens e outros conteúdos.</p>"],
            ['curso_id' => 1, 'titulo' => "HTML", 'subtitulo' => "Tags", 'conteudo' => "<p>As tags são códigos que definem toda a estrutura da página, tais como o seu tamanho, a fonte da letra, as cores, as quebras de linha e etc.</p> <p>A maioria dos elementos do documento HTML são compostos por uma estrutura de abertura e uma de fechamento, como <b><tag></b> e <b></tag></b>. Há também tags de estrutura única, por exemplo <b><tag/></b> que realiza uma quebra de linha.</p><p>Atualmente existem mais de 140 tags, mas algumas delas quase não são utilizadas.</p>"],
            ['curso_id' => 1, 'titulo' => "HTML", 'subtitulo' => "Atributos", 'conteudo' => "<p>Os atributos são usados para personalizar as tags, modificando sua estrutura ou funcionalidade.</p><p>Sua estrutura básica é <b><tag atributo='valor do atributo'></tag></b> ou <b><tag atributo='valor do atributo' /></b></p><p>A maioria das tags tem seus próprios atributos, porém os mais comuns são as Classes e os IDs que servem para identificar as tags.</p><p>O valor dado para o atributo ID é unico e não deve ser usado em nenhuma outra tag, já o valor da Classe pode se repetir e é bastante utilizada para compartilhar características entre as tags.</p>"],
            ['curso_id' => 1, 'titulo' => "HTML", 'subtitulo' => "Estrutura básica do HTML", 'conteudo' => "<p>Um documento HTML recebe algumas tags que formam a sua estrutura básica.</p><p>No HTML5, o documento padrão recebe a seguinte estrutura:</p><br><br><div class='bg-dark'><pre><span class='text-primary'><!DOCTYPE</span> <span class='text-info'>html</span><span class='text-primary'>><br><html><br><head><br>    <span class='text-info'><meta charset='UTF-8'><br>    <title>Document</title><br></span>    <span class='text-primary'></head><br><body><br></span>    <span class='text-success'><!-- Conteúdo do Site --><br></span><span class='text-primary'></body><br></html></span></pre></div>"]
        ];
        DB::table('conteudos')->insert($conteudos);
    }
}
