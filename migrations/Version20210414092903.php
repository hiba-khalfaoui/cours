<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210414092903 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE aide CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE categorie MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE categorie DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE categorie CHANGE id id_catégorie INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE categorie ADD PRIMARY KEY (id_catégorie)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE aide CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE categorie MODIFY id_catégorie INT NOT NULL');
        $this->addSql('ALTER TABLE categorie DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE categorie CHANGE id_cat??gorie id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE categorie ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9CBCF5E72D');
    }
}
