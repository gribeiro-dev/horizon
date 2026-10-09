<h1 align="center">Horizon </h1>

<p align="center">
  <b> Transformando viagens de formatura em experiências inesquecíveis. </b>
</p>

<p align="center">
  Projeto acadêmico desenvolvido no SENAI para a empresa fictícia Horizon.
</p>

---

## 📌 Sobre o projeto

A **Horizon** é uma empresa fictícia de turismo especializada em viagens de formatura. O projeto foi desenvolvido como parte das atividades acadêmicas do SENAI, com o objetivo de aplicar conhecimentos de desenvolvimento web na criação de um site institucional para uma agência de viagens.

A plataforma apresenta a identidade visual da empresa, seus destinos turísticos, informações institucionais e experiências oferecidas aos estudantes. O projeto também explora a utilização de PHP para organizar e exibir conteúdos dinâmicos em páginas web.

O site foi pensado para proporcionar uma navegação intuitiva, apresentar as opções de viagem e transmitir a proposta da Horizon: transformar o encerramento de uma etapa escolar em uma experiência memorável.

## 🎯 Objetivos

- Desenvolver um site institucional para uma empresa fictícia.
- Aplicar conhecimentos de HTML, CSS e PHP.
- Criar uma identidade visual consistente com a proposta da empresa.
- Apresentar destinos turísticos de maneira organizada e atrativa.
- Praticar a organização de arquivos, componentes visuais e conteúdos.
- Trabalhar com versionamento de código utilizando Git e GitHub.

## ✨ Funcionalidades
  
  ### 🏠 Página inicial
  
  Apresenta a identidade da Horizon, sua proposta de valor e os diferenciais da empresa, além de uma seção com etapas do planejamento de uma viagem e depoimentos ilustrativos.
  
  ### 🌎 Destinos turísticos
  
  Apresenta destinos nacionais e internacionais, com imagens e descrições para ajudar os visitantes a conhecerem as opções disponíveis.
  
  Entre os destinos representados no projeto estão:
  
  - Barcelona, Espanha
  - Lençóis Maranhenses, Brasil
  - Paraty, Rio de Janeiro
  - Campos do Jordão, São Paulo
  - Salvador, Bahia
  - Complexo de parques Disney, Orlando, Estados Unidos
  
  ### 🔎 Detalhes dos destinos
  
  Utiliza PHP para consultar os dados dos destinos definidos no projeto e apresentar informações específicas de acordo com o identificador recebido pela URL.
  
  ### 👥 Quem somos
  
  Página institucional destinada a apresentar a empresa, sua identidade e sua proposta.
  
  ### 📞 Contatos
  
  Página destinada à apresentação das informações de contato e dos canais de comunicação da Horizon.
  
  ### 🛍️ Loja e compra
  
  O projeto inclui páginas relacionadas à experiência de compra e uma tela de confirmação visual. Essas páginas fazem parte da interface do site e não devem ser consideradas, por si só, uma integração com serviços reais de pagamento.
  
  ### ⭐ Depoimentos
  
  Apresenta comentários, autores, localidades e avaliações em estrelas. Os dados são definidos em um arquivo PHP e utilizados na renderização da página inicial.
  
  > **Observação:** o projeto está em desenvolvimento acadêmico. A disponibilidade e o funcionamento de cada página dependem da versão atual do código.

## 🛠️ Tecnologias utilizadas

| Tecnologia | Finalidade |
| --- | --- |
| HTML5 | Estruturação das páginas |
| CSS3 | Estilização, layout e identidade visual |
| PHP | Renderização dinâmica e organização de dados |
| Git | Controle de versão |
| GitHub | Hospedagem do código e colaboração |

O projeto também utiliza fontes disponibilizadas pelo Google Fonts.

## 📂 Estrutura do projeto

```text
horizon/
├── css/
│   ├── cabecalhoeRodape.css
│   ├── styleDestinos.css
│   ├── styleLoja.css
│   ├── stylePagInicial.css
│   └── ...
├── img/
│   └── imagens, logotipo e recursos visuais
├── cabecalho-rodape.html
├── comentarios.php
├── compra.html
├── contatos.html
├── destinos.html
├── detalhe_destino.php
├── formulario.php
├── index.php
├── lista_destinos.php
├── loja.html
├── sobreNos.html
└── README.md
```

*Observação: a estrutura acima destaca os arquivos identificados no repositório. Os arquivos adicionais de CSS e outros recursos podem variar conforme a versão do projeto.*

### Principais arquivos

- **`index.php`**: página inicial e renderização dos depoimentos.
- **`lista_destinos.php`**: define os dados utilizados para representar os destinos turísticos.
- **`detalhe_destino.php`**: apresenta os detalhes de um destino com base no identificador recebido.
- **`comentarios.php`**: contém os dados dos depoimentos exibidos no site.
- **`destinos.html`**: página de apresentação dos destinos.
- **`sobreNos.html`**: página institucional da empresa.
- **`contatos.html`**: página de contato.
- **`loja.html` e `compra.html`**: páginas relacionadas à interface de compra.
- **`formulario.php`**: arquivo PHP relacionado ao formulário.
- **`css/`**: reúne os arquivos de estilização.
- **`img/`**: armazena imagens e outros recursos gráficos utilizados pelo site.

## 🚀 Instalação e execução

Siga os passos abaixo para executar o projeto localmente.

### 1. Pré-requisitos

Antes de começar, verifique se você possui:

- [Git](https://git-scm.com/) instalado.
- [PHP](https://www.php.net/downloads.php) instalado e disponível no terminal.
- Um navegador atualizado, como Google Chrome ou Firefox.
- Um editor de código, como o [Visual Studio Code](https://code.visualstudio.com/) (opcional, mas recomendado).

Não é necessário configurar um banco de dados para a estrutura atual de dados de destinos e depoimentos apresentada no repositório.

### 2. Clone o repositório

Abra o terminal e execute:

```bash
git clone https://github.com/gribeiro-dev/horizon.git
```

Entre na pasta do projeto:

```bash
cd horizon
```
### 3. Instalar e configurar o video inicial

Por conta do video inicial ser muito grande, nós optamos por hospeda-lo dentro do Google Drive via o link abaixo (É essencial o download dele):

- Link: https://drive.google.com/file/d/11zpA1wD5BGNiH8sLlTsptaaNtlg6-OyC/view?usp=sharing

Após baixar o video acima, você precisa mover este arquivo para a seguinte pasta

```bash
/horizon/vids
```

Assim que colocar o video, o site já estara pronto para rodar exatamente como desenvolvido.

*Observação: a estrutura deve ser exatamente assim, caso mudar o nome ou estrutura do site, poderá ocasionar bugs e erros no website*




### 3. Verifique a instalação do PHP

Execute:

```bash
php -v
```

Se o terminal exibir a versão instalada do PHP, você poderá prosseguir.

Caso o comando não seja reconhecido, instale o PHP e configure o executável no PATH do sistema.

### 4. Inicie o servidor local

Na raiz do projeto, execute:

```bash
php -S localhost:8000
```

Esse comando inicia o servidor de desenvolvimento integrado do PHP na porta `8000`.

Mantenha o terminal aberto enquanto estiver utilizando o site.

### 5. Acesse o site

Abra o navegador e entre em:

**http://localhost:8000/index.php**

A página inicial deve ser acessada pelo arquivo PHP para que os trechos de código PHP sejam processados pelo servidor.

Para encerrar o servidor, volte ao terminal e pressione `Ctrl + C`.

## 👨‍💻 Autoria e colaboração

O desenvolvimento é realizado por uma equipe de estudantes no contexto do projeto acadêmico.

- Gustavo Ribeiro de Carvalho
- Logan Bruno Coppini
- Guilherme de Andrade Barrero
- Pedro Idalgo
- Daniel Bezerra

---

<p align="center">
  <b> Copyright © 2026 Horizon. Todos os direitos reservados. ✈️ </b>
</p>
