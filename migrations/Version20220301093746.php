<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220301093746 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
//        $this->addSql('ALTER TABLE navire ADD idAisShipType INT NOT NULL');
//        $this->addSql('ALTER TABLE navire ADD CONSTRAINT FK_EED1038E62DB837 FOREIGN KEY (idAisShipType) REFERENCES aisshiptype (id)');
//        $this->addSql('CREATE INDEX IDX_EED1038E62DB837 ON navire (idAisShipType)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE navire DROP FOREIGN KEY FK_EED1038E62DB837');
        $this->addSql('DROP INDEX IDX_EED1038E62DB837 ON navire');
        $this->addSql('ALTER TABLE navire DROP idAisShipType');
    }
}
