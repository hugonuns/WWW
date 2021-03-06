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
        .tableHeader
        {
            text-align: center;
            border-spacing: 50px 10px;
            border-bottom-color: black;
            border-bottom-style: solid;
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
            content: counter(list, lower-alpha) ") ";
            counter-increment: list;
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
        <img style="width:70% ;height:auto" src="images/logoFooter.png" >
    </footer>
    <main>
        @foreach ($dados as $dado)
        <h1>PROTOCOLO DE FORMA????O EM CONTEXTO DE TRABALHO</h1>

        <p>O Agrupamento de Escolas Alcaides de  Faria, pessoa coletiva n??mero 600 085 449, representado pelo Diretor,
            <b>Manuel David Macedo Louren??o</b>, como Primeiro Outorgante, e a
            Empresa <b>{{$dado->fct->first()->empresa->nome}}</b>, com sede <b>{{$dado->fct->first()->empresa->morada}}</b>,
            <b>{{$dado->fct->first()->empresa->CP}}</b>,  <b>{{$dado->fct->first()->empresa->cidade}}</b>, pessoa coletiva n??mero,
            <b>{{$dado->fct->first()->empresa->NIF}}</b>, representada por <b>{{$dado->fct->first()->empresa->proprietario}}</b>, como Segundo Outorgante, comprometem-se, pelo presente
            Protocolo de Forma????o em Contexto de Trabalho, adiante designada FCT, a cooperar no desenvolvimento,
            organiza????o e execu????o, no ??mbito da legisla????o em vigor para os cursos profissionais,
            nomeadamente o Decreto-Lei n.?? 55/2018, de 6 de julho, em conjuga????o com a Portaria n.?? 235/18,
            de 23 de agosto, no qual interv??m, na qualidade de Terceiro Outorgante, o aluno, <b>{{$dado->nome}}</b>,
            legalmente representado pelo Encarregado de Educa????o, <b>{{$dado->ee->nome}}</b>.
            Este protocolo ?? ajustado e reduzido a escrito, nos termos e cl??usulas seguintes: </p>
        <h1>CL??USULA PRIMEIRA <br> (Objeto do protocolo)</h1>

        <ol class="olNum">
            <li>Assegurar em conjunto as condi????es log??sticas necess??rias ?? realiza????o e ao acompanhamento da Forma????o em Contexto de Trabalho.</li>
            <li>O presente Protocolo n??o gera nem titula rela????es de trabalho subordinado e caduca com a conclus??o da FCT para a qual foi celebrado.</li>
        </ol>

        <h1>CL??USULA SEGUNDA<br>(Responsabilidades dos Outorgantes)</h1>

        <ol class="olNum">
            <li>O primeiro outorgante obriga-se a:</li>
            <ol class="olPar">
                <li>Assegurar a realiza????o da FCT, nos termos definidos na lei;</li>
                <li>Assegurar a elabora????o dos protocolos com as entidades de acolhimento;</li>
                <li>Proceder ?? distribui????o dos alunos pelas entidades de acolhimento, em sede de conselho de turma,
                    de forma a garantir a melhor adequa????o entre a miss??o de cada entidade e o perfil global de cada aluno;</li>
                <li>Assegurar a elabora????o e a assinatura dos protocolos de forma????o com os
                    alunos e seus encarregados de educa????o, se aqueles forem menores;</li>
                <li>Assegurar a elabora????o do plano de trabalho do aluno;</li>
                <div style="page-break-before:always;"> </div>
                <li>Assegurar o acompanhamento da execu????o do plano de trabalho do aluno, bem como
                    a avalia????o de desempenho dos alunos, em colabora????o com a entidade de acolhimento;</li>
                <li>Assegurar, em conjunto com a entidade de acolhimento e o aluno,
                    as condi????es log??sticas necess??rias ?? realiza????o e ao acompanhamento da FCT.</li>
                <li>Nomear o professor, ??OrientadorNome??, como professor orientador da FCT;</li>
                <li>Garantir que o aluno se encontra coberto por um seguro.</li>
            </ol>

            <li>O segundo outorgante obriga-se a: </li>
            <ol class="olPar">
                <li>Designar como tutor da FCT da entidade, respons??vel pelo acompanhamento da mesma, ??EmpresaMonitor??;</li>
                <li>Proporcionar ao formando forma????o em contexto real de trabalho,
                    adequada ?? forma????o do curso frequentado em contexto escolar;</li>
                <li>Proporcionar e criar condi????es para a concretiza????o do plano de trabalho individual de atividades de forma????o;</li>
                <li>Colaborar na elabora????o do plano de trabalho do aluno;</li>
                <li>Apoiar o formando e o professor orientador da FCT, durante o decurso da mesma;</li>
                <li>Elaborar e colocar ?? disposi????o do primeiro outorgante os mapas de assiduidade do formando,
                    facultar o respetivo acompanhamento e colaborar no processo de avalia????o;</li>
                <li>Prestar ao primeiro outorgante, as informa????es consideradas necess??rias;</li>
                <li>Comunicar ao primeiro outorgante todas as situa????es que, pela sua
                    natureza e gravidade, possam ser consideradas an??malas.</li>
            </ol>

            <li>O terceiro outorgante obriga-se a:</li>
            <ol class="olPar">
                <li>Colaborar na elabora????o do seu plano de trabalho;</li>
                <li>Cumprir, no que lhe compete, o seu plano de trabalho;</li>
                <li>Ser ass??duo e pontual; </li>

                <li>Justificar as faltas perante o diretor de turma, nos termos
                    da lei, garantida a devida informa????o ao tutor e ao professor orientador; </li>
                <li>Participar nas reuni??es de acompanhamento e avalia????o da FCT;</li>
                <li>Respeitar a organiza????o do trabalho na entidade de acolhimento;</li>
                <li>N??o utilizar, sem pr??via autoriza????o do segundo outorgante, a informa????o a que tiver acesso durante a FCT; </li>
                <div style="page-break-before:always;"> </div>
                <li>Utilizar com cuidado e zelar pela boa conserva????o dos equipamentos e demais bens que
                    lhe sejam confiados para efeitos de FCT, fornecidos pelo segundo outorgante e seus representantes;</li>
                <li>Suportar os custos de substitui????o ou repara????o dos equipamentos e materiais que utilizar na FCT fornecidos
                    pelo segundo outorgante e seus representantes,
                    sempre que os danos produzidos resultem de comportamento doloso ou gravemente negligente;</li>
                <li>Tratar com urbanidade o segundo outorgante e seus representantes;</li>
                <li>Guardar lealdade ao segundo outorgante, nomeadamente n??o transmitindo para o exterior informa????es
                    sobre equipamentos, processos e t??cnicas de que tome conhecimento no decorrer da FCT;</li>
                <li>Elaborar o relat??rio final da FCT.</li>
            </ol>
        </ol>

        <h1>CL??USULA TERCEIRA</h1>
        <h1>(Direitos do(a) Formando(a))</h1>

        <ol class="olNum">
            <li>Durante a frequ??ncia do Curso, o Terceiro Outorgante tem direito a:</li>
            <ol class="olPar">
                <li>Participar na FCT de harmonia com os programas, metodologias e processos definidos, bem como beneficiar dos
                    meios necess??rios ?? aprendizagem do conjunto de conhecimentos e t??cnicas inerentes ao referido curso;</li>
                <li>Beneficiar de um seguro contra acidentes pessoais;</li>
                <li>Beneficiar dos apoios previstos na legisla????o em vigor, nomeadamente subs??dio de alimenta????o e transporte, caso
                    o curso esteja inserido num projeto financiado;</li>
                <li>O direito aos apoios referidos na al??nea c) da presente cl??usula encontra-se dependente da assiduidade e aproveitamento
                    revelados durante a FCT e demais condi????es previstas na lei em vigor.</li>
            </ol>
        </ol>

        <h1>CL??USULA QUARTA</h1>
        <h1>(San????es ao Formando)</h1>

        <p>A viola????o grave ou reiterada dos deveres pelo formando confere ao primeiro e segundo outorgantes
            o direito de rescindir o presente protocolo de FCT, cessando imediatamente todos os direitos dele emergentes,
            sem preju??zo da eventual responsabilidade civil ou criminal a que houver lugar.</p>
            <div style="page-break-before:always;"> </div>
        <h1>CL??USULA QUINTA</h1>
        <h1>(Local e Hor??rio)</h1>

        <p>A FCT tem lugar nas instala????es do segundo outorgante e em outros espa??os
            em que a atividade da entidade de acolhimento se desenvolve e que s??o por esta supervisionados.</p>
        <p>A FCT deve ser ajustada ao hor??rio de funcionamento da entidade de acolhimento, n??o devendo em caso algum,
            ter a dura????o semanal mais de trinta e cinco horas, nem a dura????o di??ria mais de sete horas.</p>

        <h1>CL??USULA SEXTA</h1>
        <h1>(Regime de Justifica????o de Faltas do Formando)</h1>

        <ol class="olNum">
            <li>As faltas s??o justificadas, mediante apresenta????o de comprovativo por:</li>
            <ol class="olPar">
                <li>Doen??a comprovada ou acidente;</li>
                <li>Falecimento de parentes e afins, nos termos estabelecidos por lei;</li>
                <li>Impedimento comprovado ou dever imposto por lei que n??o admita adiamento ou substitui????o;</li>
                <li>As pr??vias ou posteriormente autorizadas pelo primeiro e segundo outorgantes.</li>
            </ol>
            <li>S??o consideradas injustificadas todas as faltas n??o previstas no n??mero anterior.</li>
            <li>As faltas injustificadas determinam sempre uma redu????o proporcional nos subs??dios do formando.</li>
            <li>A assiduidade do aluno na FCT n??o pode ser inferior a 95% da carga hor??ria prevista. </li>
            <li>Quando a falta de assiduidade do aluno for devidamente justificada, nos termos da legisla????o aplic??vel,
                a escola deve assegurar o prolongamento da FCT a fim de permitir o cumprimento do n??mero de horas estabelecido. </li>
            <li>Garantida a devida informa????o ao tutor e ao professor orientador, a justifica????o de
                faltas deve ser apresentada ao diretor de turma nos prazos estabelecidos na lei.</li>
        </ol>


        <h1>CL??USULA S??TIMA</h1>
        <h1>(Cessa????o do Protocolo)</h1>

        <p>O protocolo pode cessar por m??tuo acordo, por rescis??o de uma das partes ou por caducidade.</p>
            <div style="page-break-before:always;"> </div>
        <p>O protocolo de FCT caduca quando se verificar a impossibilidade superveniente, absoluta e definitiva
                , do formando frequentar a FCT ou de o segundo outorgante lha proporcionar.</p>
        <h1>CL??USULA OITAVA</h1>
        <h1>(Dura????o do Protocolo)</h1>

        <p>O presente protocolo tem in??cio em <b>{{$dado->fct->first()->dataInicialFCT}}</b> e termina ap??s a realiza????o de <b>{{$dado->dirigeEdicao->first()->curso->fctHoras12}}</b> horas
            de FCT, sendo processado em triplicado e assinado por todos os outorgantes,
            destinando-se um exemplar a cada uma das partes, valendo qualquer dos exemplares como original.</p>
        <p>Barcelos, <b>{{$dado->fct->first()->dataInicialFCT}}</b></p>
        <p>O Primeiro Outorgante: </p>
        <p style="text-align: center">__________________________________________________</p>
        <p style="text-align: center">(Manuel David Macedo Louren??o)</p>
        <p>O Segundo Outorgante:</p>
        <p style="text-align: center">__________________________________________________</p>
        <p style="text-align: center">(<b>{{$dado->fct->first()->empresa->proprietario}}</b>) </p>
        <p>O Terceiro Outorgante: </p>
        <p style="text-align: center">__________________________________________________</p>
        <p style="text-align: center">(<b>{{$dado->nome}}</b>) </p>
        <p>O Encarregado de Educa????o do Terceiro Outorgante:</p>
        <p style="text-align: center">__________________________________________________</p>
        <p style="text-align: center">(<b>{{$dado->ee->nome}}</b>)</p>
        @endforeach
    </main>
</body>
</html>
