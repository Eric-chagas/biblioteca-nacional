	CREATE TABLE cadastros_livros (
  	  	id INT AUTO_INCREMENT PRIMARY KEY,
    		autor VARCHAR(255) NOT NULL,
    		editora VARCHAR(255) NOT NULL,
   		titulo_obra VARCHAR(255) NOT NULL,
    		data_cadastro DATETIME,
    		valor FLOAT
	);

    CREATE TABLE clientes(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        telefone VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        cpf VARCHAR,
        nascimento DATE,
        endereco VARCHAR(255),
        obs TEXT
    );

    CREATE TABLE emprestimos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT,
    cadastros_livro_id INT,
    data_emprestimo DATE NOT NULL,
    duracao int NOT NULL,
    FOREIGN KEY cliente_key (cliente_id) REFERENCES clientes(id),
    FOREIGN KEY cadastros_livro_key (cadastros_livro_id) REFERENCES cadastros_livros(id)
);
