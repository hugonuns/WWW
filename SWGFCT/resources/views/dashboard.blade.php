<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-5">
                            <div class="text-lg mb-6">
                                @auth
                                Bem vindo <u><b>{{ Auth::user()->name }}</b></u>!
                                @endauth
                            </div>
                            <img src="/images/estudante.jpg" >
                        </div>

                        <div class="p-5 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center mb-4">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold">
                                    Sobre nós
                                </div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    O nosso foco sempre foi minimizar o trabalho dos alunos de cursos profissionais
                                    e com isso também ajudar a nossa escola a cada vez mais estar dentro deste mundo
                                    que é a internet, por isso desenvolvemos o nosso sistema WEB que permite gerir
                                    os dados e gerar a documentação de FCT dos alunos de cursos profissionais nas
                                    empresas onde realizão os seus estágios. </br></br>Com isto deixamos a nossa
                                    marca na escola com a esperança de influenciar mais alunos a desenvolverem e
                                    cooperarem com a escola no desenvolvimento de projetos ou atividades!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
