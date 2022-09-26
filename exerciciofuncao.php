<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Funcao</title>
</head>
<body>
    
    <?php
        //Exercicio A
        echo"<p>Exercicio A</p><br>";

        function tabuada ($valor){

            for ($i = 0; $i < 11; $i++){
                $soma = $valor * $i;
                echo "<p>$valor X $i = $soma</p>";

            }

        }

        //Altere o numero aqui!
        $numeroEsclohido = 6;

        echo "Numero escolhido: ".$numeroEsclohido;

        tabuada($numeroEsclohido);

        echo"<hr><br>";


        //EXERCICIO 2
        echo"<p>Exercicio B</p><br>";


        function inverter ($array){

            //Confere o tamanho do array
            echo"Ordem original <br>";
            print_r($array);
            echo "<br><br>";

            // //Variavel que inverte a posicao do array
            $arrayInvertida = array_reverse($array);


            //Confere a ordem invertida
            echo"Ordem invertida<br>";

            print_r($arrayInvertida);

        }

        $teste = [0,1,2];

        inverter($teste);

        echo"<hr><br>";


        //Exercicio 3 
        echo"<p>Exercicio C</p><br>";


        function maiorNumero($array){
            
            $numeroMaior = $array[0];

            for($i = 0; $i < sizeof($array); $i++){
                if($array[$i] > $numeroMaior){
                    $numeroMaior = $array[$i];
                }
            }

            echo"<p>$numeroMaior</p>";

        }

        $teste1 = [1,250,5];

        maiorNumero($teste1);

        echo"<hr><br>";


        //Exercicio 4
        echo"<p>Exercicio D</p><br>";


        $cpf = "123456789";
        echo "String numerica preenchida: $cpf <br><br>";

        function preencherCpf($string){
            //conferir se possui menos de 11 caracteres
            if(mb_strlen($string) > 11){
                echo "Informe numeros de ate 11 digitos.";
                
            }else{
                //determinar quantos digitos precisaremos acrescentar
                $digitosAMais = 11 -  mb_strlen($string);

                //transformar string em array, pois nao conseguimos contar em string
                $novoCpf = str_split($string);

                //Acrescentar digitos novos
                for($i = 0; $i < $digitosAMais; $i++){
                    array_unshift($novoCpf, "0");
                }

                //transformar array em string
                $novoCpf = implode($novoCpf);

                //Separar as partes do CPF para acrescentarmos caracteres
                $cpfParte1 = mb_substr($novoCpf, 0,3);
                $cpfParte2 = mb_substr($novoCpf,3,3);
                $cpfParte3 = mb_substr($novoCpf,6,3);
                $cpfParte4 = mb_substr($novoCpf,9,2);

                //Acrescentar os caracteres do CPF
                $novoCpf = $cpfParte1.".".$cpfParte2.".".$cpfParte3."-".$cpfParte4;

                echo"CPF criado: $novoCpf <br>";
            }
        }


        preencherCpf($cpf);



        echo"<br><hr><br><br>";

        //Exercicio 5

        echo"Exercicio E <br><br>";

        function convertF ($celsius){
            $conversao = ($celsius * 1.8) + 32;

            return $conversao;
        }

        $temp1 = convertF(90);
        $temp2 = convertF(77);
        $temp3 = convertF(52);
        $temp4 = convertF(12);

        echo"temperatura 1: $temp1 <br>";
        echo"temperatura 2: $temp2 <br>";
        echo"temperatura 3: $temp3 <br>";
        echo"temperatura 4: $temp4 <br>";

        echo"<br><hr><br>";

        //Exercicio 6 --------------

        echo "Ecercicio F <br><br>";


        $sentenca = "um tigre, dois tigres, tres tigres.";

        $busca = array("um","dois","tres");

        function buscaTexto($texto, $busca){
        if(is_array($busca)){
            foreach($busca as $palavras){
                $troca = "<font color='red'>".$palavras."</font>";
                $texto= str_replace( $palavras,$troca,$texto);
            }
        }
        return $texto;
        }
        echo buscaTexto($sentenca,$busca);




        //----------------------------------------

        echo "<br><hr><br><br>";

        //Exercicio 7

        echo "Exercicio G <br><br>";

        $vetorNumero = [
            [2,3],
            [4,1]
        ];


        function somaVetor($array){
            $soma = 0;

            foreach($array as $i){
                foreach($i as $t){
                    $soma+= $t;
                }
            }

            echo "$soma";
        }

        somaVetor($vetorNumero);


        // $somai = 0;

        // foreach($vetorNumero as $i){
        //     foreach($i as $t){
        //         $somai = $somai + $t;
        //     }
        // }

        // echo "$somai";

        //$somaVetor = array_sum($vetorNumero);








        


            



    ?>

</body>
</html>