<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('See the users name in the toolbar');

$I->amOnPage('/?id=42');
$I->see('Zaphod');


