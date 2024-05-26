CREATE TABLE IF NOT EXISTS cliente (
    cliente_cpf VARCHAR(11) NOT NULL PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    telefone VARCHAR(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insere alguns dados de exemplo na tabela
INSERT INTO cliente (cliente_cpf, nome, endereco, telefone) VALUES
('12345678901', 'Ana Silva', 'Rua A, 123', '11999999999'),
('23456789012', 'Maria Oliveira', 'Rua B, 456', '11888888888'),
('34567890123', 'Carlos Pereira', 'Rua C, 789', '11777777777');