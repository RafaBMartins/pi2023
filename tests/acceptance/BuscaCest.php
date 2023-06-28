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
        $I->amOnPage('/pi2023/web/html/index.html');
        $I->fillField('email-input', 'rafaelmartinscouto@gmail.com');
        $I->fillField('senha', 'Gabriel123gabriel!');
        $I->click('ENTRAR');
        $I->seeCurrentURLEquals('/web/html/home.html');
    }
}
