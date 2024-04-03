<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;
use Spatie\Sitemap\SitemapGenerator;
use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automatically Generate an XML Sitemap';
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        SitemapGenerator::create('https://ecoretechserv.com')->writeToFile(public_path('sitemap.xml'));

        // Sitemap::create(config('app.url'))

        // ->add(Url::create('/')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))

        // ->add(Url::create('/about-us')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))

        // ->add(Url::create('/contact-us')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))

        // ->add(Url::create('/faq')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))

        // ->add(Url::create('/hardware-support-in-kolkata')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))
        // ->add(Url::create('/network-security-in-kolkata')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))

        // ->add(Url::create('/cctv-surveillance-in-kolkata')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))
        // ->add(Url::create('/website-development-in-kolkata')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))
        // ->add(Url::create('/graphic-designing-in-kolkata')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))
        // ->add(Url::create('/digital-marketing-in-kolkata')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))
        // ->add(Url::create('/software-development-in-kolkata')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))
        // ->add(Url::create('/app-development-in-kolkata')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))
        // ->add(Url::create('/cloud-services-in-kolkata')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))
        // ->add(Url::create('/remote-support')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))
        // ->add(Url::create('/softwares-drivers')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))
        // ->add(Url::create('/view-status')
        //     ->setLastModificationDate(Carbon::yesterday())
        //     ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        //     ->setPriority(0.9))

        // ->writeToFile(public_path('sitemap.xml'));
    }
}
