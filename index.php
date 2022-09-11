<?php 

echo "<h1>Gerar Excel - CSV</h1>";


//Criar Cabeçalho do Excel - Usar a função mb_convert_encoding para converter caracteres especiais
$cabecalho = ['id','Nome','E-mail',mb_convert_encoding('Endereço',"ISO-8859-1","UTF-8")];

//Array de dados
$usuarios = [
     [ 

        'id' => '1',
        'nome' => 'edivaldo',
        'email' => 'edivaldosoares2015.1@gmail.com',
        'endereco' => 'Rua ......',

     ],
     [ 

        'id' => '2',
        'nome' => 'luana',
        'email' => 'luana@gmail.com',
        'endereco' => 'Avenida ......',

     ],
     [ 

        'id' => '3',
        'nome' => mb_convert_encoding('Verônica',"ISO-8859-1","UTF-8"),
        'email' => 'veronica@gmail',
        'endereco' => 'logradouro ......',

     ],
     [ 

        'id' => '4',
        'nome' => 'erica',
        'email' => 'erica@gmail.com',
        'endereco' => 'Estrada ......',

     ],


];

//abrir o arquivo
$arquivo = fopen('file.csv', 'w');


//Escrever o cabeçalho no arquivo
fputcsv($arquivo, $cabecalho, ';');

//Escrever o conbteudo no arquivo
foreach($usuarios as $row_usuario){

    fputcsv($arquivo, $row_usuario, ';' );
}

//fechar  o arquivo
fclose($arquivo);

?>