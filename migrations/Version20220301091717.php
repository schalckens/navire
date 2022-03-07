<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220301091717 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
//        $this->addSql('ALTER TABLE aisshiptype ADD aisshiptype INT NOT NULL');
//        $this->addSql('ALTER TABLE porttypecompatible ADD CONSTRAINT FK_2C02FFDB53BA86F9 FOREIGN KEY (idaistype) REFERENCES aisshiptype (id)');
//        $this->addSql('ALTER TABLE navire ADD CONSTRAINT FK_EED1038FF348A27 FOREIGN KEY (aisshiptype) REFERENCES aisshiptype (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE aisshiptype DROP aishiptype');
        $this->addSql('ALTER TABLE navire DROP FOREIGN KEY FK_EED1038FF348A27');
        $this->addSql('ALTER TABLE porttypecompatible DROP FOREIGN KEY FK_2C02FFDB53BA86F9');
    }
}
