<?php

namespace App\Providers;

use Laravel\Spark\Spark;
use Laravel\Spark\Providers\AppServiceProvider as ServiceProvider;

class SparkServiceProvider extends ServiceProvider
{
    /**
     * Your application and company details.
     *
     * @var array
     */
    protected $details = [
        'vendor' => 'Engineering Mastered',
        'product' => 'Bloggercasts.com',
        'street' => '2900 1st Ave APT N302',
        'location' => 'Seattle, WA 98121',
        'phone' => '206-569-8739',
    ];

    /**
     * The address where customer support e-mails should be sent.
     *
     * @var string
     */
    protected $sendSupportEmailsTo = null;

    /**
     * All of the application developer e-mail addresses.
     *
     * @var array
     */
    protected $developers = [
        'nikhil@bloggercasts.com'
    ];

    /**
     * Indicates if the application will expose an API.
     *
     * @var bool
     */
    protected $usesApi = false;

    /**
     * Finish configuring Spark for the application.
     *
     * @return void
     */
    public function booted()
    {
        // Spark::useStripe()->noCardUpFront()->trialDays(10);

        Spark::freePlan()
            ->features([
                'Unlimited Access',
                'Download Printables'
            ]);

        // Spark::plan('Basic', 'provider-id-1')
        //     ->price(10)
        //     ->features([
        //         'First', 'Second', 'Third'
        //     ]);
    }
}
