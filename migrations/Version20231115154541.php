<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231115154541 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, ad_id INT DEFAULT NULL, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) NOT NULL, email VARCHAR(180) NOT NULL, phone_number VARCHAR(20) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', message LONGTEXT NOT NULL, subject VARCHAR(255) DEFAULT NULL, is_processed TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_4C62E6384F34D596 (ad_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE test (id INT AUTO_INCREMENT NOT NULL, test VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E6384F34D596 FOREIGN KEY (ad_id) REFERENCES ad (id)');
        $this->addSql('ALTER TABLE service_image DROP FOREIGN KEY FK_6C4FE9B8ED5CA9E6');
        $this->addSql('DROP TABLE service_image');
        $this->addSql('ALTER TABLE ad ADD updated_at1 DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at2 DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at3 DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD image_name1 VARCHAR(255) NOT NULL, ADD image_name2 VARCHAR(255) NOT NULL, ADD image_name3 VARCHAR(255) NOT NULL, ADD size1 INT NOT NULL, ADD size2 INT NOT NULL, ADD size3 INT NOT NULL, ADD image_rename1 VARCHAR(255) NOT NULL, ADD image_rename2 VARCHAR(255) NOT NULL, ADD image_rename3 VARCHAR(255) NOT NULL, ADD gearcase VARCHAR(255) NOT NULL, ADD door INT NOT NULL, ADD color VARCHAR(255) NOT NULL, ADD power INT NOT NULL, ADD energy VARCHAR(255) NOT NULL, ADD gps TINYINT(1) DEFAULT NULL, ADD air_conditioner TINYINT(1) DEFAULT NULL, ADD reversing_camera TINYINT(1) DEFAULT NULL, ADD android_auto TINYINT(1) DEFAULT NULL, ADD speed_regulator TINYINT(1) DEFAULT NULL, DROP picture1, DROP picture2, DROP picture3');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_77E0ED582B36786B ON ad (title)');
        $this->addSql('ALTER TABLE opening_hours CHANGE sat_pm_open sat_pm_open VARCHAR(5) DEFAULT NULL, CHANGE sat_pm_close sat_pm_close VARCHAR(5) DEFAULT NULL');
        $this->addSql('ALTER TABLE review ADD first_comment TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE service ADD title VARCHAR(255) NOT NULL, ADD content LONGTEXT NOT NULL, ADD image_name VARCHAR(255) NOT NULL, ADD size INT NOT NULL, ADD updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', DROP description, DROP image');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE service_image (id INT AUTO_INCREMENT NOT NULL, service_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, size INT NOT NULL, updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_6C4FE9B8ED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE service_image ADD CONSTRAINT FK_6C4FE9B8ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E6384F34D596');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE test');
        $this->addSql('ALTER TABLE opening_hours CHANGE sat_pm_open sat_pm_open VARCHAR(5) NOT NULL, CHANGE sat_pm_close sat_pm_close VARCHAR(5) NOT NULL');
        $this->addSql('DROP INDEX UNIQ_77E0ED582B36786B ON ad');
        $this->addSql('ALTER TABLE ad ADD picture1 VARCHAR(255) NOT NULL, ADD picture2 VARCHAR(255) NOT NULL, ADD picture3 VARCHAR(255) NOT NULL, DROP updated_at1, DROP updated_at2, DROP updated_at3, DROP image_name1, DROP image_name2, DROP image_name3, DROP size1, DROP size2, DROP size3, DROP image_rename1, DROP image_rename2, DROP image_rename3, DROP gearcase, DROP door, DROP color, DROP power, DROP energy, DROP gps, DROP air_conditioner, DROP reversing_camera, DROP android_auto, DROP speed_regulator');
        $this->addSql('ALTER TABLE review DROP first_comment');
        $this->addSql('ALTER TABLE service ADD description VARCHAR(255) NOT NULL, ADD image VARCHAR(255) NOT NULL, DROP title, DROP content, DROP image_name, DROP size, DROP updated_at');
    }
}
