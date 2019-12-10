<?php

namespace LOJA\includes;

class Util
{

    public static function uploadImg()
    {
        // ENVIA IMAGEM
        $target_dir = "view/img/produtos/"; // MUDA DIRETÓRIO
        // $target_file = $target_dir . basename($_FILES["imagem"]["name"]); // PEGA O ARQUIVO
        $uploadOk = 1; // 1 QUER DIZER OK
        $extension = strtolower(pathinfo($_FILES["imagem"]["name"], PATHINFO_EXTENSION)); // PEGA EXTENSÃO
        $newName = md5(uniqid("")) . "." . $extension; // GERA NOME ALEATORIO COM A EXTENSÃO


        // VERIFICA SE IMAGEM É JPG, PNG OU GIR
        if (
            $extension != "jpg" && $extension != "png" && $extension != "jpeg"
            && $extension != "gif" && $extension != "jfif"
        ) {
            $uploadOk = 0;
        }

        // SE estiver ok, $uploadOk =1, move o arquivo
        if ($uploadOk == 0) {
            $msg = "Error de Upload";
        } else {
            if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_dir . $newName)) { } else {
                $msg = "Error de Upload";
            }
        }

        return $newName;
    }

    function validaCPff($cpf = null) {

        // Verifica se um número foi informado
        if(empty($cpf)) {
            return false;
        }
    
        // Elimina possivel mascara
        $cpf = preg_replace("/[^0-9]/", "", $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
        
        // Verifica se o numero de digitos informados é igual a 11 
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se nenhuma das sequências invalidas abaixo 
        // foi digitada. Caso afirmativo, retorna falso
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
         // Calcula os digitos verificadores para verificar se o
         // CPF é válido
         } else {   
            
            for ($t = 9; $t < 11; $t++) {
                
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
    
            return true;
        }
    }
    

    public static function validaCPF($cpf)
    {
        

        // Extrai somente os números
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{
                $c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{
            $c} != $d) {
                return false;
            }
        }
        return true;
    }
}
