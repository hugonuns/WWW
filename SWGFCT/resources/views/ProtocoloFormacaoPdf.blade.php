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
        <h1>PROTOCOLO DE FORMAÇÃO EM CONTEXTO DE TRABALHO</h1>

        <p>O Agrupamento de Escolas Alcaides de  Faria, pessoa coletiva número 600 085 449, representado pelo Diretor,
            <b>Manuel David Macedo Lourenço</b>, como Primeiro Outorgante, e a
            Empresa <b>{{$dado->fct->first()->empresa->nome}}</b>, com sede <b>{{$dado->fct->first()->empresa->morada}}</b>,
            <b>{{$dado->fct->first()->empresa->CP}}</b>,  <b>{{$dado->fct->first()->empresa->cidade}}</b>, pessoa coletiva número,
            <b>{{$dado->fct->first()->empresa->NIF}}</b>, representada por <b>{{$dado->fct->first()->empresa->proprietario}}</b>, como Segundo Outorgante, comprometem-se, pelo presente
            Protocolo de Formação em Contexto de Trabalho, adiante designada FCT, a cooperar no desenvolvimento,
            organização e execução, no âmbito da legislação em vigor para os cursos profissionais,
            nomeadamente o Decreto-Lei n.º 55/2018, de 6 de julho, em conjugação com a Portaria n.º 235/18,
            de 23 de agosto, no qual intervém, na qualidade de Terceiro Outorgante, o aluno, <b>{{$dado->nome}}</b>,
            legalmente representado pelo Encarregado de Educação, <b>{{$dado->ee->nome}}</b>.
            Este protocolo é ajustado e reduzido a escrito, nos termos e cláusulas seguintes: </p>
        <h1>CLÁUSULA PRIMEIRA <br> (Objeto do protocolo)</h1>

        <ol class="olNum">
            <li>Assegurar em conjunto as condições logísticas necessárias à realização e ao acompanhamento da Formação em Contexto de Trabalho.</li>
            <li>O presente Protocolo não gera nem titula relações de trabalho subordinado e caduca com a conclusão da FCT para a qual foi celebrado.</li>
        </ol>

        <h1>CLÁUSULA SEGUNDA<br>(Responsabilidades dos Outorgantes)</h1>

        <ol class="olNum">
            <li>O primeiro outorgante obriga-se a:</li>
            <ol class="olPar">
                <li>Assegurar a realização da FCT, nos termos definidos na lei;</li>
                <li>Assegurar a elaboração dos protocolos com as entidades de acolhimento;</li>
                <li>Proceder à distribuição dos alunos pelas entidades de acolhimento, em sede de conselho de turma,
                    de forma a garantir a melhor adequação entre a missão de cada entidade e o perfil global de cada aluno;</li>
                <li>Assegurar a elaboração e a assinatura dos protocolos de formação com os
                    alunos e seus encarregados de educação, se aqueles forem menores;</li>
                <li>Assegurar a elaboração do plano de trabalho do aluno;</li>
                <div style="page-break-before:always;"> </div>
                <li>Assegurar o acompanhamento da execução do plano de trabalho do aluno, bem como
                    a avaliação de desempenho dos alunos, em colaboração com a entidade de acolhimento;</li>
                <li>Assegurar, em conjunto com a entidade de acolhimento e o aluno,
                    as condições logísticas necessárias à realização e ao acompanhamento da FCT.</li>
                <li>Nomear o professor, «OrientadorNome», como professor orientador da FCT;</li>
                <li>Garantir que o aluno se encontra coberto por um seguro.</li>
            </ol>

            <li>O segundo outorgante obriga-se a: </li>
            <ol class="olPar">
                <li>Designar como tutor da FCT da entidade, responsável pelo acompanhamento da mesma, «EmpresaMonitor»;</li>
                <li>Proporcionar ao formando formação em contexto real de trabalho,
                    adequada à formação do curso frequentado em contexto escolar;</li>
                <li>Proporcionar e criar condições para a concretização do plano de trabalho individual de atividades de formação;</li>
                <li>Colaborar na elaboração do plano de trabalho do aluno;</li>
                <li>Apoiar o formando e o professor orientador da FCT, durante o decurso da mesma;</li>
                <li>Elaborar e colocar à disposição do primeiro outorgante os mapas de assiduidade do formando,
                    facultar o respetivo acompanhamento e colaborar no processo de avaliação;</li>
                <li>Prestar ao primeiro outorgante, as informações consideradas necessárias;</li>
                <li>Comunicar ao primeiro outorgante todas as situações que, pela sua
                    natureza e gravidade, possam ser consideradas anómalas.</li>
            </ol>

            <li>O terceiro outorgante obriga-se a:</li>
            <ol class="olPar">
                <li>Colaborar na elaboração do seu plano de trabalho;</li>
                <li>Cumprir, no que lhe compete, o seu plano de trabalho;</li>
                <li>Ser assíduo e pontual; </li>

                <li>Justificar as faltas perante o diretor de turma, nos termos
                    da lei, garantida a devida informação ao tutor e ao professor orientador; </li>
                <li>Participar nas reuniões de acompanhamento e avaliação da FCT;</li>
                <li>Respeitar a organização do trabalho na entidade de acolhimento;</li>
                <li>Não utilizar, sem prévia autorização do segundo outorgante, a informação a que tiver acesso durante a FCT; </li>
                <div style="page-break-before:always;"> </div>
                <li>Utilizar com cuidado e zelar pela boa conservação dos equipamentos e demais bens que
                    lhe sejam confiados para efeitos de FCT, fornecidos pelo segundo outorgante e seus representantes;</li>
                <li>Suportar os custos de substituição ou reparação dos equipamentos e materiais que utilizar na FCT fornecidos
                    pelo segundo outorgante e seus representantes,
                    sempre que os danos produzidos resultem de comportamento doloso ou gravemente negligente;</li>
                <li>Tratar com urbanidade o segundo outorgante e seus representantes;</li>
                <li>Guardar lealdade ao segundo outorgante, nomeadamente não transmitindo para o exterior informações
                    sobre equipamentos, processos e técnicas de que tome conhecimento no decorrer da FCT;</li>
                <li>Elaborar o relatório final da FCT.</li>
            </ol>
        </ol>

        <h1>CLÁUSULA TERCEIRA</h1>
        <h1>(Direitos do(a) Formando(a))</h1>

        <ol class="olNum">
            <li>Durante a frequência do Curso, o Terceiro Outorgante tem direito a:</li>
            <ol class="olPar">
                <li>Participar na FCT de harmonia com os programas, metodologias e processos definidos, bem como beneficiar dos
                    meios necessários à aprendizagem do conjunto de conhecimentos e técnicas inerentes ao referido curso;</li>
                <li>Beneficiar de um seguro contra acidentes pessoais;</li>
                <li>Beneficiar dos apoios previstos na legislação em vigor, nomeadamente subsídio de alimentação e transporte, caso
                    o curso esteja inserido num projeto financiado;</li>
                <li>O direito aos apoios referidos na alínea c) da presente cláusula encontra-se dependente da assiduidade e aproveitamento
                    revelados durante a FCT e demais condições previstas na lei em vigor.</li>
            </ol>
        </ol>

        <h1>CLÁUSULA QUARTA</h1>
        <h1>(Sanções ao Formando)</h1>

        <p>A violação grave ou reiterada dos deveres pelo formando confere ao primeiro e segundo outorgantes
            o direito de rescindir o presente protocolo de FCT, cessando imediatamente todos os direitos dele emergentes,
            sem prejuízo da eventual responsabilidade civil ou criminal a que houver lugar.</p>
            <div style="page-break-before:always;"> </div>
        <h1>CLÁUSULA QUINTA</h1>
        <h1>(Local e Horário)</h1>

        <p>A FCT tem lugar nas instalações do segundo outorgante e em outros espaços
            em que a atividade da entidade de acolhimento se desenvolve e que são por esta supervisionados.</p>
        <p>A FCT deve ser ajustada ao horário de funcionamento da entidade de acolhimento, não devendo em caso algum,
            ter a duração semanal mais de trinta e cinco horas, nem a duração diária mais de sete horas.</p>

        <h1>CLÁUSULA SEXTA</h1>
        <h1>(Regime de Justificação de Faltas do Formando)</h1>

        <ol class="olNum">
            <li>As faltas são justificadas, mediante apresentação de comprovativo por:</li>
            <ol class="olPar">
                <li>Doença comprovada ou acidente;</li>
                <li>Falecimento de parentes e afins, nos termos estabelecidos por lei;</li>
                <li>Impedimento comprovado ou dever imposto por lei que não admita adiamento ou substituição;</li>
                <li>As prévias ou posteriormente autorizadas pelo primeiro e segundo outorgantes.</li>
            </ol>
            <li>São consideradas injustificadas todas as faltas não previstas no número anterior.</li>
            <li>As faltas injustificadas determinam sempre uma redução proporcional nos subsídios do formando.</li>
            <li>A assiduidade do aluno na FCT não pode ser inferior a 95% da carga horária prevista. </li>
            <li>Quando a falta de assiduidade do aluno for devidamente justificada, nos termos da legislação aplicável,
                a escola deve assegurar o prolongamento da FCT a fim de permitir o cumprimento do número de horas estabelecido. </li>
            <li>Garantida a devida informação ao tutor e ao professor orientador, a justificação de
                faltas deve ser apresentada ao diretor de turma nos prazos estabelecidos na lei.</li>
        </ol>


        <h1>CLÁUSULA SÉTIMA</h1>
        <h1>(Cessação do Protocolo)</h1>

        <p>O protocolo pode cessar por mútuo acordo, por rescisão de uma das partes ou por caducidade.</p>
            <div style="page-break-before:always;"> </div>
        <p>O protocolo de FCT caduca quando se verificar a impossibilidade superveniente, absoluta e definitiva
                , do formando frequentar a FCT ou de o segundo outorgante lha proporcionar.</p>
        <h1>CLÁUSULA OITAVA</h1>
        <h1>(Duração do Protocolo)</h1>

        <p>O presente protocolo tem início em <b>{{$dado->fct->first()->dataInicialFCT}}</b> e termina após a realização de <b>{{$dado->dirigeEdicao->first()->curso->fctHoras12}}</b> horas
            de FCT, sendo processado em triplicado e assinado por todos os outorgantes,
            destinando-se um exemplar a cada uma das partes, valendo qualquer dos exemplares como original.</p>
        <p>Barcelos, <b>{{$dado->fct->first()->dataInicialFCT}}</b></p>
        <p>O Primeiro Outorgante: </p>
        <p style="text-align: center">__________________________________________________</p>
        <p style="text-align: center">(Manuel David Macedo Lourenço)</p>
        <p>O Segundo Outorgante:</p>
        <p style="text-align: center">__________________________________________________</p>
        <p style="text-align: center">(<b>{{$dado->fct->first()->empresa->proprietario}}</b>) </p>
        <p>O Terceiro Outorgante: </p>
        <p style="text-align: center">__________________________________________________</p>
        <p style="text-align: center">(<b>{{$dado->nome}}</b>) </p>
        <p>O Encarregado de Educação do Terceiro Outorgante:</p>
        <p style="text-align: center">__________________________________________________</p>
        <p style="text-align: center">(<b>{{$dado->ee->nome}}</b>)</p>
        @endforeach
    </main>
</body>
</html>
