<h3>Fornecedor index</h3>


@isset($fornecedores)
    fornecedores:{{ $fornecedores[0]['nome'] }} 
    <br>
    Status:{{ $fornecedores[0]['status'] }} 
    <br>
    Cnpj:{{ $fornecedores[0]['cnpj'] }} 
    <br>
    DD:({{ $fornecedores[0]['ddd']??'' }}) 
    <br>
    Telefone:{{ $fornecedores[0]['telefone']??'' }} 
    @switch($fornecedores[0]['ddd'])
        @case('11')
            São Paulo-SP            
            @break
        @case('85')
            Fortaleza-Ce
            @break
        @case('32')
            Juiz de Fora-MG
            @break
        @default
            Estado não indentificado
    @endswitch
@endisset
