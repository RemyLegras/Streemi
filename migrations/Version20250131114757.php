<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250131114757 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE movie DROP duration');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE movie ADD duration INT NOT NULL');
    }
}
