# Crochê da Nat

## Projeto principal do blog

Para a utilização desse projeto se faz necessário algumas tecnologias:

- PHP 7.2^
- MySQL
- Composer
- Git

O projeto está em desenvolvimento e qualquer alteração pode acarretar em erros, aguarde a versão final.

# Configuração

O arquivo de configuração fica na pasta **app\config**, contendo o arquivo **config.php** e uma subpasta chamada de **env** contendo o arquivo final de configuração para ambiente local, qa e produção.

## config.php

Faz uma avaliação através de uma variável para verificar qual arquivo será utilizado.

Mude o valor da variável **$prod** para true se quiser carregar o arquivo de configuração de prod, mas caso queira utilizar o arquivo de configurações locais, basta manter o valor da variável para false.
