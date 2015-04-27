<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Services;

/**
  *  Customer Bank Accounts
  *
  * @method \GoCardless\Core\ListResponse list() list(array $options = array(), array $headers = array()) gets a non-paginated list of models given finder options.
  *
  *  Customer Bank Accounts hold the bank details of a
  *  [customer](https://developer.gocardless.com/pro/2014-11-03/#api-endpoints-customers).
  *  They always belong to a
  *  [customer](https://developer.gocardless.com/pro/2014-11-03/#api-endpoints-customers),
  *  and may be linked to several Direct Debit
  *  [mandates](https://developer.gocardless.com/pro/2014-11-03/#api-endpoints-mandates).

  *   *  
  *  Note that customer bank accounts must be unique, and so you will
  *  encounter a `bank_account_exists` error if you try to create a duplicate
  *  bank account. You may wish to handle this by updating the existing record
  *  instead, the ID of which will be provided as links[customer_bank_account]
  *  in the error response.
  */
class CustomerBankAccount extends Base
{
  
  /**
    *  Create a customer bank account
    *
    *  Creates a new bank account object associated to a customer id.
    *  
  
    *   *  There are three different ways to supply bank account details:
    * 
    *  
    *  - [Local
    *  details](https://developer.gocardless.com/pro/2014-11-03/#ui-compliance-local-bank-details)

    *     *  
    *  - IBAN
    *  
    *  - [Customer Bank Account
    *  Tokens](https://developer.gocardless.com/pro/2014-11-03/#js-flow-create-a-customer-bank-account-token)

    *     *  
    *  For more information on the different fields required in
    *  each country, see [local bank
    *  details](https://developer.gocardless.com/pro/2014-11-03/#ui-compliance-local-bank-details).
    *
    *  Example URL: /customer_bank_accounts
    *
    *
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return CustomerBankAccount
    * @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function create($params = array(), $headers = array())
    {
        return $this->make_request('create', 'post', '/customer_bank_accounts', $params);
    }

  /**
    *  List customer bank accounts
    *
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/2014-11-03/#overview-cursor-pagination)
    *  list of your bank accounts.
    *
    *  Example URL: /customer_bank_accounts
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
        return $this->make_request('list', 'get', '/customer_bank_accounts', $params);
    }

  /**
    *  Get a single customer bank account
    *
    *  Retrieves the details of an existing bank account.
    *
    *  Example URL: /customer_bank_accounts/:identity
    *
    *
    * @param string $identity Unique identifier, beginning with "BA"
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return CustomerBankAccount
    * @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function get($identity, $params = array(), $headers = array())
    {
        $path = $this->sub_url('/customer_bank_accounts/:identity', array(
            'identity' => $identity
        ));

        return $this->make_request('get', 'get', $path, $params, $headers);
    }

  /**
    *  Update a customer bank account
    *
    *  Updates a customer bank account object. Only the metadata parameter is
    *  allowed.
    *
    *  Example URL: /customer_bank_accounts/:identity
    *
    *
    * @param string $identity Unique identifier, beginning with "BA"
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return CustomerBankAccount
    * @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function update($identity, $params = array(), $headers = array())
    {
        $path = $this->sub_url('/customer_bank_accounts/:identity', array(
            'identity' => $identity
        ));

        return $this->make_request('update', 'put', $path, $params, $headers);
    }

  /**
    *  Disable a customer bank account
    *
    *  Immediately cancels all associated mandates and cancellable payments.
   
    *  *  
    *  This will return a `disable_failed` error if the bank account
    *  has already been disabled.
    *  
    *  A disabled bank account can be
    *  re-enabled by creating a new bank account resource with the same details.
    *
    *  Example URL: /customer_bank_accounts/:identity/actions/disable
    *
    *
    * @param string $identity Unique identifier, beginning with "BA"
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return CustomerBankAccount
    * @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function disable($identity, $params = array(), $headers = array())
    {
        $path = $this->sub_url('/customer_bank_accounts/:identity/actions/disable', array(
            'identity' => $identity
        ));

        return $this->make_request('disable', 'post', $path, $params, $headers);
    }



  /**
    *  List customer bank accounts
    *
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/2014-11-03/#overview-cursor-pagination)
    *  list of your bank accounts.
    *
    * Example URL: /customer_bank_accounts
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
        return '\GoCardless\Resources\CustomerBankAccount';
    }

  /**
    *  Get the key the response object is enclosed in in JSON.
    *  Used internally to wrap and unwrap http requests.
    *
    *  @return string
    */
    protected function envelopeKey()
    {
        return 'customer_bank_accounts';
    }
}
