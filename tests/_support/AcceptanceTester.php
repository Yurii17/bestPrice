<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
 */
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    /**
     * @throws Exception
     */
    public function savePriceDataQatar($beforePrice, $currentPrice, $param = null)
    {
        $file = 'tests/prices/QatarPrice.txt';

        $before = $beforePrice;
        $current = $currentPrice;

        file_put_contents($file, ['###=======Qatar_before' . ' = '. $before . ' =======### ', '###=======Qatar_after' . ' = '. $current . ' =======### '], $param);

        $result = trim(file_get_contents('tests/prices/QatarPrice.js'));
        $result = ltrim($result, 'var QatarPrice = \'');
        $result = rtrim($result, '\'');
        $result = json_decode($result, true);
        $result[] = ['price' => $currentPrice, 'date' => time()];
        $result = json_encode($result);
        file_put_contents('tests/prices/QatarPrice.js', 'var QatarPrice = \'' . $result . '\'');

    }

    /**
     * @throws Exception
     */
    public function savePriceDataTuristo($beforePrice, $currentPrice, $param = null)
    {
        $file = 'tests/prices/TuristoPrice.txt';

        $before = $beforePrice;
        $current = $currentPrice;

        file_put_contents($file, ['###=======Turisto_before' . ' = '. $before . ' =======### ', '###=======Turisto_after' . ' = '. $current . ' =======### '], $param);

        $result = trim(file_get_contents('tests/prices/TuristoPrice.js'));
        $result = ltrim($result, 'var TuristoPrice = \'');
        $result = rtrim($result, '\'');
        $result = json_decode($result, true);
        $result[] = ['price' => $currentPrice, 'date' => time()];
        $result = json_encode($result);
        file_put_contents('tests/prices/TuristoPrice.js', 'var TuristoPrice = \'' . $result . '\'');

    }

    /**
     * @throws Exception
     */
    public function savePriceDataTickets($beforePrice, $currentPrice, $param = null)
    {
        $file = 'tests/prices/TicketsPrice.txt';

        $before = $beforePrice;
        $current = $currentPrice;

        file_put_contents($file, ['###=======Tickets_before' . ' = '. $before . ' =======### ', '###=======Tickets_after' . ' = '. $current . ' =======### '], $param);

        /*var_dump(exec('pwd'));*/
        $result = trim(file_get_contents('tests/prices/TicketsPrice.js'));
        $result = ltrim($result, 'var TicketsPrice = \'');
        $result = rtrim($result, '\'');
        $result = json_decode($result, true);
        $result[] = ['price' => $currentPrice, 'date' => time()];
        $result = json_encode($result);
        file_put_contents('tests/prices/TicketsPrice.js', 'var TicketsPrice = \'' . $result . '\'');

    }
}
