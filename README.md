# TRABALHO DE PI:  Wheelieway: Aplicação de avaliação de estabelecimentos com base na acessibilidade
Trabalho desenvolvido durante a disciplina de Banco de Dados do Integrado
## Kanban
https://github.com/users/caiofraga123/projects/3

# Sumário

### 1. COMPONENTES<br>
Integrantes do grupo<br>
Rafael Barbosa Martins:rafaelmartinscouto@gmail.com<br>
Gabriel de Paula Brunetti:gabrieldpbrunetti@gmail.com<br>
Caio Fraga Coelho Cintra:caiofcintra@gmail.com<br>
Matheus Santos Nascimento:ifrn.jucurutu@gmail.com<br>

### 2.MINIMUNDO<br>
Descrever o mini-mundo! (Não deve ser maior do que 30 linhas, se necessário resumir para justar)
Entrevista com o usuário e identificação dos requisitos.(quando for o caso de sistemas com cliente real)
Descrição textual das regras de negócio definidas como um subconjunto do mundo real cujos elementos são propriedades que desejamos incluir, processar, armazenar, gerenciar, atualizar, e que descrevem a proposta/solução a ser desenvolvida.
<br>

> O sistema proposto para a "Wheelie Way" conterá as informacões aqui detalhadas. Dos Usuarios serão armazenados o id, nome, email, senha, bio e foto_perfil. De Tipo_Contato será armazenado id e descricao. O Usuário pode ter nenhum ou vários tipos de contato e um Tipo_contato pode pertencer a nenhum ou vários usuarios. De Estabelecimento será armazenado id, nome, selo, latitude, tipo_estabelecimento, longitude e foto_banner. De Avaliacao, será armazenado dt_avaliacao e nota. Um Usuario pode fazer nenhuma ou várias avaliações enquanto uma Avaliacao pode ser feita por um e por apenas um usuário. Um Estabelecimento pode ter nenhuma ou várias qualificações feitas por uma avaliação enquanto uama Avaliacao pode qualificar um e apenas um estabelecimento. De Visitas será armazenado dt_visita. Um Usuario pode realizar nenhuma ou várias visitas enquanto uma Visita pode ser realizada por um e por apenas um usuário. Um Estabelecimento pode ter nenhuma ou várias visitas feitas enquanto uma Visita pode ser feita a um e apenas um estabelecimento. De Comentarios será armazenado descricao e dt_comentario. Um Usuario pode escrever nenhum ou vários comentários enquanto uma Comentario pode ser escrito por um e por apenas um usuário. Um Estabelecimento pode ter nenhum ou várias comentários escritos enquanto um Comentario pode ser escrito sobre um e apenas um estabelecimento.
 
 
### 3.PMC<br>
![PMC](https://github.com/RafaBMartins/pi2023/blob/main/imagensReadme/PMC%20da%20Aplica%C3%A7%C3%A3o%20para%20PCD.svg "PMC")<br>

#### 3.1. EAP - Estrutura Analítica do Projeto
![EAP](https://github.com/RafaBMartins/pi2023/blob/main/imagensReadme/EAP(Aplica%C3%A7%C3%A3o%20para%20Pcd%20).svg "EAP")<br>
##### Dicionário do EAP
![DIC_EAP](https://github.com/RafaBMartins/pi2023/blob/main/imagensReadme/EAP-Dicionario.jpg "DIC_EAP")<br>

#### 3.2. Requisitos funcionais e não funcionais
##### Requisitos funcionais
<img src="https://github.com/RafaBMartins/pi2023/blob/main/imagensReadme/RF.jpg" /> <br>
##### Requisitos não funcionais
<img src="https://github.com/RafaBMartins/pi2023/blob/main/imagensReadme/RNF.jpg" /> <br>

#### 3.3 Validação da Ideia.
a) Link do formulário desenvolvido
>https://docs.google.com/presentation/d/1qrSYh5bpCSe50ds1G_YrqRBXrvAJAaLTO2YMUFZ8IF4/edit?usp=sharing

b) Link para Relatório/Apresentação de resultados obtidos
>https://docs.google.com/forms/d/e/1FAIpQLSeIjW1dLSWuLkgC4TJp6YfD5qHpMWzX4Fn65itIjeFbh9xYrg/viewform

### 4.Personas e Histórias de usuário<br>
a) inclusão dos Persons desenvolvidos pelo grupo<br>
<img src="https://github.com/RafaBMartins/pi2023/blob/bef88beda8af26123b2eca8d24d51f149fe0582e/imagensReadme/Persona.jpg" width="500" height="500"/>
<br>
<img src="https://miro.medium.com/max/1400/1*r5GVnOvqpMdxnGUYNRXqbg.png" UserStory src="https://miro.medium.com/max/1400/1*r5GVnOvqpMdxnGUYNRXqbg.png" width="500" height="300" /> <br>
b) inclusão das Histórias de usuário desenvolvidas pelo grupo
<br>


### 5. PROTÓTIPOS DO SISTEMA<br>
Neste ponto a codificação não e necessária, somente as ideias de telas devem ser desenvolvidas. O princípio aqui é pensar na criação da interface para identificar possíveis informações a serem armazenadas e/ou descartadas <br>

Sugestão: https://balsamiq.com/products/mockups/<br>

![Alt text](imagensReadme/prototipo.png)
![Arquivo PDF do Protótipo Balsamiq feito para Empresa Devcom](https://github.com/discproint/template_projeto_integrador/blob/main/arquivos/EmpresaDevcom.pdf?raw=true "Empresa Devcom")

#### 5.1 PROTÓTIPO DO SISTEMA MOBILE
Teste: https://quant-ux.com/#/test.html?h=a2aa10a35CHHhwHEySoH5G6qam0ce65GzUhN7BYFadNt0uannX6yJyutiZSO&ln=en

Telas: https://quant-ux.com/#/apps/641aeb7d05d7232656948d45/design/s10183_68866.html

#### 5.2 PROTÓTIPO DO SISTEMA WEB
https://github.com/RafaBMartins/pi2023/tree/3cbca575d3772ea636ad87d6046196004ac586e8/web

#### 5.3 QUAIS PERGUNTAS PODEM SER RESPONDIDAS COM OS SISTEMA WEB/MOBILE PROPOSTOS?
    a) O sistema proposto poderá fornecer quais tipos de relatórios e informaçes? 
    b) Crie uma lista com os 5 principais relatórios que poderão ser obtidos por meio do sistema proposto!
    
> A Empresa DevCom precisa inicialmente dos seguintes relatórios:
* Relatório que mostre quais estabelecimentos foram avaliados e sua nota média de estrelas de classificação quanto à acessibilidade(máximo de 5)
* Relatório que agrupe os selos pelos seus tipos, mostrando somente o atributo selo e a quantidade de selos com o referido tipo.
* Relatório que mostre quais são os tipos de estabelecimento e qual a sua quantidade do tipo.
* Relatório que mostre quaal é a quantidade de visitas do tipos de estabelecimentos.
* Relatório  que mostre os usuários e suas contribuições.
 
 ### 6.MODELO CONCEITUAL<br>
    A) Utilizar a Notação adequada (Preferencialmente utilizar o BR Modelo 3)
    B) O mínimo de entidades do modelo conceitual pare este trabalho será igual a 4.
        * informe quais são as 3 principais entidades do sistema em densenvolvimento
      (se houverem mais de 3 entidades, pense na importância da entidade para o sistema)       
    C) Principais fluxos de informação/entidades do sistema (mínimo 2). <br>Dica: normalmente estes fluxos estão associados as tabelas que conterão maior quantidade de dados 
    D) Qualidade e Clareza
        Garantir que a semântica dos atributos seja clara no esquema (nomes coerentes com os dados).
        Criar o esquema de forma a garantir a redução de informação redundante, possibilidade de valores null, 
        e tuplas falsas (Aplicar os conceitos de normalização abordados).   
        
![Alt text](imagensReadme/conceitual.png)
      
    
#### 7 Descrição dos dados 
    [objeto]: [descrição do objeto]
    
    EXEMPLO:
    USUARIO: Tabela que armazena as informações relativas ao usuário.<br>
    ID: Campo que armazena o número que identifica cada usuário.<br>
    NOME: Campo que armazena o nome do usuário.<br>
    EMAIL: Campo que armazena o email do usuário.<br>
    FOTO_PERFIL: Campo que armazena o link da foto de perfil do usuário.<br>
    SENHA: Campo que armazena a senha do usuário<br>.
    
    TIPO_CONTATO: Tabela que armazena as informações relativas ao tipo de contato do usuário.<br>
    ID: Campo que armazena o número que identifica cada tipo de contato.<br>
    DESCRICAO: Campo que armazena a descrição definindo qual é o tipo de contato.<br>
    
    ESTABELECIMENTO: Tabela que armazena as informações relativas ao estabelecimento.<br>
    ID: Campo que armazena o número que identifica cada estabelecimento.<br>
    NOME: Cmapo que armazena o nome do estabelecimento.<br>
    LATITUDE: Campo que armazena qual será a latitude a fim de ter a localização.<br>
    LONGITUDE: Campo que armazena qual será a longitude a fim de ter a localização.<br>
    FOTO_BANNER: Campo que armazena o link que conterá a foto de banner do estabelecimento.<br>
    
    SELO: Campo multivalorado que armazena as informações relativas ao selo do estabelecimento.<br>
    TIPO_ESTABELECIMENTO: Campo multivalorado que armazena as informações relativas ao tipo do estbaelecimento.<br>
    
    AVALIACAO: Tabela que armazena as informações relativas à avaliação de um sobre um estabelecimento.<br>
    DT_AVALIACAO: Campo que armazena a data em que foi feita a avaliação.<br>
    NOTA: Campo que armazena a nota da avaliação feita pelo usuário sobre um estabelecimento.<br>
    
    COMENTARIOS: Tabela que armazena as informações relativas aos comentáris de um usuário sobre um estabelecimento.<br>
    DESCRICAO: Campo que armazena a descrição do usuário sobre o estabelecimento.<br>
    DT_COMENTARIO: Campo que armazena a data em que o cometário foi feito.<br>
    
    VISITAS: Tabela que armazena as informações relativas à visita de um usário a um estabelecimento.<br>
    DT_VISITA: Campo que armazena a data em que a visita do usuário foi feita.<br>

### 8	RASTREABILIDADE DOS ARTEFATOS<br>
        a) Historia de usuários vs protótipo (Histórias de Usuário e em qual tela do protótipo aquela HU está sendo realizada).
        b) Protótipo vs Modelo conceitual (Histórias de Usuário e em quais tabelas aquele dado está sendo registrado).
        (modelos devem obrigatoriamente estar em conformidade de rastreabilidade)

### 9	MODELO LÓGICO<br>
        a) inclusão do esquema lógico do banco de dados
        b) verificação de correspondencia com o modelo conceitual 
        (não serão aceitos modelos que não estejam em conformidade)

### 10	MODELO FÍSICO<br>
        
      CREATE TABLE USUARIO (
          id SERIAL PRIMARY KEY,
          foto_perfil VARCHAR (500),
          nome VARCHAR (50),
          email VARCHAR (50),
          senha VARCHAR (50),
          bio VARCHAR (500),
          FK_TIPO_id SERIAL
      );

      CREATE TABLE PESSOA (
          FK_deficiencia_deficiencia_PK SERIAL,
          FK_USUARIO_id SERIAL PRIMARY KEY
      );

      CREATE TABLE ESTABELECIMENTO (
          FK_selo_selo_PK SERIAL,
          horario_inicial DATE,
          FK_tipo_estabelecimento_tipo_estabelecimento_PK SERIAL,
          foto_banner VARCHAR (500),
          latitude VARCHAR (50),
          longitude VARCHAR (50),
          FK_USUARIO_id SERIAL PRIMARY KEY
      );

      CREATE TABLE TIPO_CONTATO (
          id SERIAL PRIMARY KEY,
          descricao VARCHAR (50)
      );

      CREATE TABLE TIPO (
          id SERIAL PRIMARY KEY,
          tipo VARCHAR (50)
      );

      CREATE TABLE AVALIACAO (
          nota FLOAT,
          dt_avaliacao DATE,
          FK_PESSOA_FK_USUARIO_id SERIAL,
          FK_ESTABELECIMENTO_FK_USUARIO_id SERIAL
      );

      CREATE TABLE VISITAS (
          dt_visita DATE,
          FK_PESSOA_FK_USUARIO_id SERIAL,
          FK_ESTABELECIMENTO_FK_USUARIO_id SERIAL
      );

      CREATE TABLE COMENTARIOS (
          descricao VARCHAR (500),
          dt_comentario DATE,
          FK_PESSOA_FK_USUARIO_id SERIAL,
          FK_ESTABELECIMENTO_FK_USUARIO_id SERIAL
      );

      CREATE TABLE deficiencia (
          deficiencia_PK SERIAL NOT NULL PRIMARY KEY,
          deficiencia VARCHAR (50)
      );

      CREATE TABLE selo (
          selo_PK SERIAL NOT NULL PRIMARY KEY,
          selo VARCHAR (50)
      );

      CREATE TABLE tipo_estabelecimento (
          tipo_estabelecimento_PK SERIAL NOT NULL PRIMARY KEY,
          tipo_estabelecimento SERIAL
      );

      CREATE TABLE Seguidor (
          fk_USUARIO_id SERIAL,
          fk_USUARIO_id_ SERIAL
      );

      CREATE TABLE Pertence (
          fk_TIPO_CONTATO_id SERIAL,
          fk_USUARIO_id SERIAL,
          descricao VARCHAR (50)
      );

      ALTER TABLE USUARIO ADD CONSTRAINT FK_USUARIO_2
          FOREIGN KEY (FK_TIPO_id)
          REFERENCES TIPO (id)
          ON DELETE CASCADE;

      ALTER TABLE PESSOA ADD CONSTRAINT FK_PESSOA_2
          FOREIGN KEY (FK_deficiencia_deficiencia_PK)
          REFERENCES deficiencia (deficiencia_PK)
          ON DELETE NO ACTION;

      ALTER TABLE PESSOA ADD CONSTRAINT FK_PESSOA_3
          FOREIGN KEY (FK_USUARIO_id)
          REFERENCES USUARIO (id)
          ON DELETE CASCADE;

      ALTER TABLE ESTABELECIMENTO ADD CONSTRAINT FK_ESTABELECIMENTO_2
          FOREIGN KEY (FK_selo_selo_PK)
          REFERENCES selo (selo_PK)
          ON DELETE NO ACTION;

      ALTER TABLE ESTABELECIMENTO ADD CONSTRAINT FK_ESTABELECIMENTO_3
          FOREIGN KEY (FK_tipo_estabelecimento_tipo_estabelecimento_PK)
          REFERENCES tipo_estabelecimento (tipo_estabelecimento_PK)
          ON DELETE NO ACTION;

      ALTER TABLE ESTABELECIMENTO ADD CONSTRAINT FK_ESTABELECIMENTO_4
          FOREIGN KEY (FK_USUARIO_id)
          REFERENCES USUARIO (id)
          ON DELETE CASCADE;

      ALTER TABLE AVALIACAO ADD CONSTRAINT FK_AVALIACAO_1
          FOREIGN KEY (FK_PESSOA_FK_USUARIO_id)
          REFERENCES PESSOA (FK_USUARIO_id)
          ON DELETE CASCADE;

      ALTER TABLE AVALIACAO ADD CONSTRAINT FK_AVALIACAO_2
          FOREIGN KEY (FK_ESTABELECIMENTO_FK_USUARIO_id)
          REFERENCES ESTABELECIMENTO (FK_USUARIO_id)
          ON DELETE CASCADE;

      ALTER TABLE VISITAS ADD CONSTRAINT FK_VISITAS_1
          FOREIGN KEY (FK_PESSOA_FK_USUARIO_id)
          REFERENCES PESSOA (FK_USUARIO_id)
          ON DELETE CASCADE;

      ALTER TABLE VISITAS ADD CONSTRAINT FK_VISITAS_2
          FOREIGN KEY (FK_ESTABELECIMENTO_FK_USUARIO_id)
          REFERENCES ESTABELECIMENTO (FK_USUARIO_id)
          ON DELETE CASCADE;

      ALTER TABLE COMENTARIOS ADD CONSTRAINT FK_COMENTARIOS_1
          FOREIGN KEY (FK_PESSOA_FK_USUARIO_id)
          REFERENCES PESSOA (FK_USUARIO_id)
          ON DELETE CASCADE;

      ALTER TABLE COMENTARIOS ADD CONSTRAINT FK_COMENTARIOS_2
          FOREIGN KEY (FK_ESTABELECIMENTO_FK_USUARIO_id)
          REFERENCES ESTABELECIMENTO (FK_USUARIO_id)
          ON DELETE CASCADE;

      ALTER TABLE Seguidor ADD CONSTRAINT FK_Seguidor_1
          FOREIGN KEY (fk_USUARIO_id)
          REFERENCES USUARIO (id)
          ON DELETE CASCADE;

      ALTER TABLE Seguidor ADD CONSTRAINT FK_Seguidor_2
          FOREIGN KEY (fk_USUARIO_id_)
          REFERENCES USUARIO (id)
          ON DELETE CASCADE;

      ALTER TABLE Pertence ADD CONSTRAINT FK_Pertence_1
          FOREIGN KEY (fk_TIPO_CONTATO_id)
          REFERENCES TIPO_CONTATO (id)
          ON DELETE SET NULL;

      ALTER TABLE Pertence ADD CONSTRAINT FK_Pertence_2
          FOREIGN KEY (fk_USUARIO_id)
          REFERENCES USUARIO (id)
          ON DELETE SET NULL;
       
### 11	INSERT APLICADO NAS TABELAS DO BANCO DE DADOS<br>
        a) inclusão das instruções de inserção dos dados nas tabelas criadas pelo script de modelo físico
        (Drop para exclusão de tabelas + create definição de para tabelas e estruturas de dados 
 <br> + insert para dados a serem inseridos)
        b) Criar um novo banco de dados para testar a restauracao 
        (em caso de falha na restauração o grupo não pontuará neste quesito)
        c) formato .SQL

#### 12 PRINCIPAIS CONSULTAS DO SISTEMA 
 Inserir as principais consultas (relativas aos 5 principais relatórios) definidas previamente no iten 3.1 deste template.
 <br>
  a) Você deve apresentar as consultas em formato SQL para cad um dos relatórios.
 <br>
  b) Além da consulta deve ser apresentada uma imagem com o resultado obtido para cada consulta.<br>

 ### 13 Gráficos, relatórios, integração com Linguagem de programação e outras solicitações.<br>
     https://colab.research.google.com/drive/1aXXBjg6vr5BMXA1oWspFaLYMA0AUu7Rq?usp=sharing
 #### 13.1	Integração com Linguagem de programação; <br>
     https://colab.research.google.com/drive/1aXXBjg6vr5BMXA1oWspFaLYMA0AUu7Rq?usp=sharing
 #### 13.2	Desenvolvimento de gráficos/relatórios pertinentes, juntamente com demais <br>
 #### solicitações feitas pelo professor. <br>
 
 ### 14 Slides e Apresentação em vídeo. <br>
     OBS: Observe as instruções relacionadas a cada uma das atividades abaixo.<br>
 #### 14.1 Slides; <br>
 #### 14.2 Apresentação em vídeo <br>

    
##### About Formatting
    https://help.github.com/articles/about-writing-and-formatting-on-github/
    
##### Basic Formatting in Git
    
    https://help.github.com/articles/basic-writing-and-formatting-syntax/#referencing-issues-and-pull-requests
   
    
##### Working with advanced formatting
    https://help.github.com/articles/working-with-advanced-formatting/

#### Mastering Markdown
    https://guides.github.com/features/mastering-markdown/

### OBSERVAÇÕES IMPORTANTES

#### Todos os arquivos que fazem parte do projeto (Imagens, pdfs, arquivos fonte, etc..), devem estar presentes no GIT. Os arquivos do projeto vigente não devem ser armazenados em quaisquer outras plataformas.
1. Caso existam arquivos com conteúdos sigilosos, comunicar o professor que definirá em conjunto com o grupo a melhor forma de armazenamento do arquivo.

#### Todos os grupos deverão fazer Fork deste repositório e dar permissões administrativas ao usuário deste GIT, para acompanhamento do trabalho.

#### Os usuários criados no GIT devem possuir o nome de identificação do aluno (não serão aceitos nomes como Eu123, meuprojeto, pro456, etc). Em caso de dúvida comunicar o professor.


Link para BrModelo:<br>
http://sis4.com/brModelo/brModelo/download.html
<br>


Link para curso de GIT<br>
![https://www.youtube.com/curso_git](https://www.youtube.com/playlist?list=PLo7sFyCeiGUdIyEmHdfbuD2eR4XPDqnN2?raw=true "Title")


##### Github pages
https://rafabmartins.github.io/pi2023/web/html/index.html
