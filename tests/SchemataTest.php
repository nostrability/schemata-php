<?php
use PHPUnit\Framework\TestCase;
use Nostrability\Schemata\Schemata;
require_once __DIR__ . '/../src/Schemata.php';

class SchemataTest extends TestCase {
    public function testGetKind1(): void { $this->assertNotNull(Schemata::get('kind1Schema')); }
    public function testGetNote(): void { $this->assertNotNull(Schemata::get('noteSchema')); }
    public function testGetNonexistent(): void { $this->assertNull(Schemata::get('nonexistent')); }
    public function testKeysCount(): void { $this->assertGreaterThan(100, count(Schemata::keys())); }
}
