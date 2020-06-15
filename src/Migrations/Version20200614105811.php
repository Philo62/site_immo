<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200614105811 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE property CHANGE last_name last_name VARCHAR(255) DEFAULT NULL, CHANGE birth_date birth_date VARCHAR(255) DEFAULT NULL, CHANGE birth_place birth_place VARCHAR(255) DEFAULT NULL, CHANGE second_name second_name VARCHAR(255) DEFAULT NULL, CHANGE second_last_name second_last_name VARCHAR(255) DEFAULT NULL, CHANGE second_birth_date second_birth_date VARCHAR(255) DEFAULT NULL, CHANGE second_birth_place second_birth_place VARCHAR(255) DEFAULT NULL, CHANGE married_date married_date VARCHAR(255) DEFAULT NULL, CHANGE tel_one tel_one INT DEFAULT NULL, CHANGE mail_one mail_one VARCHAR(255) DEFAULT NULL, CHANGE tel_two tel_two INT DEFAULT NULL, CHANGE mail_two mail_two VARCHAR(255) DEFAULT NULL, CHANGE address_property address_property VARCHAR(255) DEFAULT NULL, CHANGE country country VARCHAR(255) DEFAULT NULL, CHANGE cadastre cadastre VARCHAR(255) DEFAULT NULL, CHANGE notary notary VARCHAR(255) DEFAULT NULL, CHANGE text_pub text_pub VARCHAR(255) DEFAULT NULL, CHANGE dpe dpe VARCHAR(255) DEFAULT NULL, CHANGE ges ges VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE property CHANGE last_name last_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE birth_date birth_date VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE birth_place birth_place VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE second_name second_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE second_last_name second_last_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE second_birth_date second_birth_date VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE second_birth_place second_birth_place VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE married_date married_date VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tel_one tel_one INT NOT NULL, CHANGE mail_one mail_one VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE tel_two tel_two INT NOT NULL, CHANGE mail_two mail_two VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE address_property address_property VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE country country VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE cadastre cadastre VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE notary notary VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE text_pub text_pub VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE dpe dpe VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE ges ges VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
