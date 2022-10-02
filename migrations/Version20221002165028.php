<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221002165028 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_8ADC54D512469DE2');
        $this->addSql('DROP INDEX FK_8ADC54D512469DE2 ON question');
        $this->addSql('ALTER TABLE question CHANGE question question VARCHAR(1200) NOT NULL');
        $this->addSql('ALTER TABLE reponse ADD id_question INT NOT NULL');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC71E27F6BF FOREIGN KEY (id_question) REFERENCES question (id)');
        $this->addSql('CREATE INDEX IDX_5FB6DEC71E27F6BF ON reponse (id_question)');
        $this->addSql('ALTER TABLE user CHANGE date_inscription date_inscription VARCHAR(180) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user CHANGE date_inscription date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC71E27F6BF');
        $this->addSql('DROP INDEX IDX_5FB6DEC71E27F6BF ON reponse');
        $this->addSql('ALTER TABLE reponse DROP id_question');
        $this->addSql('ALTER TABLE question CHANGE question question VARCHAR(800) NOT NULL');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_8ADC54D512469DE2 FOREIGN KEY (id_categorie) REFERENCES categorie (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX FK_8ADC54D512469DE2 ON question (id_categorie)');
    }
}
