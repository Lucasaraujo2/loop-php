<?php

$produtos = [
    [
           
        'Modelo' => 'Golf Sportiline',
        'cor' => 'Prata',
        'Placa' => 'HVY-6400',
        'Ano' => '2015',
        'Marca' => 'VolksWagen',
        'Qtd Portas' => '4',
        'Tipo' =>  'Automovel'
       
    ],

    [
        'Modelo' => 'Sonata',
        'cor' => 'Preto',
        'Placa' => 'HYM-8205',
        'Ano' => '2011',
        'Marca' => 'Hyundai',
        'Qtd Portas' => '4',
        'Tipo' =>  'Automovel'
    ],

    [
        'Modelo' => 'Jetta tsi',
        'cor' => 'Branco',
        'Placa' => 'LWJ-3656',
        'Ano' => '2019',
        'Marca' => 'VolksWagen',
        'Qtd Portas' => '4',
        'Tipo' =>  'Automovel'
    ],

    [
        'Modelo' => 'Hornet',
        'cor' => 'preto',
        'Placa' => 'AML-1296',
        'Ano' => '2016',
        'Marca' => 'Honda',
        'Qtd Portas' => '0',
        'Tipo' =>  'Motocicleta'
    ],

    [
        'Modelo' => 'XT 660',
        'cor' => 'Vermelho',
        'Placa' => 'HRP-0166',
        'Ano' => '2020',
        'Marca' => 'Yamaha',
        'Qtd Portas' => '0',
        'Tipo' =>  'Motocicleta'
    ],

    [
        'Modelo' => 'XJ6',
        'cor' => 'AZUL',
        'Placa' => 'JMD-3039',
        'Ano' => '2013',
        'Marca' => 'Yamaha',
        'Qtd Portas' => '0',
        'Tipo' =>  'Motoclicleta'
    ]

];

?>

<table border="1" class="tabela">
    <tr>
        <td>Modelo</td>
        <td>Cor</td>
        <td>Ano</td>
        <td>Placa</td>
        <td>Marca</td>
        <td>Quantidades placas</td>
        <td>Tipo</td>
        <td>Edição</td>
        <td>Remoção</td>
    </tr>

    <?php foreach ($veiculos as $info) { ?>


        <tr>
            <td><?= $info['modelo'] ?></td>
            <td><?= $info['cor'] ?></td>
            <td><?= $info['ano'] ?></td>
            <td><?= $info['placa'] ?></td>
            <td><?= $info['marca'] ?></td>
            <td><?= $info['qtdd portas'] ?></td>
            <td><?= $info['tipo'] ?></td>

            <td><button>Editar</button></td>
            <td><button>Apagar</button></td>
        </tr>

    <?php } ?>


</table>

