<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200529170401 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE owner');
        $this->addSql('ALTER TABLE property ADD name VARCHAR(255) NOT NULL, ADD last_name VARCHAR(255) NOT NULL, ADD birth_date VARCHAR(255) NOT NULL, ADD birth_place VARCHAR(255) NOT NULL, ADD second_name VARCHAR(255) NOT NULL, ADD second_last_name VARCHAR(255) NOT NULL, ADD second_birth_date VARCHAR(255) NOT NULL, ADD second_birth_place VARCHAR(255) NOT NULL, ADD married_date VARCHAR(255) NOT NULL, ADD tel_one INT NOT NULL, ADD mail_one VARCHAR(255) NOT NULL, ADD tel_two INT NOT NULL, ADD mail_two VARCHAR(255) NOT NULL, ADD procurations TINYINT(1) DEFAULT NULL, ADD country VARCHAR(255) NOT NULL, ADD cadastre VARCHAR(255) NOT NULL, ADD notary VARCHAR(255) NOT NULL, ADD exclusivity TINYINT(1) DEFAULT NULL, ADD text_pub VARCHAR(255) NOT NULL, ADD dpe VARCHAR(255) NOT NULL, ADD ges VARCHAR(255) NOT NULL, CHANGE seller seller VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE product');
        $this->addSql('ALTER TABLE property DROP name, DROP last_name, DROP birth_date, DROP birth_place, DROP second_name, DROP second_last_name, DROP second_birth_date, DROP second_birth_place, DROP married_date, DROP tel_one, DROP mail_one, DROP tel_two, DROP mail_two, DROP procurations, DROP country, DROP cadastre, DROP notary, DROP exclusivity, DROP text_pub, DROP dpe, DROP ges, CHANGE seller seller INT NOT NULL');
    }
}
