<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class BuscaCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function buscarResultadosNaPaginaTest(AcceptanceTester $I)
    {
      $I = new AcceptanceTester($scenario);
      $I->amOnPage('web/html/mapa.html');
      $I->fillField('pesquisa', 'ifes');
      $I->click('Horários');
      $I->click('Ver Mais');
    }
}
