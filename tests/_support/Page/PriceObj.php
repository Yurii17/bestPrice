<?php

namespace Page;

class PriceObj
{
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */


    //================== QATAR =====================//


    public static $from = '#T7-from';
    public static $to = '#T7-to';
    public static $depart = '#T7-departure_1';
    public static $return = '#T7-arrival_1';
    public static $passengers = '#T7-passengers';
    public static $btnShowFlights = '#T7-search';

    public static $dropPassengers = '#bookingwidgt > div:nth-child(5) > div:nth-child(1) > div > div.autocomplete-input-holder > ul > li > div.type.adults > div.amount_psg > div';
    public static $selectPassengers = '#bookingwidgt > div:nth-child(5) > div:nth-child(1) > div > div.autocomplete-input-holder > ul > li > div.type.adults > div.amount_psg > div > div > ul > li:nth-child(2) > span';

    public static $elementWait = '#flightDetailForm_outbound\3a fly-result_OutBound > div.w-r-h';
    public static $grabPrice = '#flightDetailForm_outbound\3a flightRepeatoutbound\3a 3\3a cabinFareRepeat\3a 0\3a _fare > span.priceDetails > span.number';

    public static $cookies = '#cookie-close';


    //================== TURISTO ==================//


    public static $urlTuristo = 'https://turisto.com/ru/';
    public static $urlTuristo2 = 'https://turisto.com/ru/search?adults=2&arr=ID-BA_DPS&children=0&dep=UA-30_IEV&depDate=2019-10-04&infants=0&retDate=2019-10-23&tripType=roundtrip';
    public static $fromTuristo = '#__next > main > form > div.search-fieldset > div:nth-child(1) > input';
    public static $toTuristo = '#__next > main > form > div.search-fieldset > div:nth-child(3) > input';

    public static $departPickerOpen = '#__next > main > form > div.search-fieldset > div.dates-wrapper > div.departure-date > div > div';
    public static $monthDepartPickerSelect = '#__next > main > form > div.search-fieldset > div.dates-wrapper > div.departure-date > div > div > div.overlay > div.DayPicker > div > div.DayPicker-NavBar > span.DayPicker-NavButton.DayPicker-NavButton--next';
    public static $departPickerSelect = '#__next > main > form > div.search-fieldset > div.dates-wrapper > div.departure-date > div > div > div.overlay > div.DayPicker > div > div.DayPicker-Months > div > div.DayPicker-Body > div:nth-child(1) > div:nth-child(6)';
    public static $returnPickerOpen = '#__next > main > form > div.search-fieldset > div.dates-wrapper > div.return-date > div > div';
    public static $returnPickerSelect = '#__next > main > form > div.search-fieldset > div.dates-wrapper > div.return-date > div > div > div.overlay > div.DayPicker > div > div.DayPicker-Months > div > div.DayPicker-Body > div:nth-child(4) > div:nth-child(3)';

    public static $openPassengerTuristo = '#__next > main > form > div.search-filters > div:nth-child(2)';
    public static $selectPassengersTuristo = '#__next > main > form > div.search-filters > div:nth-child(2) > div:nth-child(2) > div > ul > li:nth-child(1) > button:nth-child(4)';

    public static $searchBtnTuristo = '#__next > main > form > div.search-fieldset > button.search-submit._flex-center-both';
    public static $elementWaitTuristo = '#__next > main > div.search-results-wrapper > div > div.search-results-content';
    public static $grabPriceTuristo = '#__next > main > div.search-results-wrapper > div > div.search-results-content > div.search-sorter-bar > div.sorter.-active > div.row._flex-between > p.cost';


    //================== TICKETS ==================//


    public static $urlTickets = 'https://avia.tickets.ua/';
    public static $urlTickets2 = 'https://avia.tickets.ua/m/preloader/IEVDPS03.10.20190%7C23.10.20190/2%7C0%7C0/A?refid=585';
    public static $fromTickets = '#from_name';
    public static $toTickets = '#to_name';

    public static $departTickets = '#departure_date';
    public static $monthDepartTickets = '#ui-datepicker-div > div.ui-datepicker-group.ui-datepicker-group-last > div > a';
    public static $dayDepartTickets = '#ui-datepicker-div > div.ui-datepicker-group.ui-datepicker-group-first > table > tbody > tr:nth-child(1) > td.ui-datepicker-week-end.day_td.date_1570222800000 > a';
    public static $dayReturnTickets = '#ui-datepicker-div > div.ui-datepicker-group.ui-datepicker-group-first > table > tbody > tr:nth-child(4) > td.day_td.date_1571778000000 > a';

    public static $passengersOpenTickets = 'input.form-input.preson_quant.js-persons-select';
    public static $passengersSelectTickets = 'span.plus';

    public static $searchBtnTickets = 'input.search_button.btn.start-search-btn';
    public static $elementWaitTickets = '#offers_table';
    public static $grabPriceTickets = 'strong.UAH';










    public static function route($param)
    {
        return static::$urlTuristo.$param;
    }
}
