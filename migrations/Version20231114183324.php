<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231114183324 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ad ADD gps TINYINT(1) DEFAULT NULL, ADD air_conditioner TINYINT(1) DEFAULT NULL, ADD reversing_camera TINYINT(1) DEFAULT NULL, ADD android_auto TINYINT(1) DEFAULT NULL, ADD speed_regulator TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ad DROP gps, DROP air_conditioner, DROP reversing_camera, DROP android_auto, DROP speed_regulator');
    }
}
