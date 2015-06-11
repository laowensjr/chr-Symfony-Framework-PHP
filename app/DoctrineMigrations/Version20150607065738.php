<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150607065738 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE hair ADD featured_hair_pic VARCHAR(255) NOT NULL, ADD featured_hair_heading VARCHAR(255) NOT NULL, ADD featured_hair_summary VARCHAR(255) NOT NULL, ADD featured_hair_price NUMERIC(10, 2) NOT NULL, ADD featured_hair_vendor VARCHAR(255) NOT NULL, ADD featured_hair_position VARCHAR(255) NOT NULL, DROP featured_hair_pic1, DROP featured_hair_heading1, DROP featured_hair_summary1, DROP featured_hair_price1, DROP featured_hair_vendor1, DROP featured_hair_pic2, DROP featured_hair_heading2, DROP featured_hair_summary2, DROP featured_hair_price2, DROP featured_hair_vendor2, DROP featured_hair_pic3, DROP featured_hair_heading3, DROP featured_hair_summary3, DROP featured_hair_price3, DROP featured_hair_vendor3');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE Hair ADD featured_hair_pic1 VARCHAR(255) NOT NULL, ADD featured_hair_heading1 VARCHAR(255) NOT NULL, ADD featured_hair_summary1 VARCHAR(255) NOT NULL, ADD featured_hair_vendor1 VARCHAR(255) NOT NULL, ADD featured_hair_pic2 VARCHAR(255) NOT NULL, ADD featured_hair_heading2 VARCHAR(255) NOT NULL, ADD featured_hair_summary2 VARCHAR(255) NOT NULL, ADD featured_hair_price2 NUMERIC(10, 2) NOT NULL, ADD featured_hair_vendor2 VARCHAR(255) NOT NULL, ADD featured_hair_pic3 VARCHAR(255) NOT NULL, ADD featured_hair_heading3 VARCHAR(255) NOT NULL, ADD featured_hair_summary3 VARCHAR(255) NOT NULL, ADD featured_hair_price3 NUMERIC(10, 2) NOT NULL, ADD featured_hair_vendor3 VARCHAR(255) NOT NULL, DROP featured_hair_pic, DROP featured_hair_heading, DROP featured_hair_summary, DROP featured_hair_vendor, DROP featured_hair_position, CHANGE featured_hair_price featured_hair_price1 NUMERIC(10, 2) NOT NULL');
    }
}
