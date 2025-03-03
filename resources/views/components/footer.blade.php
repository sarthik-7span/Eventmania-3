<div>
    <footer>
        <section class="large-footer bg-primaryDark text-gray-100 pt-10 pb-3 md:!py-14">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div
                    class="grid grid-cols-1 gap-6 md:gap-8 mb-3 lg:mb-8 lg:pb-8 border-b-[1px] border-b-gray-700 pb-5 font-roboto {{ request()->get('subDomain') ? 'lg:grid-cols-3' : 'lg:grid-cols-4' }}">
                    <div class="space-y-6 col-span-1 lg:!col-span-2 text-center lg:!text-left">
                        <div class="footer-logon w-40 h-10 mx-auto lg:!ml-0">
                            <img class="justify-center text-center mx-auto my-0 h-10 w-full object-contain"
                                src="{{ request()->get('logo_url') ? request()->get('logo_url') : asset('img/logo-white.svg') }}"
                                alt="{{ config('app.name') }}">
                        </div>
                        <div class="social-icons space-y-1">
                            <h5 class="text-white text-xs md:!text-base"> {{ __('letsConnect') }}
                            </h5>
                            <div class="flex items-center justify-center lg:!justify-start gap-3 mt-2">
                                <a target="_blank" href="#">
                                    <svg class="social-icon hover:fill-gray-300 h-6 w-6 transition delay-150"
                                        xmlns="http://www.w3.org/2000/svg" width="12" height="24"
                                        viewBox="0 0 12 24" fill="none">
                                        <path
                                            d="M3.08497 8.11318H0.169983V11.9998H3.08497V23.6598H7.94328V11.9998H11.4413L11.8299 8.11318H7.94328V6.46134C7.94328 5.58684 8.13761 5.19818 9.01211 5.19818H11.8299V0.339844H8.13761C4.63963 0.339844 3.08497 1.89451 3.08497 4.80951V8.11318Z"
                                            fill="white" />
                                    </svg>
                                </a>
                                <a target="_blank" href="#">
                                    <svg class="social-icon hover:fill-gray-300 h-6 w-6 transition delay-150"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="20"
                                        viewBox="0 0 24 20" fill="none">
                                        <path
                                            d="M7.67396 19.4761C16.4744 19.4761 21.287 12.1852 21.287 5.86309C21.287 5.65595 21.2828 5.44986 21.2732 5.24457C22.2073 4.56929 23.0195 3.72638 23.66 2.7673C22.8028 3.14818 21.8803 3.40466 20.9125 3.5203C21.9002 2.92803 22.6588 1.9907 23.0166 0.873544C22.092 1.42178 21.0682 1.82016 19.9786 2.035C19.1052 1.10509 17.8618 0.523438 16.486 0.523438C13.8435 0.523438 11.7007 2.66625 11.7007 5.30743C11.7007 5.683 11.7429 6.04796 11.8246 6.39833C7.84848 6.19861 4.32249 4.29451 1.96298 1.39977C1.55161 2.10661 1.31475 2.9283 1.31475 3.80436C1.31475 5.46419 2.15952 6.92959 3.44404 7.78709C2.65922 7.76295 1.92187 7.54705 1.27709 7.18846C1.27603 7.20835 1.27603 7.22851 1.27603 7.24946C1.27603 9.5668 2.92551 11.5014 5.11447 11.9398C4.71264 12.0494 4.28986 12.1083 3.85329 12.1083C3.54509 12.1083 3.24538 12.0775 2.95389 12.0221C3.56286 13.9227 5.32931 15.3062 7.42358 15.3451C5.78577 16.6286 3.7228 17.3933 1.48132 17.3933C1.09541 17.3933 0.714534 17.3713 0.340027 17.327C2.45737 18.6839 4.97151 19.4761 7.67396 19.4761Z"
                                            fill="white" />
                                    </svg>
                                </a>
                                <a target="_blank" href="#">
                                    <svg class="social-icon hover:fill-gray-300 h-6 w-6 transition delay-150"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M12 2.47751C15.1093 2.47751 15.498 2.47751 16.7612 2.57468C19.9677 2.67185 21.4252 4.22652 21.5223 7.33585C21.6195 8.59902 21.6195 8.89052 21.6195 11.9999C21.6195 15.1092 21.6195 15.4979 21.5223 16.6639C21.4252 19.7732 19.8705 21.3279 16.7612 21.425C15.498 21.5222 15.2065 21.5222 12 21.5222C8.89066 21.5222 8.502 21.5222 7.336 21.425C4.1295 21.3279 2.672 19.7732 2.57483 16.6639C2.47766 15.4007 2.47766 15.1092 2.47766 11.9999C2.47766 8.89052 2.47766 8.50185 2.57483 7.33585C2.672 4.22652 4.22666 2.67185 7.336 2.57468C8.502 2.47751 8.89066 2.47751 12 2.47751ZM12 0.339844C8.7935 0.339844 8.40483 0.339844 7.23883 0.437011C2.9635 0.631344 0.631496 2.96335 0.437163 7.23869C0.339996 8.40469 0.339996 8.79335 0.339996 11.9999C0.339996 15.2064 0.339996 15.595 0.437163 16.761C0.631496 21.0364 2.9635 23.3684 7.23883 23.5627C8.40483 23.6599 8.7935 23.6599 12 23.6599C15.2065 23.6599 15.5952 23.6599 16.7612 23.5627C21.0365 23.3684 23.3685 21.0364 23.5628 16.761C23.66 15.595 23.66 15.2064 23.66 11.9999C23.66 8.79335 23.66 8.40469 23.5628 7.23869C23.3685 2.96335 21.0365 0.631344 16.7612 0.437011C15.5952 0.339844 15.2065 0.339844 12 0.339844ZM12 5.97552C8.69633 5.97552 5.97566 8.69619 5.97566 11.9999C5.97566 15.3035 8.69633 18.0242 12 18.0242C15.3037 18.0242 18.0243 15.3035 18.0243 11.9999C18.0243 8.69619 15.3037 5.97552 12 5.97552ZM12 15.8865C9.86233 15.8865 8.11333 14.1375 8.11333 11.9999C8.11333 9.86219 9.86233 8.11319 12 8.11319C14.1377 8.11319 15.8867 9.86219 15.8867 11.9999C15.8867 14.1375 14.1377 15.8865 12 15.8865ZM18.2187 4.42085C17.4413 4.42085 16.8583 5.00385 16.8583 5.78118C16.8583 6.55852 17.4413 7.14152 18.2187 7.14152C18.996 7.14152 19.579 6.55852 19.579 5.78118C19.579 5.00385 18.996 4.42085 18.2187 4.42085Z"
                                            fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <p class="text-white text-xs md:!text-base font-normal font-roboto">
                            By continuing past this page, you agree to our <a wire:navigate href="#"
                                class="underline hover:text-primary-500">{{ __('termsOfUse') }}</a>.
                        </p>
                    </div>

                    <div class="col-span-1 text-center lg:!text-left">
                        <nav class="text-sm capitalize">
                            <div class="mb-3">
                                <div class="w-fit mx-auto lg:ml-0 lg:mr-auto">
                                    <h4
                                        class="text-base lg:text-xl font-roboto mb-0.5 text-white footer-link block font-semibold">
                                        {{ __('Resources') }}
                                    </h4>
                                    <div class="scale-100 rounded-sm h-0.5 w-full lg:w-12 mt-1 bg-rainbow_blue"></div>
                                </div>
                            </div>

                            <div class="space-y-1">
                                <a wire:navigate href="#"
                                    class="text-xs md:!text-base font-roboto text-white hover:text-primary-500 footer-link block">
                                    {{ __('aboutUs') }} </a>
                                <a wire:navigate href="#"
                                    class="text-xs md:!text-base font-roboto text-white hover:text-primary-500 footer-link block">
                                    {{ __('support') }} </a>
                                <a wire:navigate href="#"
                                    class="text-xs md:!text-base font-roboto text-white hover:text-primary-500 footer-link block">
                                    {{ __('contactUs') }} </a>
                                <a href="https://eventmaniapartners.com/en/"
                                    class="text-xs md:!text-base font-roboto text-white hover:text-primary-500 footer-link block">
                                    {{ __('sell') }} {{ __('on') }} {{ config('app.name') }}</a>
                            </div>
                        </nav>
                    </div>
                    @if (!request()->get('subDomain'))
                        <div class="col-span-1 text-center lg:!text-left">
                            <nav class="text-sm capitalize">
                                <div class="mb-3">
                                    <div class="w-fit mx-auto lg:ml-0 lg:mr-auto">
                                        <h4
                                            class="text-base lg:text-xl font-roboto mb-0.5 text-white footer-link block font-semibold">
                                            {{ __('friendsAndPartners') }}
                                        </h4>
                                        <div class="scale-100 rounded-sm h-0.5 w-full lg:w-12 mt-1 bg-rainbow_blue">
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-1">
                                    <a wire:navigate href="#"
                                        class="text-xs md:!text-base font-roboto text-white hover:text-primary-500 footer-link block">
                                        vendor name
                                    </a>
                                </div>
                            </nav>
                        </div>
                    @endif
                </div>
                <div class="flex flex-col md:flex-row items-center gap-2 md:gap-3 justify-between w-full">
                    <div class="text-center divide-x divide-white">
                        <a wire:navigate href="#"
                            class="text-xs md:!text-base font-roboto font-normal text-white hover:text-primary-500 footer-link">
                            {{ __('purchasePolicy') }} </a>
                        <a wire:navigate href="#"
                            class="text-xs md:!text-base font-roboto font-normal text-white hover:text-primary-500 footer-link pl-1 ml-1 md:pl-3 md:ml-3">
                            {{ __('privacyPolicy') }} </a>
                        <a wire:navigate href="#"
                            class="text-xs md:!text-base font-roboto font-normal text-white hover:text-primary-500 footer-link pl-1 ml-1 md:pl-3 md:ml-3">
                            {{ __('cookiePolicy') }} </a>
                    </div>
                    <p class="text-white text-xs md:!text-base font-roboto font-normal">© {{ date('Y') }}
                        {{ config('app.name') }} -
                        {{ __('allRightsReserved') }}.</p>
                </div>
            </div>
        </section>
    </footer>
</div>
