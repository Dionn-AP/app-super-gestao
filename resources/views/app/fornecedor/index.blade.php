<h3>Fornecedores</h3>

@isset($fornecedores)

    @foreach ($fornecedores as $indice)
        Fornecedores: {{ $indice['nome'] }}
        <br>

        Status: {{ $indice['status']}}
        <br>

        CNPL: {{ $indice['cnpj'] ?? 'não informado' }}
        <br>

        Telefone: ({{ $indice['ddd'] ?? 'não informado' }}) {{ $indice['telefone'] ?? 'não informado' }}
        <br>
        <hr>
    @endforeach()

@endisset