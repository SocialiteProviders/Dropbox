<?php
namespace SocialiteProviders\Dropbox;

use SocialiteProviders\Manager\SocialiteWasCalled;

class DropboxExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('dropbox', __NAMESPACE__.'\Provider');
    }
}
