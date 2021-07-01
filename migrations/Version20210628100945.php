<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210628100945 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, product_id INT NOT NULL, price_id INT NOT NULL, facturation_adress_id INT NOT NULL, delivery_adress_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_F529939819EB6921 (client_id), INDEX IDX_F52993984584665A (product_id), UNIQUE INDEX UNIQ_F5299398D614C7E7 (price_id), UNIQUE INDEX UNIQ_F5299398AF218402 (facturation_adress_id), UNIQUE INDEX UNIQ_F5299398C0E3B53E (delivery_adress_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F529939819EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F52993984584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398D614C7E7 FOREIGN KEY (price_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398AF218402 FOREIGN KEY (facturation_adress_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398C0E3B53E FOREIGN KEY (delivery_adress_id) REFERENCES delivery_adress (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE `order`');
    }
}
