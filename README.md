# FATURA LÍQUIDA: ANÁLISE E DESENVOLVIMENTO DE UM WEBSITE PARA GERENCIAMENTO E FORNECIMENTO DE ÁGUA. 

*Guilherme Otto – guilhermeotto.bsi@gmail.com*
*Julia Colognesi - juliacolognese2.0@gmail.com*
*Victor H. Schmidt  – victorhschmidt02@gmail.com*
*Professor orientador: Daniel dos Santos Jr, Me - daniel.santos@ifc.edu.br*

__Resumo__

A água é um dos recursos indispensáveis para o desenvolvimento dos seres vivos. Apesar da água potável ser um recurso limitado, atualmente há um enorme desperdício por parte dos seres humanos. Por conta disso, este documento apresenta o projeto Fatura Líquida que é um meio para conscientizar o usuário e facilitar o processo de recebimento, pagamento, informatização e controle do fornecimento de água, algo presente em todas as cidades e estados do Brasil. Apresentando um site construído com base nas ferramentas MySQL, Python e o framework Django, fornece ao usuário fácil acesso às suas faturas mensais, informações sobre as taxas aplicadas e seus motivos, além de notícias sobre o estado de fornecimento de água geral e individual. Com esse projeto visamos entender o funcionamento básico de frameworks relacionados ao front-end, treinar a criação, manutenção e organização de informações em banco de dados, além de, desvendar as requisições e como utilizadas para a comunicação entre as plataformas. 

**Palavras-chave:** desperdício. Fornecimento de água. Framework.

*Abstract*

Water is one of the essential resources for the development of living beings. Despite drinking water being a limited resource, there is currently a huge waste of human beings. Because of this, this document presents the Invoice Líquida project, which is a means to raise user awareness and facilitate the process of receiving, paying, computerizing and controlling water supply, something present in all cities and states in Brazil. Featuring a website built on MySQL, Python tools and the Django framework, it provides the user with easy access to their monthly bills, information on fees applied and their reasons, as well as news about the general and individual water supply status. With this project we aim to understand the basic functioning of frameworks related to the front-end, train the creation, maintenance and organization of information in a database, in addition to unraveling the requests and how they are used for communication between platforms.

**Keywords:** Waste. Water supply. Framework.

**1. Introdução**
	Umas das contas básicas ao se ter um imóvel são as faturas de consumo de água, que chegam através dos correios ou de agentes da empresa, que por meio dos coletores eletrônicos equipados com impressora entregam de imediato a fatura para as unidades consumidoras.
Por eventuais problemas logísticos e climáticos como chuva, alagamentos e falta de conservação das estradas, esse procedimento de emissão de fatura acaba por muitas das vezes atrasando ou entregando em cima do prazo de vencimento. Esses clientes ao receberem suas faturas acabam tendo transtornos, visto que nos casos de vir em atraso, acabam tendo que entrar em contato com a companhia de água para removerem os juros e adquirirem a segunda via da fatura.
Visando reduzir as preocupações com a fatura de água dos proprietários de imóveis, este projeto visa desenvolver um site de gerenciamento de água, onde o cliente poderá acessar o seu consumo atual, históricos das faturas, visualizar a bandeira em que a cidade se encontra e a segunda via do boleto.
	

**1.1. Objetivo geral**
	Desenvolver um sistema de gerenciamento de água.

**1.1.1. Objetivos específicos**
Pesquisar sobre os problemas da falta de água no mundo.
Analisar sites relacionados ao fornecimento e gerenciamento de faturas de consumo de água.
Desenvolver um site com a linguagem Python, o framework Django e o banco de dados MySQL . 

**2. Revisão de literatura**

No mundo há cerca de 200 mil quilômetros cúbicos de água distribuídos em rios e lagos. Embora a água seja um recurso renovável, ela não é mais suficiente para suprir as necessidades da população mundial atual (cerca de 7,7 bilhões), visto que ela também não se encontra distribuída homogeneamente, fazendo com que 40% da população mundial sofra de escassez de água (BARROS et al., 2022). Na atualidade sabe-se que o planeta possui 70% de água onde apenas 2,5% do total é doce. Destes, 68,9% estão congelados em geleiras, o restante está dividido em 29% nos lençóis freáticos e apenas 0,3% em rios e lagos (GAIO, 2016). Dessa porcentagem, o Brasil detém 11%. Onde a região sul apresenta 6,5% desse recurso (BARROS e AMIN, 2022; GAIO, 2016; TUCCI et al., 2000).
Além da limitação de água potável apresentada, enfrentamos também problemas com a obtenção de informações sobre o consumo de água, um elemento importante para evitar a potencialização da escassez e o desperdício, grande parte da população que possuem saneamento básico sofrem com atrasos na obtenção de dados de consumo, essa dificuldade está relacionada diretamente com a forma que chegam as faturas, por meio dos correios ou agentes das empresas de distribuição de água, que se dirigem até os consumidores e utilizam dos coletores eletrônicos equipados com impressora para entregar de imediato. Esses métodos de entrega enfrentam os transtornos logísticos e climáticos que acabam por muitas das vezes atrasando, entregando em cima do prazo de vencimento ou ainda perdendo os dados, gerando transtornos aos consumidores, que são obrigados a entrar em contato com companhia de água para obter informações de consumo, removerem os juros e adquirir a segunda via da fatura.
Diante dos problemas citados se viu como solução o desenvolvimento de um site que possa fazer o cadastro e disponibiliza aos clientes os seus dados como consumo e histórico de faturas, segundo Rodrigues et al. (2000),  as facilidades proporcionadas pela internet podem ser aplicadas como uma forma de fazer negócio,  de forma online, Andrade et al. (2020) afirmam que o meio digital oferece também agilidade e otimização de tempo para o compartilhamento de informações. Sendo assim justificável a utilização dos  diversos recursos para a criação de um site para disponibilizar informações que auxiliem o controle da utilização da água, tendo como objetivo  ser simples, acessível e útil.

**3. Materiais e métodos**
A presente seção descreve as etapas de desenvolvimento do sistema, abrangendo os cronogramas utilizados, a engenharia de requisitos, os diagramas de casos de uso, de classes e de entidade relacionamento bem como a fase de desenvolvimento do sistema.
	A tabela 01 a seguir resume as etapas para a construção deste projeto, partindo de uma breve adequação de tema e problema para de fato desenvolver o produto proposto.

      **Tabela 01:** Cronograma de atividades para 2022.

 ´´tabela01´´
 
 **3.1. Análise do sistema**
	Nesta etapa, serão descritas as fases necessárias para a análise do produto proposto, dividido em Engenharia de requisitos, diagramas UML e diagr ama de banco de dados.

**3.1.1. Engenharia de requisitos**
Segundo Lopes et al. (2005), a engenharia de requisitos é responsável pela caracterização dos requisitos como forma de expressar as características necessárias e restrições impostas a um software, para que ele satisfaça as expectativas existentes e possibilite seu entendimento pelos indivíduos que desenvolverão o projeto. Os requisitos funcionais apresentam funcionalidades ou serviços que um sistema deve ou pode ser capaz de executar ou fornecer.

      **Tabela 03:** Requisitos funcionais

´´tabela03´´

Segundo Pereira et al. (2013) , os requisitos não funcionais são fundamentais para as organizações, pois estão ligados às restrições e a qualidade do software, como por exemplo, o tempo de execução, privilégios de segurança, compatibilidade com outros softwares, etc.

      **Tabela 04:** Requisitos não funcionais

Por fim, as regras de negócio são uma sentença que define ou qualifica algum aspecto do negócio, assim representando o conhecimento dos especialistas do negócio (BRG, 2000). A tabela abaixo resume as regras de negócio deste sistema.

      **Tabela 05:** Regras de negócio

**3.1.2. Diagramas**

**Diagrama de Caso de Uso**

**Diagrama de Classe**

**Modelo lógico**

**3.1.3. Prototipação**
	A prototipação é uma forma de visualizar a ideia do projeto antes de executá-lo, ela busca simular a experiência do usuário com o projeto e mostrar como serão as funcionalidades. A prototipação das telas deste projeto se encontram no apêndice A, contendo 10 protótipos com cada um possuindo um breve resumo de suas funcionalidades.
  
**Referências**

ANDRADE, Charliene Bruna Holanda; MEHLECKE, Querte Teresinha Conzi. As inovações tecnológicas e a contabilidade digital: Um estudo de caso sobre a aceitação da contabilidade digital no processo de geração de informação contábil em um escritório contábil do Vale do Paranhana/RS. 
Revista Eletrônica de Ciências Contábeis, v. 9, n. 1, p. 93-122, 2020.Disponível em: http://seer.faccat.br/index.php/contabeis/article/view/1596. Acesso em: 29 ago 2022.

BARROS, Fernanda Gene Nunes; AMIN, Mário M. Água: um bem econômico de valor para o Brasil e o mundo. Revista brasileira de gestão e desenvolvimento regional, v. 4, n. 1, 2008. Disponível em: https://rbgdr.net/revista/index.php/rbgdr/article/view/116/106. Acesso em: 23 ago 2022.
Brasileira de Recursos Hídricos. Vol. 5, n. 3 (jul./set. 2000), p. 31-43, 2000.Disponível em: https://www.lume.ufrgs.br/handle/10183/232499. Acesso em: 23 ago 2022.
BRG Business Rules Group. Defining Business Rules û What Are They Really? 2000, revisão 1.3. Disponível em: <http://www.businessrulesgroup.org>. Acesso em: 30 ago 2022.
GAIO, Susana Sofia Marques. Produção de água potável por dessalinização: tecnologias, mercado e análise de viabilidade econômica. Orientador: Jorge Maia Alves. 2016. Dissertação (Mestrado) - Curso de Geografia, Universidade de Lisboa, Lisboa, 2016.Disponível em: http://hdl.handle.net/10451/26066. Acesso em: 23 ago 2022. 
LOPES, Leandro Teixeira et al. Um modelo de processo de engenharia de requisitos para ambientes de desenvolvimento distribuído de software. 2004. Disponível em: https://tede2.pucrs.br/tede2/bitstream/tede/5300/1/384394.pdf. Acesso em: 30 ago 2022. 

ND  (2014). Disponível em:https://ndmais.com.br/economia-sc/saiba-como-e-feito-o-calculo-da-conta
-de-agua-de-sua-casa /. Acesso em: 30 ago 2022.

PEREIRA, Tarcísio et al. Requisitos não-funcionais em modelos de processos de negócio: Uma revisão sistemática. Anais do IX Simpósio Brasileiro de Sistemas de Informação, p. 37-48, 2013. Disponível em : https://sol.sbc.org.br/index.php/sbsi/article/view/5674/5571. Acesso em: 30 ago 2022.

RODRIGUES, Guilherme Augusto Borin; PLENS, Marcelo; ARAÚJO , Natália Pagan. Gestão em vendas online: Estudo de caso de empresa calçadista com modelo de negócio em marketplace/online. Revista Empreenda UniToledo Gestão, Tecnologia e Gastronomia, v. 4, n. 1, 2020. Disponível em: http://ojs.toledo.br/index.php/gestaoetecnologia/article/view/3654 . Acesso em: 29 ago 2022.

TUCCI, Carlos Eduardo Morelli; HESPANHOL, Ivanildo; CORDEIRO NETTO, Oscar de M. Cenários da gestão da água no Brasil: uma contribuição para a" visão mundial da água". RBRH: Revista Brasileira de Recursos Hídricos. Vol. 5, n. 3 (jul./set. 2000), p. 31-43, 2000.Disponível em: https://www.lume.ufrgs.br/handle/10183/232499. Acesso em: 23 ago 2022.








