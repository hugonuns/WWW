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
        <h1>ORGANIZAÇÃO DA FORMAÇÃO EM CONTEXTO DE TRABALHO</h1>
        <p>Entre:</p>
        <p>Primeiro Outorgante: Agrupamento de Escolas de Alcaides de Faria,
            representada pelo Diretor, Dr. Manuel David Macedo Lourenço;</p>
        <p>Segundo Outorgante: <b>{{$dado->fct->first()->empresa->nome}}</b>, com sede em <b>{{$dado->fct->first()->empresa->morada}}</b>,
            <b>{{$dado->fct->first()->empresa->CP}}</b>, <b>{{$dado->fct->first()->empresa->cidade}}</b>, pessoa coletiva número
            <b>{{$dado->fct->first()->empresa->NIF}}</b>, representada pelo
            Sr.(a) <b>{{$dado->fct->first()->empresa->proprietario}}</b>, é celebrado o presente protocolo, que se subordinará
            às cláusulas seguintes:</p>
        <h1>Cláusula Primeira</h1>
        <h1>Objeto</h1>
        <p>O presente protocolo tem por objeto estabelecer, entre as duas entidades,
            uma parceria na organização e implementação das atividades
            a desenvolver pelos formandos durante a Formação em Contexto
            de Trabalho, adiante designada FCT, curricularmente integrante
            do Curso Profissional Técnico de «Curso» Esta formação prática, estruturada
            num plano individual de formação ou roteiro de atividades a desenvolver em contexto
            de trabalho, visa a aquisição e o desenvolvimento de competências técnicas,
            relacionais, organizacionais e de gestão de carreira relevantes para a
            qualificação profissional a adquirir,
            para a inserção no mundo de trabalho e para a formação ao longo da vida.</p>
        <p>Assim, entre ambos os outorgantes será promovido o desenvolvimento integrado da FCT de acordo com a
            tipologia prevista no plano curricular do curso
            , desenvolvendo todos
            os esforços de forma a fornecer aos formandos os saberes e instrumentos
            necessários ao desempenho profissional.
            As ações que vierem a ser lançadas na sequência deste protocolo serão implementadas numa ótica de
            confiança mútua e, sempre que possível, num espírito de reciprocidade.</p>
        <div style="page-break-before:always;"> </div>
        <p>As ações que vierem a ser lançadas na sequência deste protocolo serão
            implementadas numa ótica de confiança
            mútua e, sempre que possível, num espírito de reciprocidade.</p>
        <br>
        <h1>Cláusula Segunda</h1>
        <h1>Deveres do Primeiro Outorgante</h1>
        <p>O Primeiro Outorgante compromete-se a disponibilizar, atempadamente, ao
            Segundo Outorgante, todas as informações necessárias à boa organização
            do processo, nomeadamente a duração da FCT, o perfil profissional dos formandos
            a integrar, um resumo dos conteúdos técnicos adquiridos pelos formandos durante
            a frequência do curso.</p>
        <p>O Primeiro Outorgante compromete-se a elaborar e a disponibilizar o protocolo
            da FCT e o dossier individualizado de estágio, que conterá, nomeadamente
            , a planificação e a calendarização das tarefas de estágio, o registo
            de assiduidade dos formandos, o perfil técnico e as competências a
            desenvolver pelos mesmos, de acordo com o previamente acordado entre ambos os outorgantes.</p>
        <p>É ainda responsabilidade do Primeiro Outorgante garantir que os formandos
            se encontrem cobertos por um seguro que garanta a cobertura dos riscos
            das deslocações a que estiverem obrigados, bem como das atividades a desenvolver durante a FCT.</p>
        <br>
        <h1>Cláusula Terceira</h1>
        <h1>Deveres do Segundo Outorgante</h1>
        <p>Por considerar que a oferta formativa do Primeiro Outorgante é pertinente na sua área
            de atividade, o Segundo Outorgante compromete-se, caso a
            orgânica da sua entidade na altura o permita, a acolher «NumFormandos» formando (s),</p>
        <div style="page-break-before:always;"> </div>
        <p>disponibilizando os meios humanos, técnicos e de ambiente de trabalho (não remunerado)
            necessários à organização, acompanhamento e avaliação da formação em contexto de trabalho.</p>

        <h1>Cláusula Quarta</h1>
        <h1>Momento e Formalização</h1>
        <p>A formalização desta colaboração é iniciada, em cada caso, através da comunicação
            , pelo Segundo Outorgante, dos termos em que a mesma se vai realizar, após solicitação
            prévia do Primeiro Outorgante. A formalização de cada caso será realizada pela celebração
            de um protocolo de estágio realizado entre ambos os outorgantes e ainda o formando e seu
            encarregado de educação, caso menor.</p>
        <p>O protocolo de estágio referido não gera nem titula uma relação de trabalho subordinado
            e caduca com a conclusão da formação para que foi celebrado.</p>
        <h1>Cláusula Quinta</h1>
        <h1>Acompanhamento</h1>
        <p>No âmbito do presente protocolo, as partes acordam em reunir periodicamente para análise conjunta
            da implementação e
            resultados do estágio, bem como medidas para superação de dificuldades dos formandos estagiários;</p>
        <p>Nomeiam, para o efeito, o Primeiro Outorgante
            um professor acompanhante e orientador de FCT e o Segundo Outorgante um tutor da FCT.</p>
        <h1>Cláusula Sexta</h1>
        <h1>Vigência</h1>
        <p>Este protocolo entra em vigor na data da sua assinatura e será prorrogado
            por sucessivos períodos de um, dois ou três anos, conforme o perfil do curso
            , desde que não seja denunciado por qualquer das
            partes, e poderá ser revisto por solicitação de qualquer das mesmas.</p>
        <p>Barcelos, Março de 2019</p>

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
                    <td><b>(Dr. Manuel David Macedo Lourenço)</b></td>
                    <td><b>(<b>{{$dado->fct->first()->empresa->proprietario}}</b>)</b></td>
                </tr>
            </table>
        @endforeach
    </main>
</body>
</html>
