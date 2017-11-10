<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('See that landing page is up');
$I->amOnPage('/index.php');
$I->see('Our CRM');