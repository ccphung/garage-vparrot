<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231116102405 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ad CHANGE image_rename1 image_rename1 VARCHAR(255) DEFAULT NULL, CHANGE image_rename2 image_rename2 VARCHAR(255) DEFAULT NULL, CHANGE image_rename3 image_rename3 VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ad CHANGE image_rename1 image_rename1 VARCHAR(255) NOT NULL, CHANGE image_rename2 image_rename2 VARCHAR(255) NOT NULL, CHANGE image_rename3 image_rename3 VARCHAR(255) NOT NULL');
    }
}
