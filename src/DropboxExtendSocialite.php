<?php
namespace SocialiteProviders\Dropbox;

use SocialiteProviders\Manager\SocialiteWasCalled;

class DropboxExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'dropbox', __NAMESPACE__.'\Provider'
        );
    }
}
