<?php
//
// WARNING: Do not edit by hand, this file was generated by Crank:
// https://github.com/gocardless/crank
//

namespace GoCardlessPro\Integration;

class ModulusChecksTest extends IntegrationTestBase
{
    public function setUp()
    {
        $this->clientAndFixtureSetup('modulus_checks');
    }

    public function testResourceExists()
    {
        $obj = new \GoCardlessPro\Resources\ModulusCheck(null);
        $this->assertNotNull($obj);
    }
}