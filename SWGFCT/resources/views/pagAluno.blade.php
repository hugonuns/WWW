<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-xl"> Documentação</p>
                    <div class="mt-6 grid grid-cols-3">
                        <div>
                            <h3>Dados FCT - 10ºano<br>(caso exista)</h3>
                            <p>Nota: <!--TODO adicionar uma nota automáticamente-->  </p>
                            <p>Empresa: <!--TODO adicionar a empresa automáticamente-->  </p>
                            <label for="concluiu">Concluiu</label>
                            <input type="checkbox" id="concluiu" name="concluiu10" >

                            <div class="mt-6">
                                <div class="flex items-center justify-self-start">
                                    <a class="underline text-base text-gray-600 hover:text-gray-900 mt-3.5" href="{{ route('PFPdf') }}">
                                        {{ __('ProtocoloFormacaoPdf') }}
                                    </a>
                                </div>
                                <div class="flex items-center justify-self-start">
                                    <a class="underline text-base text-gray-600 hover:text-gray-900 mt-3.5" href="{{ route('PPPdf') }}">
                                        {{ __('ProtocoloParceriaPdf') }}
                                    </a>
                                </div>
                                <div class="flex items-center justify-self-start">
                                    <a class="underline text-base text-gray-600 hover:text-gray-900 mt-3.5" href="{{ route('PTIPdf') }}">
                                        {{ __('ProtocoloTrabalhoIndividualPdf') }}
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div>
                            <h3>Dados FCT - 11ºano</h3>
                            <p>Nota:  </p>
                            <p>Empresa:  </p>
                            <label for="concluiu">Concluiu</label>
                            <input type="checkbox" id="concluiu" name="concluiu10" >

                            <div class="mt-12">
                                <div class="flex items-center justify-self-start">
                                    <a class="underline text-base text-gray-600 hover:text-gray-900 mt-3.5" href="{{ route('PFPdf') }}">
                                        {{ __('ProtocoloFormacaoPdf') }}
                                    </a>
                                </div>
                                <div class="flex items-center justify-self-start">
                                    <a class="underline text-base text-gray-600 hover:text-gray-900 mt-3.5" href="{{ route('PPPdf') }}">
                                        {{ __('ProtocoloParceriaPdf') }}
                                    </a>
                                </div>
                                <div class="flex items-center justify-self-start">
                                    <a class="underline text-base text-gray-600 hover:text-gray-900 mt-3.5" href="{{ route('PTIPdf') }}">
                                        {{ __('ProtocoloTrabalhoIndividualPdf') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h3>Dados FCT - 12ºano</h3>
                            <p>Nota:  </p>
                            <p>Empresa:  </p>
                            <label for="concluiu">Concluiu</label>
                            <input type="checkbox" id="concluiu" name="concluiu10" >

                            <div class="mt-12">
                                <div class="flex items-center justify-self-start">
                                    <a class="underline text-base text-gray-600 hover:text-gray-900 mt-3.5" href="{{ route('PFPdf') }}">
                                        {{ __('ProtocoloFormacaoPdf') }}
                                    </a>
                                </div>
                                <div class="flex items-center justify-self-start">
                                    <a class="underline text-base text-gray-600 hover:text-gray-900 mt-3.5" href="{{ route('PPPdf') }}">
                                        {{ __('ProtocoloParceriaPdf') }}
                                    </a>
                                </div>
                                <div class="flex items-center justify-self-start">
                                    <a class="underline text-base text-gray-600 hover:text-gray-900 mt-3.5" href="{{ route('PTIPdf') }}">
                                        {{ __('ProtocoloTrabalhoIndividualPdf') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
