<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220224094601 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE porttypecompatible DROP FOREIGN KEY FK_2C02FFDB817ACD6B');
        $this->addSql('DROP INDEX IDX_2C02FFDB817ACD6B ON porttypecompatible');
        $this->addSql('ALTER TABLE porttypecompatible DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE porttypecompatible CHANGE idaidtype idaistype INT NOT NULL');
        $this->addSql('ALTER TABLE porttypecompatible ADD CONSTRAINT FK_2C02FFDB53BA86F9 FOREIGN KEY (idaistype) REFERENCES ais_ship_type (id)');
        $this->addSql('CREATE INDEX IDX_2C02FFDB53BA86F9 ON porttypecompatible (idaistype)');
        $this->addSql('ALTER TABLE porttypecompatible ADD PRIMARY KEY (idaistype, idport)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE porttypecompatible DROP FOREIGN KEY FK_2C02FFDB53BA86F9');
        $this->addSql('DROP INDEX IDX_2C02FFDB53BA86F9 ON porttypecompatible');
        $this->addSql('ALTER TABLE porttypecompatible DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE porttypecompatible CHANGE idaistype idaidtype INT NOT NULL');
        $this->addSql('ALTER TABLE porttypecompatible ADD CONSTRAINT FK_2C02FFDB817ACD6B FOREIGN KEY (idaidtype) REFERENCES ais_ship_type (id)');
        $this->addSql('CREATE INDEX IDX_2C02FFDB817ACD6B ON porttypecompatible (idaidtype)');
        $this->addSql('ALTER TABLE porttypecompatible ADD PRIMARY KEY (idaidtype, idport)');
    }
}
