<?php

use CodeIgniter\Test\CIUnitTestCase;

final class SearchApiTest extends CIUnitTestCase
{
    public function testSearchApiReturnsJsonResults(): void
    {
        $result = $this->get('/api/search?q=bmi');

        $result->assertStatus(200);
        $result->assertHeader('Content-Type', 'application/json; charset=UTF-8');
        $this->assertStringContainsString('BMI Calculator', (string) $result->response()->getBody());
    }
}
