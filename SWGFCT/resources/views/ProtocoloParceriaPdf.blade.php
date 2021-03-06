<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header{
            position: fixed;
            top: -1cm;
            left: 2cm;
            right: 2cm;
            height: 1cm;


            text-align: center;
            line-height: 0cm;
        }
        footer{
            position: fixed;
            bottom: 1.5cm;
            left: 2cm;
            right: 1cm;
            height: 1cm;

            text-align: center;
            line-height: 1cm;
        }
        body {
            font-family: Times New Roman;
            margin-top: 2cm;
            margin-left: 1.2cm;
            margin-right: 0.5cm;
            margin-bottom: 2cm  ;
        }

        h1{
            text-align: center;
            font-size: 14.5px;
        }
        p{
            text-align: justify;
            font-size: 14.5px;
            line-height: 28px;
        }

        .olNum {
            text-align: justify;
            font-size: 14.5px;
            line-height: 28px;
        }

        .olPar {
            counter-reset: list;
        }
        .olPar > li {
            list-style: none;
        }
        .olPar > li:before {
            content: counter(list, lower-alpha);
            counter-increment: list;
        }
        section {
            height: 200px;
            width: 200px;
            border: 1px solid #2d2d2d;
            margin-bottom: 12px;
        }
        .column-center {
            justify-content: center;
            gap: 4px;
            align-content: center;
            grid-auto-flow: column;
        }
        table{
            text-align: center;
            border-spacing: 50px 10px;
        }
        .tableHeader
        {
            text-align: center;
            border-spacing: 50px 10px;
            border-bottom-color: black;
            border-bottom-style: solid;
        }
        .pB{
            font-size: 12px;
            margin-left: 0.8cm;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <table class="tableHeader">
            <tr>
                <td>
                    <img style="width:15.5% ;height:auto" src="images/logoRepublicaPt.png" >
                </td>
                <td>
                    <img style="width:12% ;height:auto" src="images/logoAEAF.jpg" >
                </td>
                <td>
                    <p class="pB">Agrupamento de Escolas<br>
                        Alcaides de Faria | 150137</p>
                </td>
            </tr>
        </table>
    </header>
    <footer>
        <img style="width:70% ;height:auto" src="images/logoFooter.png"" >
    </footer>
    <main>
        @foreach ($dados as $dado)
        <h1>PROTOCOLO DE PARCERIA</h1>
        <br>
        <h1>ORGANIZA????O DA FORMA????O EM CONTEXTO DE TRABALHO</h1>
        <p>Entre:</p>
        <p>Primeiro Outorgante: Agrupamento de Escolas de Alcaides de Faria,
            representada pelo Diretor, Dr. Manuel David Macedo Louren??o;</p>
        <p>Segundo Outorgante: <b>{{$dado->fct->first()->empresa->nome}}</b>, com sede em <b>{{$dado->fct->first()->empresa->morada}}</b>,
            <b>{{$dado->fct->first()->empresa->CP}}</b>, <b>{{$dado->fct->first()->empresa->cidade}}</b>, pessoa coletiva n??mero
            <b>{{$dado->fct->first()->empresa->NIF}}</b>, representada pelo
            Sr.(a) <b>{{$dado->fct->first()->empresa->proprietario}}</b>, ?? celebrado o presente protocolo, que se subordinar??
            ??s cl??usulas seguintes:</p>
        <h1>Cl??usula Primeira</h1>
        <h1>Objeto</h1>
        <p>O presente protocolo tem por objeto estabelecer, entre as duas entidades,
            uma parceria na organiza????o e implementa????o das atividades
            a desenvolver pelos formandos durante a Forma????o em Contexto
            de Trabalho, adiante designada FCT, curricularmente integrante
            do Curso Profissional T??cnico de ??Curso?? Esta forma????o pr??tica, estruturada
            num plano individual de forma????o ou roteiro de atividades a desenvolver em contexto
            de trabalho, visa a aquisi????o e o desenvolvimento de compet??ncias t??cnicas,
            relacionais, organizacionais e de gest??o de carreira relevantes para a
            qualifica????o profissional a adquirir,
            para a inser????o no mundo de trabalho e para a forma????o ao longo da vida.</p>
        <p>Assim, entre ambos os outorgantes ser?? promovido o desenvolvimento integrado da FCT de acordo com a
            tipologia prevista no plano curricular do curso
            , desenvolvendo todos
            os esfor??os de forma a fornecer aos formandos os saberes e instrumentos
            necess??rios ao desempenho profissional.
            As a????es que vierem a ser lan??adas na sequ??ncia deste protocolo ser??o implementadas numa ??tica de
            confian??a m??tua e, sempre que poss??vel, num esp??rito de reciprocidade.</p>
        <div style="page-break-before:always;"> </div>
        <p>As a????es que vierem a ser lan??adas na sequ??ncia deste protocolo ser??o
            implementadas numa ??tica de confian??a
            m??tua e, sempre que poss??vel, num esp??rito de reciprocidade.</p>
        <br>
        <h1>Cl??usula Segunda</h1>
        <h1>Deveres do Primeiro Outorgante</h1>
        <p>O Primeiro Outorgante compromete-se a disponibilizar, atempadamente, ao
            Segundo Outorgante, todas as informa????es necess??rias ?? boa organiza????o
            do processo, nomeadamente a dura????o da FCT, o perfil profissional dos formandos
            a integrar, um resumo dos conte??dos t??cnicos adquiridos pelos formandos durante
            a frequ??ncia do curso.</p>
        <p>O Primeiro Outorgante compromete-se a elaborar e a disponibilizar o protocolo
            da FCT e o dossier individualizado de est??gio, que conter??, nomeadamente
            , a planifica????o e a calendariza????o das tarefas de est??gio, o registo
            de assiduidade dos formandos, o perfil t??cnico e as compet??ncias a
            desenvolver pelos mesmos, de acordo com o previamente acordado entre ambos os outorgantes.</p>
        <p>?? ainda responsabilidade do Primeiro Outorgante garantir que os formandos
            se encontrem cobertos por um seguro que garanta a cobertura dos riscos
            das desloca????es a que estiverem obrigados, bem como das atividades a desenvolver durante a FCT.</p>
        <br>
        <h1>Cl??usula Terceira</h1>
        <h1>Deveres do Segundo Outorgante</h1>
        <p>Por considerar que a oferta formativa do Primeiro Outorgante ?? pertinente na sua ??rea
            de atividade, o Segundo Outorgante compromete-se, caso a
            org??nica da sua entidade na altura o permita, a acolher ??NumFormandos?? formando (s),</p>
        <div style="page-break-before:always;"> </div>
        <p>disponibilizando os meios humanos, t??cnicos e de ambiente de trabalho (n??o remunerado)
            necess??rios ?? organiza????o, acompanhamento e avalia????o da forma????o em contexto de trabalho.</p>

        <h1>Cl??usula Quarta</h1>
        <h1>Momento e Formaliza????o</h1>
        <p>A formaliza????o desta colabora????o ?? iniciada, em cada caso, atrav??s da comunica????o
            , pelo Segundo Outorgante, dos termos em que a mesma se vai realizar, ap??s solicita????o
            pr??via do Primeiro Outorgante. A formaliza????o de cada caso ser?? realizada pela celebra????o
            de um protocolo de est??gio realizado entre ambos os outorgantes e ainda o formando e seu
            encarregado de educa????o, caso menor.</p>
        <p>O protocolo de est??gio referido n??o gera nem titula uma rela????o de trabalho subordinado
            e caduca com a conclus??o da forma????o para que foi celebrado.</p>
        <h1>Cl??usula Quinta</h1>
        <h1>Acompanhamento</h1>
        <p>No ??mbito do presente protocolo, as partes acordam em reunir periodicamente para an??lise conjunta
            da implementa????o e
            resultados do est??gio, bem como medidas para supera????o de dificuldades dos formandos estagi??rios;</p>
        <p>Nomeiam, para o efeito, o Primeiro Outorgante
            um professor acompanhante e orientador de FCT e o Segundo Outorgante um tutor da FCT.</p>
        <h1>Cl??usula Sexta</h1>
        <h1>Vig??ncia</h1>
        <p>Este protocolo entra em vigor na data da sua assinatura e ser?? prorrogado
            por sucessivos per??odos de um, dois ou tr??s anos, conforme o perfil do curso
            , desde que n??o seja denunciado por qualquer das
            partes, e poder?? ser revisto por solicita????o de qualquer das mesmas.</p>
        <p>Barcelos, Mar??o de 2019</p>

            <table>
                <tr>
                    <td>O Primeiro Outorgante</td>
                    <td>O Segundo Outorgante</td>
                </tr>
                <tr>
                    <td>________________________</td>
                    <td>________________________</td>

                </tr>
                <tr>
                    <td><b>(Dr. Manuel David Macedo Louren??o)</b></td>
                    <td><b>(<b>{{$dado->fct->first()->empresa->proprietario}}</b>)</b></td>
                </tr>
            </table>
        @endforeach
    </main>
</body>
</html>
