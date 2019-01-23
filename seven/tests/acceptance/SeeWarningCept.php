<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Click the name button and see a warning');

$I->amOnPage('/?id=100');
$I->click('Zaphod');
$I->see('WHY DID YOU CLICK THAT????');
