<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210629092927 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client ADD delivery_adress_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455C0E3B53E FOREIGN KEY (delivery_adress_id) REFERENCES delivery_adress (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C7440455C0E3B53E ON client (delivery_adress_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455C0E3B53E');
        $this->addSql('DROP INDEX UNIQ_C7440455C0E3B53E ON client');
        $this->addSql('ALTER TABLE client DROP delivery_adress_id');
    }
}
