<?php
/**
 * WARNING: Do not edit by hand, this file was generated by Crank:
 *
 * https://github.com/gocardless/crank
 */

namespace GoCardlessPro\Resources;

/**
 * A thin wrapper around a billing_request, providing access to its
 * attributes
 *
 * @property-read $actions
 * @property-read $created_at
 * @property-read $fallback_enabled
 * @property-read $id
 * @property-read $links
 * @property-read $mandate_request
 * @property-read $metadata
 * @property-read $payment_request
 * @property-read $purpose_code
 * @property-read $resources
 * @property-read $status
 */
class BillingRequest extends BaseResource
{
    protected $model_name = "BillingRequest";

    /**
     * List of actions that can be performed before this billing request can be
     * fulfilled.
     */
    protected $actions;

    /**
     * Fixed [timestamp](#api-usage-time-zones--dates), recording when this
     * resource was created.
     */
    protected $created_at;

    /**
     * (Optional) If true, this billing request can fallback from instant
     * payment to direct debit.
     * Should not be set if GoCardless payment intelligence feature is used.
     * 
     * See [Billing Requests: Retain customers with
     * Fallbacks](https://developer.gocardless.com/getting-started/billing-requests/retain-customers-with-fallbacks/)
     * for more information.
     */
    protected $fallback_enabled;

    /**
     * Unique identifier, beginning with "BRQ".
     */
    protected $id;

    /**
     * 
     */
    protected $links;

    /**
     * Request for a mandate
     */
    protected $mandate_request;

    /**
     * Key-value store of custom data. Up to 3 keys are permitted, with key
     * names up to 50 characters and values up to 500 characters.
     */
    protected $metadata;

    /**
     * Request for a one-off strongly authorised payment
     */
    protected $payment_request;

    /**
     * Specifies the high-level purpose of a mandate and/or payment using a set
     * of pre-defined categories. Required for the PayTo scheme, optional for
     * all others. Currently `mortgage`, `utility`, `loan`, `dependant_support`,
     * `gambling`, `retail`, `salary`, `personal`, `government`, `pension`,
     * `tax` and `other` are supported.
     */
    protected $purpose_code;

    /**
     * 
     */
    protected $resources;

    /**
     * One of:
     * <ul>
     * <li>`pending`: the billing request is pending and can be used</li>
     * <li>`ready_to_fulfil`: the billing request is ready to fulfil</li>
     * <li>`fulfilling`: the billing request is currently undergoing
     * fulfilment</li>
     * <li>`fulfilled`: the billing request has been fulfilled and a payment
     * created</li>
     * <li>`cancelled`: the billing request has been cancelled and cannot be
     * used</li>
     * </ul>
     */
    protected $status;

}
