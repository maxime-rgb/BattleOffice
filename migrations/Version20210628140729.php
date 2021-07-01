<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210628140729 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE delivery_adress DROP FOREIGN KEY FK_42FD3E3019EB6921');
        $this->addSql('DROP INDEX IDX_42FD3E3019EB6921 ON delivery_adress');
        $this->addSql('ALTER TABLE delivery_adress DROP client_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE delivery_adress ADD client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE delivery_adress ADD CONSTRAINT FK_42FD3E3019EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_42FD3E3019EB6921 ON delivery_adress (client_id)');
    }
}
