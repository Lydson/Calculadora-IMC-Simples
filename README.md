# Calculadora de IMC

Este projeto é uma calculadora de IMC (Índice de Massa Corporal) com uma interface simples e bonita, utilizando HTML, CSS e PHP.
![calculadora1](https://github.com/Lydson/Calculadora-IMC-Simples/blob/main/img/calculadora1.png)
![calculadora1](https://github.com/Lydson/Calculadora-IMC-Simples/blob/main/img/calculadora2.png)
## Funcionalidades

- O usuário pode inserir o peso e a altura para calcular o IMC.
- A classificação do IMC é exibida com base nos valores calculados:
  - **Magreza**
  - **Saudável**
  - **Sobrepeso**
  - **Obesidade**
- A interface tem um design moderno, com um fundo de gradiente inspirado no Instagram.

## Tecnologias Utilizadas

- **HTML**: Para a estrutura da página e do formulário.
- **CSS**: Para o estilo visual, incluindo o fundo com gradiente e os resultados do IMC.
- **PHP**: Para calcular o IMC e classificar o valor conforme as faixas predefinidas.

## Estrutura do Projeto

- **index.html**: Página principal com o formulário para o usuário inserir o peso e a altura.
- **style.css**: Estilo visual da página, incluindo o fundo em gradiente e formatação dos resultados.
- **imc.php**: Lógica de cálculo do IMC e exibição do resultado com a classificação.

## Como Executar o Projeto Localmente

### Pré-requisitos

Este projeto requer um servidor PHP para funcionar corretamente, pois o arquivo `imc.php` precisa ser processado pelo PHP.

### Passo a Passo

1. **Baixe os Arquivos**:
   - Faça o download dos arquivos ou copie o conteúdo de cada um:
     - `index.html`
     - `style.css`
     - `imc.php`
2. **Instale um Servidor Local**:

   - Se você não tiver um servidor PHP instalado, você pode usar o [XAMPP](https://www.apachefriends.org/pt_br/index.html), [WAMP](https://www.wampserver.com/en/), ou [MAMP](https://www.mamp.info/en/) para configurar um ambiente local PHP e Apache.
   - Após instalar o servidor, inicie o Apache e o MySQL (se necessário).

3. **Coloque os Arquivos no Servidor Local**:

   - No **XAMPP**, coloque os arquivos na pasta `htdocs`.
   - No **WAMP**, coloque os arquivos na pasta `www`.
   - No **MAMP**, coloque os arquivos na pasta `htdocs`.

4. **Acesse o Projeto pelo Navegador**:
   - Abra o navegador e digite `http://localhost/index.html` ou o caminho adequado ao seu servidor local.
   - O formulário será exibido, e você pode inserir o peso e a altura para calcular o IMC.

### Caso queira refatorar para JavaScript

Você pode substituir o PHP por JavaScript para que o cálculo do IMC aconteça diretamente no navegador. Aqui está o exemplo de como ficaria o código com **JavaScript**:
