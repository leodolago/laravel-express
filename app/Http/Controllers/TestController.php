<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
 public function index($nome){

     return view('test.index',['nome'=>$nome]);
 }
    
    public function notas(){

        $notas = [
          0 => 'Anotação 1',
          2 => 'Anotação 2',
          3 => 'Anotação 3',
          4 => 'Anotação 4',
          5 => 'Anotação 5'
        ];

        return view('test.notas',compact('notas'));
    }

    public function blog(){

        $notas = array(
            "title" => "Meu Blog",
            "subtitulo" => "Abaixo voce encontra todos os meus posts",
            "content" =>
                array(
                    array(
                        "title"=>"Meu Primeiro Post",
                        "post"=>"Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.",
                    ),
                    array(
                        "title"=>"Este é Meu segundo post",
                        "post"=>"Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.",
                    ),
                    array(
                        "title"=>"Este é o Terceiro",
                        "post"=>"Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.",
                    ),
                )
        );


        return view('test.blog', compact('notas'));
    }
}
