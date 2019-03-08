<?php

use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;
use Illuminate\Database\Seeder;

class BuildDatabasesForTenants extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

		 $customers = [
            ['database' => 'proteus1_tenancy', 'domain' => 'proteus1.localhost', 'name' => 'Proteus1 Customer', 'email' => 'customer@proteus1.com'],
            ['database' => 'proteus2_tenancy', 'domain' => 'proteus2.localhost', 'name' => 'Proteus2 Customer', 'email' => 'customer@proteus2.com'],
            ['database' => 'proteus3_tenancy', 'domain' => 'proteus3.localhost', 'name' => 'Proteus3 Customer', 'email' => 'customer@proteus3.com'],
        ];
        foreach ($customers as $customer) {

            /*
            |--------------------------------------------------------------------------
            | CREATE THE WEBSITE
            |--------------------------------------------------------------------------
             */
            $website = new Website(['uuid' => $customer['database']]);

            app(WebsiteRepository::class)->create($website);


            /*
            |--------------------------------------------------------------------------
            | CREATE THE HOSTNAME
            |--------------------------------------------------------------------------
             */
            $hostname = new Hostname(['fqdn' => $customer['domain']]);
            app(HostnameRepository::class)->attach($hostname, $website);

        }
    }
}
