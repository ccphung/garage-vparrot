<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231117132721 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE brand (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE  `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ad ADD brand_id INT NOT NULL, DROP brand');
        $this->addSql('ALTER TABLE ad ADD CONSTRAINT FK_77E0ED5844F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id)');
        $this->addSql('CREATE INDEX IDX_77E0ED5844F5D008 ON ad (brand_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ad DROP FOREIGN KEY FK_77E0ED5844F5D008');
        $this->addSql('DROP TABLE brand');
        $this->addSql('DROP INDEX IDX_77E0ED5844F5D008 ON ad');
        $this->addSql('ALTER TABLE ad ADD brand VARCHAR(255) NOT NULL, DROP brand_id');
    }
}
