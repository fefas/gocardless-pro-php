<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Services;

/**
  *  Payouts
  *
  * @method \GoCardless\Core\ListResponse list() list(array $options = array(), array $headers = array()) gets a non-paginated list of models given finder options.
  *
  *  Payouts represent transfers from GoCardless to a
  *  [creditor](https://developer.gocardless.com/pro/2014-11-03/#api-endpoints-creditors).
  *  Each payout contains the funds collected from one or many
  *  [payments](https://developer.gocardless.com/pro/2014-11-03/#api-endpoints-payments).
  *  Payouts are created automatically after a payment has been successfully
  *  collected.
  */
class Payout extends Base
{
  
  /**
    *  List payouts
    *
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/2014-11-03/#overview-cursor-pagination)
    *  list of your payouts.
    *
    *  Example URL: /payouts
    *
    *
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return \GoCardless\Core\ListResponse
    * @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function do_list($params = array(), $headers = array())
    {
        return $this->make_request('list', 'get', '/payouts', $params);
    }

  /**
    *  Get a single payout
    *
    *  Retrieves the details of a single payout.
    *
    *  Example URL: /payouts/:identity
    *
    *
    * @param string $identity Unique identifier, beginning with "PO"
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return Payout
    * @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function get($identity, $params = array(), $headers = array())
    {
        $path = $this->sub_url('/payouts/:identity', array(
            'identity' => $identity
        ));

        return $this->make_request('get', 'get', $path, $params, $headers);
    }



  /**
    *  List payouts
    *
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/2014-11-03/#overview-cursor-pagination)
    *  list of your payouts.
    *
    * Example URL: /payouts
    *
    * @param int $list_max The maximum number of records to return while paginating.
    * @param string[mixed] $params POST/URL parameters for the argument. Automatically wrapped.
    * @param string[string] $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return \GoCardless\Core\Paginator
    **/
    public function all($list_max, $params = array(), $headers = array())
    {
        return new \GoCardless\Core\Paginator($this, $list_max, $this->do_list($params), $params, $headers);
    }


   /**
    * Get the resource loading class.
    * Used internally to send http requests.
    *
    * @return string
    */
    protected function resourceClass()
    {
        return '\GoCardless\Resources\Payout';
    }

  /**
    *  Get the key the response object is enclosed in in JSON.
    *  Used internally to wrap and unwrap http requests.
    *
    *  @return string
    */
    protected function envelopeKey()
    {
        return 'payouts';
    }
}
