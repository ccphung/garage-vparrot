<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231111120538 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ad ADD updated_at3 DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD image_name3 VARCHAR(255) NOT NULL, ADD size3 INT NOT NULL, ADD image_rename1 VARCHAR(255) NOT NULL, ADD image_rename2 VARCHAR(255) NOT NULL, ADD image_rename3 VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ad DROP updated_at3, DROP image_name3, DROP size3, DROP image_rename1, DROP image_rename2, DROP image_rename3');
    }
}
