<?php

use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quiz = [
            ['curso_id' => 1, 'cont_id' => 1, 'titulo' => "HTML", 'pergunta' => "<p>HTML é uma linguagem de:</p>", 'resposta' => "<div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='a' value='a'><label class='form-check-label' for='a'><span class='opcao'>A -</span> Criação</label></div><div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='b' value='b'><label class='form-check-label' for='b'><span class='opcao'>B -</span> Programação</label></div><div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='c' value='c'><label class='form-check-label' for='c'><span class='opcao'>C -</span> Exclusão</label></div> <div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='d' value='d' certo><label class='form-check-label' for='d'><span class='opcao'>D -</span> Marcação</label></div><div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='e' value='e'><label class='form-check-label' for='e'><span class='opcao'>E -</span> Informação</label></div>"],
            ['curso_id' => 1, 'cont_id' => 2, 'titulo' => "HTML", 'pergunta' => "<p>O que são TAGS?</p>", 'resposta' => "<div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='a' value='a'><label class='form-check-label' for='a'><span class='opcao'>A -</span> Estruturas utilizadas para transformar afirmações em perguntas</label></div><div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='b' value='b' certo><label class='form-check-label' for='b'><span class='opcao'>B -</span> Códigos que definem toda a estrutura da página.</label></div><div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='c' value='c'><label class='form-check-label' for='c'><span class='opcao'>C -</span> Classes dentro do HTML.</label></div> <div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='d' value='d'><label class='form-check-label' for='d'><span class='opcao'>D -</span> Componente da web.</label></div><div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='e' value='e'><label class='form-check-label' for='e'><span class='opcao'>E -</span> Elemento oculto do HTML.</label></div>"],
            ['curso_id' => 1, 'cont_id' => 3, 'titulo' => "HTML", 'pergunta' => "<p>Para que servem os Atributos?</p>", 'resposta' => "<div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='a' value='a' certo><label class='form-check-label' for='a'><span class='opcao'>A -</span> Personalizar as Tags.</label></div><div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='b' value='b'><label class='form-check-label' for='b'><span class='opcao'>B -</span> Marcação complementar do HTML.</label></div><div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='c' value='c'><label class='form-check-label' for='c'><span class='opcao'>C -</span> Usada para inserir um novo texto.</label></div> <div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='d' value='d'><label class='form-check-label' for='d'><span class='opcao'>D -</span> Fazer um  comentário no HTML.</label></div><div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='e' value='e'><label class='form-check-label' for='e'><span class='opcao'>E -</span> Finalizar o documento.</label></div>"],
            ['curso_id' => 1, 'cont_id' => 4, 'titulo' => "HTML", 'pergunta' => "<p>As Tags que compõem o corpo de um documento HTML são:</p>", 'resposta' => "<div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='a' value='a'><label class='form-check-label' for='a'><span class='opcao'>A -</span> html, body, doctype, script, footer</label></div><div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='b' value='b'><label class='form-check-label' for='b'><span class='opcao'>B -</span> html, meta, body, script, head</label></div><div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='c' value='c'><label class='form-check-label' for='c'><span class='opcao'>C -</span> body, meta, html, head, footer</label></div> <div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='d' value='d' certo><label class='form-check-label' for='d'><span class='opcao'>D -</span> doctype, html, head, title, body</label></div><div class='form-check'><input class='form-check-input' type='radio' name='quiz' id='e' value='e'><label class='form-check-label' for='e'><span class='opcao'>E -</span> html, aside, nav, div, head, footer</label></div>"],
        ];
        DB::table('quizzes')->insert($quiz);
    }
}
