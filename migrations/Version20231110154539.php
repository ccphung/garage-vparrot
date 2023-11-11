<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231110154539 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ad ADD updated_at2 DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD image_name1 VARCHAR(255) NOT NULL, ADD image_name2 VARCHAR(255) NOT NULL, ADD size2 INT NOT NULL, DROP picture1, DROP picture2, DROP picture3, DROP image_name, CHANGE updated_at updated_at1 DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE size size1 INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ad ADD picture1 VARCHAR(255) NOT NULL, ADD picture2 VARCHAR(255) NOT NULL, ADD picture3 VARCHAR(255) NOT NULL, ADD updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD image_name VARCHAR(255) NOT NULL, ADD size INT NOT NULL, DROP updated_at1, DROP updated_at2, DROP image_name1, DROP size1, DROP image_name2, DROP size2');
    }
}
