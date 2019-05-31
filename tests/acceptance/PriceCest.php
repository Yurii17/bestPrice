<?php

use Page\PriceObj as Page;

class PriceCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    /**
     * @param AcceptanceTester $I
     * @throws Exception
     */
    public function grabPriceQatar(AcceptanceTester $I, $currentPrice)
    {
        $I->wait(5);
        $I->fillField(page::$from, 'Kyiv (KBP)');
        $I->fillField(page::$to, 'Bali/Denpasar (DPS)');
        $I->fillField(page::$depart, '05 Oct 2019');
        $I->fillField(page::$return, '23 Oct 2019');

        $I->click(page::$depart);
        $I->click(page::$return);
        $I->click(page::$cookies);
        $I->click(page::$passengers);
        $I->wait(2);
        $I->click(page::$dropPassengers);
        $I->click(page::$selectPassengers);

        $I->wait(3);
        $I->click(page::$btnShowFlights);

        $I->waitForElementVisible(page::$elementWait, 120);

        $beforePrice = '20540';
        $currentPrice = $I->grabTextFrom(page::$grabPrice);

        if ($beforePrice >= $currentPrice) {
            $I->savePriceDataQatar($beforePrice, $currentPrice, FILE_APPEND);
        } elseif ($beforePrice <= $currentPrice) {
            $I->savePriceDataQatar($beforePrice, $currentPrice);
        }

        $I->assertSame($beforePrice, $currentPrice);
        $I->wait(3);
    }

    /**
     * @param AcceptanceTester $I
     * @throws Exception
     */
    public function grabPriceTuristo(AcceptanceTester $I)
    {
        $I->amOnUrl(page::$urlTuristo2);
//        $I->wait(3);
//        $I->fillField(page::$fromTuristo, 'Аэропорт Львов имени Даниила Галицкого');
//        $I->click(page::$openPassengerTuristo);
//        $I->click(page::$selectPassengersTuristo);
//        $I->fillField(page::$toTuristo, 'Denpasar');
//
//        $I->click(page::$departPickerOpen);
//        $I->wait(2);
//        $I->click(page::$monthDepartPickerSelect);
//        $I->click(page::$monthDepartPickerSelect);
//        $I->click(page::$monthDepartPickerSelect);
//        $I->click(page::$monthDepartPickerSelect);
//        $I->click(page::$monthDepartPickerSelect);
//        $I->click(page::$monthDepartPickerSelect);
//
//        $I->wait(1);
//        $I->click(page::$departPickerSelect);
//        $I->click(page::$returnPickerSelect);
//        $I->wait(2);
//        $I->click(page::$searchBtnTuristo);

        $I->waitForElementVisible(page::$elementWaitTuristo, 60);

        $beforePrice = '35 500 грн.';
        $currentPrice = $I->grabTextFrom(page::$grabPriceTuristo);

        if ($beforePrice >= $currentPrice) {
            $I->savePriceDataTuristo($beforePrice, $currentPrice, FILE_APPEND);
        } elseif ($beforePrice <= $currentPrice) {
            $I->savePriceDataTuristo($beforePrice, $currentPrice);
        }

        $I->assertSame($beforePrice, $currentPrice);
    }

    /**
     * @param AcceptanceTester $I
     * @throws Exception
     */
    public function grabPriceTickets(AcceptanceTester $I)
    {
//        $I->amOnUrl(page::$urlTickets);
        $I->amOnUrl(page::$urlTickets2);
//        $I->wait(2);
//        $I->fillField(page::$fromTickets, 'Львов');
//        $I->wait(2);
//        $I->fillField(page::$toTickets, 'Denpas');
//        $I->wait(2);
//        $I->click(page::$toTickets);
//
//        $I->click(page::$departTickets);
//        $I->click(page::$monthDepartTickets);
//        $I->click(page::$monthDepartTickets);
//        $I->click(page::$monthDepartTickets);
//        $I->click(page::$monthDepartTickets);
//        $I->click(page::$monthDepartTickets);
//        $I->click(page::$monthDepartTickets);
///ci
//        $I->click(page::$dayDepartTickets);
//        $I->click(page::$dayReturnTickets);
//
//        $I->click(page::$passengersOpenTickets);
//        $I->wait(2);
//        $I->click(page::$passengersSelectTickets);
//
//        $I->click(page::$searchBtnTickets);
        $I->waitForElementVisible(page::$elementWaitTickets, 120);

        $beforePrice = '33 700 UAH';
        $currentPrice = $I->grabTextFrom(page::$grabPriceTickets);

        if ($beforePrice >= $currentPrice) {
            $I->savePriceDataTickets($beforePrice, $currentPrice, FILE_APPEND);
        } elseif ($beforePrice <= $currentPrice) {
            $I->savePriceDataTickets($beforePrice, $currentPrice);
        }

        $I->assertSame($beforePrice, $currentPrice);
    }
}
