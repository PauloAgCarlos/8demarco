@extends('layouts.app')

@section('conteudo')

  <div class="container center">
        <h1> Dados Importantes</h1>
        <table>
            
            <tr><td>Nome</td><td>Paulo Agostinho Carlos</td> </tr>
            <tr><td>Nº de SGA</td><td>200106</td> </tr>
            <tr><td>Data de Nascimento</td><td>29/12/1987</td> </tr>
            <tr><td>Local de Nascimento</td><td>Huíla-Matala</td> </tr>
            <tr><td>Nº de BI</td><td>004612374HA045</td> </tr>
            <tr><td>Estado cívil</td><td>Solteiro</td> </tr>
            <tr><td>Data de Emição: </td><td>23/10/2017</td> </tr>
            <tr><td>Data de Expiração</td><td>23/04/2022</td> </tr>
            <tr><td>Sexo</td><td>M</td> </tr>
            
        </table>
        <h1> Informações Adicionais</h1>

    <table>
        <tr><td>Cidade Onde Mora</td><td>Lubango</td></tr>
        <tr><td>Bairro</td> <td>Arco-íris</td></tr>
    </table>
    <h1> Informações do Encarregado de Educação</h1>

    <table>
        <tr><td>Nome</td><td>António Luciano Paulo</td></tr>
        <tr><td>Nº de Telefone</td><td>935941628</td></tr>
        <tr><td>Relação com a Criança</td> <td>Pai</td></tr>
    </table>
    <h1> Dados Acadêmicos</h1>

    <table>
        <tr><td>Período</td><td>Laboral</td></tr>
        <tr><td>Turno</td><td>Tarde</td></tr>
        <tr><td>Classe</td> <td>2ª</td></tr>
    </table>
    <a href="cadastroE.html"> <input type="submit" value="Editar" class="btn"></a>
    </div>


@endsection