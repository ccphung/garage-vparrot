<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231106163807 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE opening_hours (id INT AUTO_INCREMENT NOT NULL, mon_am_open VARCHAR(5) NOT NULL, mon_am_close VARCHAR(5) NOT NULL, mon_pm_open VARCHAR(5) NOT NULL, mon_pm_close VARCHAR(5) NOT NULL, tue_am_open VARCHAR(5) NOT NULL, tue_am_close VARCHAR(5) NOT NULL, tue_pm_open VARCHAR(5) NOT NULL, tue_pm_close VARCHAR(5) NOT NULL, wed_am_open VARCHAR(5) NOT NULL, wed_am_close VARCHAR(5) NOT NULL, wed_pm_open VARCHAR(5) NOT NULL, wed_pm_close VARCHAR(5) NOT NULL, thr_am_open VARCHAR(5) NOT NULL, thr_am_close VARCHAR(5) NOT NULL, thr_pm_open VARCHAR(5) NOT NULL, thr_pm_close VARCHAR(5) NOT NULL, fri_am_open VARCHAR(5) NOT NULL, fri_am_close VARCHAR(5) NOT NULL, fri_pm_open VARCHAR(5) NOT NULL, fri_pm_close VARCHAR(5) NOT NULL, sat_am_open VARCHAR(5) NOT NULL, sat_am_close VARCHAR(5) NOT NULL, sat_pm_open VARCHAR(5) NOT NULL, sat_pm_close VARCHAR(5) NOT NULL, sun VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE opening_hours');
    }
}
