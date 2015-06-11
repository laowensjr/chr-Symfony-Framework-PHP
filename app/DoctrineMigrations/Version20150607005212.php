<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150607005212 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Hair (id INT AUTO_INCREMENT NOT NULL, hairtype VARCHAR(255) NOT NULL, inch INT NOT NULL, style VARCHAR(255) NOT NULL, page_summary VARCHAR(255) NOT NULL, featured_hair_pic1 VARCHAR(255) NOT NULL, featured_hair_heading1 VARCHAR(255) NOT NULL, featured_hair_summary1 VARCHAR(255) NOT NULL, featured_hair_price1 NUMERIC(10, 2) NOT NULL, featured_hair_vendor1 VARCHAR(255) NOT NULL, featured_hair_pic2 VARCHAR(255) NOT NULL, featured_hair_heading2 VARCHAR(255) NOT NULL, featured_hair_summary2 VARCHAR(255) NOT NULL, featured_hair_price2 NUMERIC(10, 2) NOT NULL, featured_hair_vendor2 VARCHAR(255) NOT NULL, featured_hair_pic3 VARCHAR(255) NOT NULL, featured_hair_heading3 VARCHAR(255) NOT NULL, featured_hair_summary3 VARCHAR(255) NOT NULL, featured_hair_price3 NUMERIC(10, 2) NOT NULL, featured_hair_vendor3 VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE Hair');
    }
}
