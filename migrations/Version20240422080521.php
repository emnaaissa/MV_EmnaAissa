<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240422080521 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vinyl_mix ADD no VARCHAR(255) NOT NULL, ADD descriptionn LONGTEXT DEFAULT NULL, ADD track_countt INT NOT NULL, ADD genree VARCHAR(255) NOT NULL, ADD created_att VARCHAR(255) NOT NULL, ADD votes INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vinyl_mix DROP no, DROP descriptionn, DROP track_countt, DROP genree, DROP created_att, DROP votes');
    }
}
