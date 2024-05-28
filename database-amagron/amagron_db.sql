CREATE DATABASE IF NOT EXISTS amagron_db;
USE amagron_db;

CREATE TABLE produtos(
id INT AUTO_INCREMENT PRIMARY KEY, 
nome VARCHAR(300) NOT NULL,        
preco DECIMAL(20, 2) NOT NULL,     
imagem TEXT NOT NULL,             
descricao TEXT 
)ENGINE = InnoDB;

CREATE TABLE usuario(
id_user INT AUTO_INCREMENT PRIMARY KEY, 
email VARCHAR(300) NOT NULL,        
nome VARCHAR(200) NOT NULL,     
senha TEXT NOT NULL             
)ENGINE = InnoDB;

INSERT INTO produtos (nome, preco, imagem, descricao) VALUES
('Trator John Deere estreito de 36cv', 120000.00, 'images_sql/p1.jpg', 'O trator 3036EN foi projetado para o segmento de culturas especiais e operações que necessitam de um trator com dimensões reduzidas. Podendo ser usado também em pequenas propriedades, chácaras, sítios e condomínios residenciais. Com um motor de 36cv, PTO econômica e raio de giro reduzido, este trator é a combinação perfeita de potência, economia e versatilidade'),
('Pulverizador Lateral 5 Litros Com Compressão Prévia Pl 005 Vonder Vonder', 70.10, 'images_sql/p2.jpg', 'Indicado para pulverização em geral, não utilizar produtos químicos como solventes, ácidos ou tintas. Pressão máxima de trabalho: 3 bar / 43,5 lbf/pol2. Pode ser utilizado álcool 70% (não em gel).Possui haste para pressurização, bico com jato regulável e válvula de alívio de pressão interna'),
('John Deere Série 7M 200', 800000.00, 'images_sql/p3.jpg', 'A nova família 7M de tratores traz importantes atualizações relacionadas a produtividade, servicibilidade e redução de custos na operação. Nova identidade visual, transmissão CommandQuad, pacotes de luzes LED e facilidade de operação são características da nova família. A família 7M é versátil, tecnólogica e robusta para garantir uma alta performance no campo.'),
('Arame Farpado Varjão Belgo® 400 m', 390.00, 'images_sql/p4.jpg', 'Arame Farpado Varjão Belgo de 400 metros é o arame macio, grosso e de farpas entrelaçadas, sendo um produto recomendado para a confecção de cercas de contenção em áreas rurais e urbanas'),
('Carreta Tracionada 4x4 Husqvarna TF545DE', 13000.50, 'images_sql/p5.jpg', 'A única Carreta tracionada do Mundo desenvolvida especificamente para motocultivadores a diesel a partir de 09cv como Tratorito (Branco), Toyama, Husqvarna, Kawashima e Buffalo. Transforme seu motocultivador em um transportador agrícola “4X4”'),
('Ráfia De Solo Polysolo Ground Cover Branca', 75.60, 'images_sql/p6.jpg', 'A Ráfia é feita em polietileno e polipropileno, indicada para uso interno e externo de estufas agrícolas e jardins, em diferentes tipos de cultivos como morango, tomate, alface, rúcula, hidropônico, flores, mudas e ambientes em geral'),
('Aspersor Canhão Setorial Agrícola Worker', 359.99, 'images_sql/p7.jpg', 'Nosso Aspersor Canhão Agrícola é um excelente Irrigador metálico com alcance de 16 a 25 metros que pode variar de acordo com a potencia da Bomba Utilizada com vazão de até 8 m³/h.Ideal para utilização em grandes áreas como lavouras, pastagens, campos de futebol e outros locais que exijam irrigação intensa.'),
('Suplemento mineral PECFORTE para bovinos ', 130.00, 'images_sql/p8.jpg', 'Suplemento Mineral Bovino PECFORTE é formulado para atender às necessidades nutricionais de gado de corte e leite. Rico em macro e microminerais essenciais, promove o crescimento saudável, aumenta a eficiência reprodutiva e melhora a saúde geral do rebanho. Indicado para todas as fases de desenvolvimento do gado, MaxNutri garante melhor aproveitamento dos nutrientes, contribuindo para a produtividade e rentabilidade da propriedade.'),
('Plantadeira De 10 E 11 Linhas', 1000000.00, 'images_sql/p9.jpg', 'Essa máquina proporciona um plantio de elevada qualidade, mesmo em condições adversas. Desse modo, possui uma estrutura especializada para encarar terrenos irregulares, com alto volume de palha. O trabalho conjunto de seus componentes entrega precisão na deposição de sementes e fertilizante, além de uma notável economia de combustível.'),
('BOI NELORE ', 10000.00, 'images_sql/p10.jpg', 'O Boi Nelore de Alta Qualidade é uma excelente escolha para quem busca robustez e eficiência na produção de carne. Originária da Índia, a raça Nelore se destaca pela sua adaptabilidade ao clima tropical, resistência a parasitas e capacidade de ganho de peso rápido. Estes bovinos são conhecidos pela sua pelagem branca, pele pigmentada e chifres curtos. Ideal para sistemas de criação a pasto, o Boi Nelore oferece um ótimo rendimento de carcaça e rebanho');
