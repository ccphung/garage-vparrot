<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231121175454 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ad (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, brand_id INT NOT NULL, title VARCHAR(255) NOT NULL, registration_year DATE NOT NULL, kilometers INT NOT NULL, price INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at1 DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at2 DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at3 DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name1 VARCHAR(255) NOT NULL, image_name2 VARCHAR(255) NOT NULL, image_name3 VARCHAR(255) NOT NULL, size1 INT NOT NULL, size2 INT NOT NULL, size3 INT NOT NULL, image_rename1 VARCHAR(255) DEFAULT NULL, image_rename2 VARCHAR(255) DEFAULT NULL, image_rename3 VARCHAR(255) DEFAULT NULL, gearcase VARCHAR(255) NOT NULL, door INT NOT NULL, color VARCHAR(255) NOT NULL, power INT NOT NULL, energy VARCHAR(255) NOT NULL, gps TINYINT(1) DEFAULT NULL, air_conditioner TINYINT(1) DEFAULT NULL, reversing_camera TINYINT(1) DEFAULT NULL, android_auto TINYINT(1) DEFAULT NULL, speed_regulator TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_77E0ED582B36786B (title), INDEX IDX_77E0ED58A76ED395 (user_id), INDEX IDX_77E0ED5844F5D008 (brand_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE announcement (id INT AUTO_INCREMENT NOT NULL, text LONGTEXT NOT NULL, is_published TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brand (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_1C52F958A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, ad_id INT DEFAULT NULL, user_id INT DEFAULT NULL, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) NOT NULL, email VARCHAR(180) NOT NULL, phone_number VARCHAR(20) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', message LONGTEXT NOT NULL, subject VARCHAR(255) DEFAULT NULL, is_processed TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_4C62E6384F34D596 (ad_id), INDEX IDX_4C62E638A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE opening_hours (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, mon_am_open VARCHAR(5) NOT NULL, mon_am_close VARCHAR(5) NOT NULL, mon_pm_open VARCHAR(5) NOT NULL, mon_pm_close VARCHAR(5) NOT NULL, tue_am_open VARCHAR(5) NOT NULL, tue_am_close VARCHAR(5) NOT NULL, tue_pm_open VARCHAR(5) NOT NULL, tue_pm_close VARCHAR(5) NOT NULL, wed_am_open VARCHAR(5) NOT NULL, wed_am_close VARCHAR(5) NOT NULL, wed_pm_open VARCHAR(5) NOT NULL, wed_pm_close VARCHAR(5) NOT NULL, thr_am_open VARCHAR(5) NOT NULL, thr_am_close VARCHAR(5) NOT NULL, thr_pm_open VARCHAR(5) NOT NULL, thr_pm_close VARCHAR(5) NOT NULL, fri_am_open VARCHAR(5) NOT NULL, fri_am_close VARCHAR(5) NOT NULL, fri_pm_open VARCHAR(5) NOT NULL, fri_pm_close VARCHAR(5) NOT NULL, sat_am_open VARCHAR(5) NOT NULL, sat_am_close VARCHAR(5) NOT NULL, sat_pm_open VARCHAR(5) DEFAULT NULL, sat_pm_close VARCHAR(5) DEFAULT NULL, sun VARCHAR(10) NOT NULL, UNIQUE INDEX UNIQ_2640C10BA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE review (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', rating INT NOT NULL, comment LONGTEXT NOT NULL, is_approved TINYINT(1) NOT NULL, first_comment TINYINT(1) DEFAULT NULL, INDEX IDX_794381C6A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, price INT NOT NULL, content LONGTEXT NOT NULL, image_name VARCHAR(255) NOT NULL, size INT NOT NULL, updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_E19D9AD2A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, opening_hours_id INT DEFAULT NULL, announcement_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D649CE298D68 (opening_hours_id), UNIQUE INDEX UNIQ_8D93D649913AEA17 (announcement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ad ADD CONSTRAINT FK_77E0ED58A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ad ADD CONSTRAINT FK_77E0ED5844F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id)');
        $this->addSql('ALTER TABLE brand ADD CONSTRAINT FK_1C52F958A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E6384F34D596 FOREIGN KEY (ad_id) REFERENCES ad (id)');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE opening_hours ADD CONSTRAINT FK_2640C10BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649CE298D68 FOREIGN KEY (opening_hours_id) REFERENCES opening_hours (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649913AEA17 FOREIGN KEY (announcement_id) REFERENCES announcement (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ad DROP FOREIGN KEY FK_77E0ED58A76ED395');
        $this->addSql('ALTER TABLE ad DROP FOREIGN KEY FK_77E0ED5844F5D008');
        $this->addSql('ALTER TABLE brand DROP FOREIGN KEY FK_1C52F958A76ED395');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E6384F34D596');
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638A76ED395');
        $this->addSql('ALTER TABLE opening_hours DROP FOREIGN KEY FK_2640C10BA76ED395');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6A76ED395');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2A76ED395');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649CE298D68');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649913AEA17');
        $this->addSql('DROP TABLE ad');
        $this->addSql('DROP TABLE announcement');
        $this->addSql('DROP TABLE brand');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE opening_hours');
        $this->addSql('DROP TABLE review');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
