<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231108175248 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE service ADD image_name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE service_image DROP INDEX UNIQ_6C4FE9B8ED5CA9E6, ADD INDEX IDX_6C4FE9B8ED5CA9E6 (service_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE service DROP image_name');
        $this->addSql('ALTER TABLE service_image DROP INDEX IDX_6C4FE9B8ED5CA9E6, ADD UNIQUE INDEX UNIQ_6C4FE9B8ED5CA9E6 (service_id)');
    }
}
