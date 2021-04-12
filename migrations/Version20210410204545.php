<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210410204545 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE cours ADD categorie_id INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_FDCA8C9CBCF5E72D ON cours (categorie_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C5200282E');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CBCF5E72D');
        $this->addSql('DROP INDEX IDX_FDCA8C9CBCF5E72D ON cours');
        $this->addSql('ALTER TABLE cours DROP categorie_id');
    }
}
