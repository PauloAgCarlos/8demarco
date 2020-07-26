@extends('layouts.app')

@section('conteudo')

 <div class="container center">
        <h1> Dados Importantes</h1>
        <table>
            
            <tr><td>Nome</td><td>José Marcos Luciano</td> </tr>
            <tr><td>Nº de Agente</td><td>098765432</td> </tr>
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
        <tr><td>Nível Acadêmico</td><td>Licenciado</td></tr>
        <tr><td>Bairro</td> <td>Arco-íris</td></tr>
        <tr><td>Função</td> <td>Administrativo Nível 1</td></tr>
    </table>
   <a href="cadastroP.html"> <input type="submit" value="Editar" class="btn"></a>
    </div>

@endsection