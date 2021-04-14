<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210414113703 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours CHANGE titre titre VARCHAR(1024) DEFAULT NULL, CHANGE fichier fichier VARCHAR(1024) DEFAULT NULL, CHANGE formation_id formation_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours CHANGE titre titre VARCHAR(1024) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE fichier fichier VARCHAR(1024) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE formation_id formation_id INT NOT NULL');
    }
}
