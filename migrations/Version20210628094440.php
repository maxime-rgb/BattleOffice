<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210628094440 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE delivery_adress (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) DEFAULT NULL, adress VARCHAR(255) DEFAULT NULL, other_adress VARCHAR(255) DEFAULT NULL, country VARCHAR(255) DEFAULT NULL, postal_code VARCHAR(255) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, phone INT DEFAULT NULL, INDEX IDX_42FD3E3019EB6921 (client_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE delivery_adress ADD CONSTRAINT FK_42FD3E3019EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE delivery_adress');
    }
}
