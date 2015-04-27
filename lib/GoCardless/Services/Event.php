<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardless\Services;

/**
  *  Events
  *
  * @method \GoCardless\Core\ListResponse list() list(array $options = array(), array $headers = array()) gets a non-paginated list of models given finder options.
  *
  *  Events are stored for all webhooks. An event refers to a resource which has
  *  been updated, for example a payment which has been collected, or a mandate
  *  which has been transferred.
  */
class Event extends Base
{
  
  /**
    *  List events
    *
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/2014-11-03/#overview-cursor-pagination)
    *  list of your events.
    *
    *  Example URL: /events
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
        return $this->make_request('list', 'get', '/events', $params);
    }

  /**
    *  Get a single event
    *
    *  Retrieves the details of a single event.
    *
    *  Example URL: /events/:identity
    *
    *
    * @param string $identity Unique identifier, beginning with "EV"
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return Event
    * @throws \GoCardless\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardless\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function get($identity, $params = array(), $headers = array())
    {
        $path = $this->sub_url('/events/:identity', array(
            'identity' => $identity
        ));

        return $this->make_request('get', 'get', $path, $params, $headers);
    }



  /**
    *  List events
    *
    *  Returns a
    *  [cursor-paginated](https://developer.gocardless.com/pro/2014-11-03/#overview-cursor-pagination)
    *  list of your events.
    *
    * Example URL: /events
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
        return '\GoCardless\Resources\Event';
    }

  /**
    *  Get the key the response object is enclosed in in JSON.
    *  Used internally to wrap and unwrap http requests.
    *
    *  @return string
    */
    protected function envelopeKey()
    {
        return 'events';
    }
}
