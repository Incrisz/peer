<?php

namespace Database\Seeders;

use App\Models\HomeSectionv;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomeSectionvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Low Fees for Crypto Payments',
                'description' => "<p>There are no high fees with Peernetics. Accept Bitcoin, Ethereum, Peernetics token and hundreds of other cryptocurrencies with just 0.5 - 1% fees.
                </p>
                <a href='/cryptocurrency-payment-gateway'>Learn More </a>
                ",
            ],
            [
                'title' => "A Utility Token That Rewards Crypto Payments",
                'description' => "<p>
                <p>PNS is the token that powers the Peernetics platform, and
                    you’ll be rewarded in many ways for using it.</p>
                <ul>
                    <li>0.5% transaction fee for accepting PNS as a means of
                        payment.</li>
                    <li>Unique discounts, benefits and offers with merchant
                        partners when you hold a minimum of 200 PNS.</li>
                </ul>
                </p>
                <a href='/pns-token'>Learn More ></a>"
            ],
            [
                'title' => 'Your Loyalty is Always Rewarded',
                'description' => "<p>
                <p>Hold a minimum of 200 PNS, and you’ll be automatically
                    entered into the Peernetics loyalty program, where
                    you’ll receive.</p>
                <ul>
                    <li>Instant discounts – no waiting for cashback</li>
                    <li>Get 100% of the discount agreed with the merchant
                        partner – we don’t keep anything</li>
                    <li>Discounts at restaurants, coffee shops, retailers
                        and more</li>
                </ul>
                </p>
                <a href='/loyalty-program'>Learn More ></a>",
            ],
            [
                'title' => 'Become A Merchant Partner',
                'description' => "<p>
                <p>Our free-to-join merchant partner network empowers you to
                    promote exclusive offers, generate brand exposure
                    amongst the community, drive traffic to your company and
                    increase revenue.</p>
                </p>
                <a href='/merchant-program'>Learn More ></a>",
            ],
            [
                'title' => 'Merchant Marketing Service',
                'description' => "<p>
                <p>Choose from our cost-effective marketing service will
                    promote your business within our community and beyond,
                    enabling you to attract more customers and grow your
                    influence.</p>
                </p>
                <a href='/merchant-marketing-service'>Learn More ></a>",
            ],
            [
                'title' => 'About',
                'description' => "<p>
                <p>Peernetics is on a mission to revolutionise the way
                    businesses and consumers transact. Through a
                    user-friendly crypto payment gateway, we empower
                    consumers to pay in the currencies they
                    hold while giving businesses the opportunity to dive
                    into the crypto world without the stress.</p>
                <p>&nbsp;</p>
                <p>Join us on our journey of transforming the world and
                    making it easy for businesses and consumers to embrace
                    crypto.</p>
                </p>
                <a href='/about'>About Us ></a>",
            ],
            [
                'title' => '24/7 Support To Power Your Growth',
                'description' => "<p>
                <p>Our team of experts will always be on hand to ensure
                    you’re getting the most from Peernetics. The success of
                    our crypto payment gateway relies on you reaping rewards
                    from it, so we’ll
                    do everything we can to ensure you get the results you
                    desire.</p>
                </p>
                <a href='/contact-us'>Learn More ></a>",
            ],
            [
                'title' => 'Accepting Crypto Payments',
                'description' => "<p>
                <p>The Peernetics crypto payment gateway will exponentially
                    accelerate the next phase of your business’s growth.</p>
                </p>
                <a href='/cryptocurrency-payment-gateway'>Learn More
                    ></a>",
            ],
        ];

        HomeSectionv::insert($data);
    }
}
