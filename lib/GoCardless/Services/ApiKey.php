<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Services;

/**
  *  API Keys
  *
  * @method \GoCardless\Core\ListResponse list() list(array $options = array(), array $headers = array()) gets a non-paginated list of models given finder options.
  *
  *  <a name="api_key_not_active"></a>API keys are designed to be used by any
  *  integrations you build. You should generate a key and then use it to make
  *  requests to the API and set the webhook URL for that integration. They do
  *  not expire, but can be disabled.
  */
class ApiKey extends Base
{
  
  /**
    *  Create an API key
    *
    *  Creates a new API key.
    *
    *  Example URL: /api_keys
    *
    *
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return ApiKey
    * @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function create($params = array(), $headers = array())
    {
        return $this->make_request('create', 'post', '/api_keys', $params);
    }

  /**
    *  List API keys
    *
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/2014-11-03/#overview-cursor-pagination)
    *  list of your API keys.
    *
    *  Example URL: /api_keys
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
        return $this->make_request('list', 'get', '/api_keys', $params);
    }

  /**
    *  Get a single API key
    *
    *  Retrieves the details of an existing API key.
    *
    *  Example URL: /api_keys/:identity
    *
    *
    * @param string $identity Unique identifier, beginning with "AK"
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return ApiKey
    * @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function get($identity, $params = array(), $headers = array())
    {
        $path = $this->sub_url('/api_keys/:identity', array(
            'identity' => $identity
        ));

        return $this->make_request('get', 'get', $path, $params, $headers);
    }

  /**
    *  Update an API key
    *
    *  Updates an API key. Only the `name` and `webhook_url` fields are
    *  supported.
    *
    *  Example URL: /api_keys/:identity
    *
    *
    * @param string $identity Unique identifier, beginning with "AK"
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return ApiKey
    * @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function update($identity, $params = array(), $headers = array())
    {
        $path = $this->sub_url('/api_keys/:identity', array(
            'identity' => $identity
        ));

        return $this->make_request('update', 'put', $path, $params, $headers);
    }

  /**
    *  Disable an API key
    *
    *  Disables an API key. Once disabled, the API key will not be usable to
    *  authenticate any requests, and its `webhook_url` will not receive any
    *  more events.
    *
    *  Example URL: /api_keys/:identity/actions/disable
    *
    *
    * @param string $identity Unique identifier, beginning with "AK"
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return ApiKey
    * @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function disable($identity, $params = array(), $headers = array())
    {
        $path = $this->sub_url('/api_keys/:identity/actions/disable', array(
            'identity' => $identity
        ));

        return $this->make_request('disable', 'post', $path, $params, $headers);
    }



  /**
    *  List API keys
    *
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/2014-11-03/#overview-cursor-pagination)
    *  list of your API keys.
    *
    * Example URL: /api_keys
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
        return '\GoCardless\Resources\ApiKey';
    }

  /**
    *  Get the key the response object is enclosed in in JSON.
    *  Used internally to wrap and unwrap http requests.
    *
    *  @return string
    */
    protected function envelopeKey()
    {
        return 'api_keys';
    }
}
