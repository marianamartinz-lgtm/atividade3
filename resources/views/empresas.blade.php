{{-- resources/views/empresas/contato.blade.php --}}
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Contato para Empresas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Se você tiver Vite/Tailwind, inclua @vite. Caso não, as classes ainda são semânticas. --}}
    {{-- @vite(['resources/css/app.css','resources/js/app.js']) --}}
</head>
<body class="min-h-screen bg-gray-50">
    <header class="bg-white shadow">
        <div class="max-w-4xl mx-auto px-4 py-6">
            <h1 class="text-2xl font-bold">Fale com o Comercial</h1>
            <p class="text-gray-600">Atendimento para parcerias e serviços B2B</p>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-4 py-8">
        @if (session('ok'))
            <div class="mb-6 rounded-lg border border-green-200 bg-green-50 p-4 text-green-800">
                {{ session('ok') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 rounded-lg border border-red-200 bg-red-50 p-4 text-red-800">
                <p class="font-semibold">Verifique os campos abaixo:</p>
                <ul class="list-disc pl-6">
                    @foreach ($errors->all() as $erro)
                        <li>{{ $erro }}</li>
                    @endforeach
                </ul>
            </div>
        @endif>

        <form action="{{ route('empresas.contato.enviar') }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded-2xl shadow">
            @csrf

            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Empresa *</label>
                    <input type="text" name="empresa" value="{{ old('empresa') }}" class="mt-1 w-full rounded-xl border-gray-300" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">CNPJ</label>
                    <input type="text" name="cnpj" value="{{ old('cnpj') }}" placeholder="00.000.000/0000-00" class="mt-1 w-full rounded-xl border-gray-300">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Responsável *</label>
                    <input type="text" name="responsavel" value="{{ old('responsavel') }}" class="mt-1 w-full rounded-xl border-gray-300" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">E-mail *</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="mt-1 w-full rounded-xl border-gray-300" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Telefone</label>
                    <input type="text" name="telefone" value="{{ old('telefone') }}" placeholder="(00) 00000-0000" class="mt-1 w-full rounded-xl border-gray-300">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Serviço de interesse</label>
                    <select name="servico" class="mt-1 w-full rounded-xl border-gray-300">
                        <option value="">Selecione…</option>
                        <option value="fornecimento" @selected(old('servico')==='fornecimento')>Fornecimento recorrente</option>
                        <option value="evento" @selected(old('servico')==='evento')>Coffee break / Eventos</option>
                        <option value="parceria" @selected(old('servico')==='parceria')>Parcerias</option>
                        <option value="outros" @selected(old('servico')==='outros')>Outros</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Assunto *</label>
                <input type="text" name="assunto" value="{{ old('assunto') }}" class="mt-1 w-full rounded-xl border-gray-300" required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Mensagem *</label>
                <textarea name="mensagem" rows="6" class="mt-1 w-full rounded-xl border-gray-300" required>{{ old('mensagem') }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Anexo (opcional)</label>
                <input type="file" name="anexo" class="mt-1 block w-full text-sm text-gray-700">
                <p class="text-xs text-gray-500 mt-1">PDF, DOC, DOCX, PNG, JPG — até 4MB.</p>
            </div>

            <div class="flex items-center gap-3">
                <input id="lgpd" name="lgpd" type="checkbox" value="1" class="h-4 w-4 rounded border-gray-300" {{ old('lgpd') ? 'checked' : '' }}>
                <label for="lgpd" class="text-sm text-gray-700">
                    Concordo com a <a href="#" class="underline">política de privacidade</a>.
                </label>
            </div>

            <div class="pt-2">
                <button type="submit" class="rounded-2xl px-5 py-3 bg-gray-900 text-white font-semibold hover:opacity-90">
                    Enviar mensagem
                </button>
            </div>
        </form>

        <p class="text-xs text-gray-500 mt-6">* Campos obrigatórios</p>
    </main>

    <footer class="max-w-4xl mx-auto px-4 py-10 text-center text-gray-500">
        © {{ date('Y') }} — Sua Padaria / Comercial
    </footer>
</body>
</html>
