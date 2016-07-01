<?php
class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login');
        $I->fillField(['name' => 'email'], 'akmal.fuady@outlook.com');
        $I->fillField(['name' => 'password'], 'password');
        $I->click("//button[@type='submit']");
        $I->wait(1);
        $I->amOnPage('/tasks');
        $I->wait(1);
    }
}
