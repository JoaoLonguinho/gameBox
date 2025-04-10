# gameBox
Um projeto de desenvolvimento CRUD utilizando Design Pattern: Dao juntamente ao PDO

Este projeto foi iniciado no dia 08/04/2025 e finalizado hoje (10/04/2025), estou aberto a sugestões para implementações no futuro.
A linguagem escolhida foi PHP e o projeto tem como intuíto de testar e demonstrar minhas habilidades com PHP, HTML e CSS.
Infelizmente, não é possível publicar o mesmo aqui no github pages free, por utilizar a linguagem PHP, necessitar de um servidor, como o XAMPP e utilizar um banco de dados.

Abaixo estarei explicando cada tela, e também ilustrando sua funcionalidade (lembrando que é necessário trocar os dados do banco no arquivo db.php).
Obs: Não foram adicionados jogos reais nas telas devido a questões de copyright.

Caso queiram testar a aplicação, podem efetuar o download para devidos testes.

Peço que não utilizem o código criado aqui para fins lucrativos.

Dito isso, segue abaixo o print de cada uma das telas.

Aqui, é a primeira tela do sistema, onde o usuário pode verificar todos os jogos que estão registrados no banco de dados. Exclui todos que utilizei a fins de teste para demonstrar a tela sem nenhum jogo.
![screencapture-localhost-curso-game-library-index-php-2025-04-10-18_18_39](https://github.com/user-attachments/assets/55c3d587-d005-4aac-aa56-e50e10d5fae8)

Ao clicar no link no canto superior direito da tela, acima do container principal, temos acesso a tela de cadastro de jogos, onde é possível incluir a capa, o nome e a descrição do jogo.
![screencapture-localhost-curso-game-library-addGame-php-2025-04-10-18_18_51](https://github.com/user-attachments/assets/fb08f206-70e1-4df0-b828-ac84b2f14cd2)

Após efetuar o cadastro do jogo, o usuário será retornado para a tela inicial, com o jogo que foi cadastrado no banco, a partir dai, ele terá 4 opções, sendo elas, visualizar, editar, excluir e atribuir uma nota ao jogo.
![screencapture-localhost-curso-curso-php-Projetos-game-library-index-php-2025-04-10-18_45_04](https://github.com/user-attachments/assets/f0eda1fa-7072-4482-ae20-2bfdeeee4a53)

Clicando em uma das estrelas, atribuimos uma nota para o jogo.
![screencapture-localhost-curso-curso-php-Projetos-game-library-2025-04-10-18_21_53](https://github.com/user-attachments/assets/b84d76f9-bd33-4677-ac4c-058bef692278)


Clicando no botão de visualizar(lupa), temos acesso a tela que trás todas as informações do jogo, em uma escala maior desta vez, com algumas mensagens pré-definidas de acordo com a nota do usuário.![screencapture-localhost-curso-curso-php-Projetos-game-library-gameview-php-2025-04-10-18_23_24](https://github.com/user-attachments/assets/c06c0608-1c39-4003-a318-1da5ffbf5bb7)

Clicando no botão de editar, somos levados ao formulário, que trás a opção de atualizarmos a foto, o título e a descrição do jogo.
![screencapture-localhost-curso-curso-php-Projetos-game-library-editgame-php-2025-04-10-18_23_48](https://github.com/user-attachments/assets/6aa339bc-3719-4a0f-878b-3b62ce64b79d)

E por último, clicando na opção com a lixeira, excluimos o jogo da base de dados.
![screencapture-localhost-curso-curso-php-Projetos-game-library-index-php-2025-04-10-18_25_10](https://github.com/user-attachments/assets/016dbecb-14cc-4d72-acee-bca8cbf2ac69)

Abaixo também estou disponibilizando prints do mesmo sistema na versão mobile:
![screencapture-localhost-curso-curso-php-Projetos-game-library-index-php-2025-04-10-18_46_38](https://github.com/user-attachments/assets/0cbb058f-df47-480d-b923-d7ba6d1f3e7b)
![screencapture-localhost-curso-curso-php-Projetos-game-library-addGame-php-2025-04-10-18_46_52](https://github.com/user-attachments/assets/12b79cf1-10ce-49e3-83f5-6be26fa26c71)
![screencapture-localhost-curso-curso-php-Projetos-game-library-index-php-2025-04-10-18_47_07](https://github.com/user-attachments/assets/4647aa15-616f-4520-91e6-a98ef934dc63)
![screencapture-localhost-curso-game-library-gameBox-gameview-php-2025-04-10-18_53_52](https://github.com/user-attachments/assets/a51716e3-e684-457e-82fb-47746432e2f7)
![screencapture-localhost-curso-game-library-gameBox-editgame-php-2025-04-10-18_54_01](https://github.com/user-attachments/assets/525cd456-4282-4114-88f3-cfba42eaa09a)
![screencapture-localhost-curso-game-library-gameBox-index-php-2025-04-10-18_54_11](https://github.com/user-attachments/assets/c079c7db-c26f-40d6-82d3-0f96ac05e9bc)


