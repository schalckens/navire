<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220223083809 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE navire CHANGE ais_ship_type aisShipType INT NOT NULL');
        $this->addSql('ALTER TABLE navire ADD CONSTRAINT FK_EED1038A670474F FOREIGN KEY (aisShipType) REFERENCES ais_ship_type (id)');
        $this->addSql('CREATE INDEX IDX_EED1038A670474F ON navire (aisShipType)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE navire DROP FOREIGN KEY FK_EED1038A670474F');
        $this->addSql('DROP INDEX IDX_EED1038A670474F ON navire');
        $this->addSql('ALTER TABLE navire CHANGE aisshiptype ais_ship_type INT NOT NULL');
    }
}
