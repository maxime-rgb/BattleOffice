<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210630100910 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398D614C7E7');
        $this->addSql('DROP INDEX UNIQ_F5299398D614C7E7 ON `order`');
        $this->addSql('ALTER TABLE `order` DROP price_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` ADD price_id INT NOT NULL');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398D614C7E7 FOREIGN KEY (price_id) REFERENCES product (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F5299398D614C7E7 ON `order` (price_id)');
    }
}
