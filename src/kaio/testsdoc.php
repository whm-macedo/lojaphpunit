
    # Seja um programa para aceitar idade de uma pessoa 
    # com no mínimo 16 anos.
    

    # Entrada
    -> Um número inteiro

    # Classificação
    -> Pode digitar um número inteiro maior ou igual a 16
        --> Número válido
    -> Pode digitar um caracter
        --> Número inválido
    -> Pode digitar um número inteiro menor que 16
        --> Idade mínima 16 Anos
    -> Número decimal
        --> Não é um número válido

    # Casos de Teste
    20 -> Número válido
    "senac" -> Número inválido
    15 -> Idade mínima 16 Anos
    16.5 -> Não é um número válido


    # Um programa que realize o login com e-mail e senha.

    # Entrada
    1. Email: Caracteres no formato de e-mail
    2. Senha: Caracteres com mínimo 6

    
    # Classificação
    -> Caracteres no formato correto de e-mail
        -> E-mail Válido
    -> Caracteres fora do formato de e-mail
        -> E-mail inválido
    -> Senha maior que 6 caracteres
        -> Senha é válida
    -> Senha menor que 6 caracteres
        -> Senha é inválida
    -> Email e Senha correspondem ao usuário
        -> Usuário Autenticado
    -> Email e Senha não corresponder ao usuário
        -> Usuário inválido

    # Casos de Teste
    "daniel@rj.senac.br" -> E-mail Válido
    "danielrj.com" -> E-mail inválido
    "1234567" -> Senha é válida
    "daniel@rj.senac.br", "123456" -> Usuário Autenticado
    "daniel@rj.senac.br", "123459" -> Usuário inválido
