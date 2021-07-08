
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        .tableHeader
        {
            text-align: center;
            border-spacing: 50px 10px;
            border-bottom-color: black;
            border-bottom-style: solid;
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
            margin-left: 1.2cm;
        }
        .pB1{
            font-size: 12px;
            margin-left: 0.8cm;
            font-weight: bold;
        }
        .pB2{
            font-size: 18px;
            margin-left: 0.8cm;
            font-weight: bold;
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
        table, td, th{
            border-collapse: collapse;
        }
        .tableNormal
        {
            border: 1px solid black;
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
                    <p class="pB1">Agrupamento de Escolas<br>
                        Alcaides de Faria | 150137</p>
                </td>
            </tr>
        </table>
    </header>
    <footer>
        <img style="width:70% ;height:auto" src="images/logoFooter.png" >
    </footer>
    <main>
        <h1>FORMAÇÃO EM CONTEXTO DE TRABALHO</h1>
        <h1>Plano de Trabalho Individual</h1>

        <h1>Curso Profissional Técnico de «Curso»  </h1>
        <h1>«AlunoNome»</h1>
        <h1>«anoLetivoInicial»/«anoLetivoFinal»</h1>

        <div style="page-break-before:always;"> </div>

            <p class="pB2"><b>Escola</b></p>
            <br>
            <p>Agrupamento de Escolas Alcaides de Faria <br>
                Sede: Av.ª João Duarte, nº 405 <br>
                4750 – 175 Barcelos <br>
                Telefone: 253 801 060 <br>
                Fax: 253 82 28 33</p>
            <br>
            <br>
            <p class="pB2">O Plano de Trabalho Individual do Formando integra os seguintes elementos:</p>

            <p>1 - Identificação dos Responsáveis; <br>
                2 - Regulamento da Formação em Contexto de Trabalho FCT); <br>
                3 - Objetivos da Formação em Contexto de Trabalho; <br>
                4 - Conteúdos e Programação; <br>
                5 - Período de Formação; <br>
                6 - Horário e Local de Realização das Atividades;<br>
                7 – Monitorização e Acompanhamento; <br>
                8 - Registo da Formação/Atividades Realizadas; <br>
                9 - Registo de assiduidade <br>
                10 - Avaliação.</p>
        <div style="page-break-before:always;"> </div>

        <p class="pB2">1 - Identificação dos Responsáveis</p>
        <p><b>Diretor do Agrupamento:</b> Dr. Manuel David Macedo Lourenço</p>

        <p style="font-size: 10px">Formando:</p>

        <table class="tableNormal" style="width: 100%">
            <colgroup >
                <col span="1" style="width: 35%">
            </colgroup>
            <tr>
                <td scope="col">O Primeiro Outorgante</td>
                <td>O Segundo Outorgante</td>
            </tr>
            <tr>
                <td scope="col">________________________</td>
                <td>________________________</td>
            </tr>
            <tr>
                <td scope="col"><b>(Dr. Manuel David Macedo Lourenço)</b></td>
                <td><b>(«EmpresaProprietario»)</b></td>
            </tr>
        </table>
    </main>
</body>
</html>
