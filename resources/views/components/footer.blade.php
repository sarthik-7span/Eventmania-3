<div>
    <footer>
        <section class="large-footer bg-primaryDark text-gray-100 py-8 md:py-14">
            <div class="max-w-7xl mx-auto px-8 sm:px-6">
                <div
                    class="grid grid-cols-1 gap-6 md:gap-8 mb-6 lg:mb-8 lg:pb-8 border-b-[1px] border-b-gray-700 pb-6  {{ request()->get('subDomain') ? 'lg:grid-cols-3' : 'lg:grid-cols-4' }}">
                    <div class="space-y-6 col-span-1 lg:col-span-2 text-left">
                        <div>
                            <div class="footer-logon h-8 mb-8 lg:mb-6">
                                <img class="justify-center my-0 h-8 w-full object-contain object-left"
                                    src="{{ request()->get('logo_url') ? request()->get('logo_url') : asset('img/logo-white.svg') }}"
                                    alt="{{ config('app.name') }}">
                            </div>
                            <div class="social-icons space-y-1">
                                <h5 class="text-white text-base"> {{ __('letsConnect') }}
                                </h5>
                                <div class="flex items-center justify-start gap-4 mt-2.5">
                                    <a target="_blank" href="#">
                                        <svg class="social-icon h-6 w-6 transition delay-150" width="12"
                                            height="24" viewBox="0 0 12 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 1.66663H8.5C7.39493 1.66663 6.33513 2.10561 5.55372 2.88701C4.77232 3.66842 4.33334 4.72822 4.33334 5.83329V8.33329H1.83334V11.6666H4.33334V18.3333H7.66667V11.6666H10.1667L11 8.33329H7.66667V5.83329C7.66667 5.61228 7.75447 5.40032 7.91075 5.24404C8.06703 5.08776 8.27899 4.99996 8.5 4.99996H11V1.66663Z"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <a target="_blank" href="#">
                                        <svg class="social-icon h-6 w-6 transition delay-150" width="20"
                                            height="18" viewBox="0 0 20 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.1667 1.49996C18.3687 2.06285 17.4851 2.49338 16.55 2.77496C16.0481 2.19788 15.3811 1.78887 14.6392 1.60323C13.8973 1.41759 13.1162 1.46429 12.4017 1.737C11.6872 2.00972 11.0737 2.49529 10.6442 3.12805C10.2146 3.76082 9.98975 4.51024 10 5.27496V6.10829C8.53553 6.14626 7.0844 5.82147 5.77584 5.16283C4.46729 4.50419 3.34193 3.53215 2.5 2.33329C2.5 2.33329 -0.83333 9.83329 6.66667 13.1666C4.95044 14.3316 2.90597 14.9157 0.833336 14.8333C8.33333 19 17.5 14.8333 17.5 5.24996C17.4992 5.01783 17.4769 4.78629 17.4333 4.55829C18.2838 3.71953 18.884 2.66055 19.1667 1.49996Z"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <a target="_blank" href="#">
                                        <svg class="social-icon h-6 w-6 transition delay-150" width="20"
                                            height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.5833 5.41663H14.5917M5.83333 1.66663H14.1667C16.4679 1.66663 18.3333 3.53211 18.3333 5.83329V14.1666C18.3333 16.4678 16.4679 18.3333 14.1667 18.3333H5.83333C3.53215 18.3333 1.66667 16.4678 1.66667 14.1666V5.83329C1.66667 3.53211 3.53215 1.66663 5.83333 1.66663ZM13.3333 9.47496C13.4362 10.1685 13.3177 10.8768 12.9948 11.4991C12.6719 12.1215 12.161 12.6261 11.5347 12.9414C10.9084 13.2566 10.1987 13.3663 9.50649 13.2549C8.81427 13.1435 8.1748 12.8167 7.67903 12.3209C7.18326 11.8252 6.85644 11.1857 6.74506 10.4935C6.63367 9.80125 6.74339 9.09154 7.0586 8.46527C7.37382 7.839 7.87849 7.32808 8.50082 7.00516C9.12315 6.68224 9.83146 6.56378 10.525 6.66663C11.2324 6.77153 11.8874 7.10118 12.3931 7.60688C12.8988 8.11258 13.2284 8.76752 13.3333 9.47496Z"
                                                stroke="white" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <p class="text-white text-base font-normal ">
                            By continuing past this page, you agree to our <a wire:navigate href="#"
                                class="underline hover:text-primary-500">{{ __('termsOfUse') }}</a>.
                        </p>
                    </div>

                    <div class="col-span-1 ">
                        <nav class="text-sm capitalize">
                            <div class="mb-3">
                                <div class="w-fit">
                                    <h4 class="text-xl mb-0.5 text-white footer-link block font-semibold">
                                        {{ __('Resources') }}
                                    </h4>
                                </div>
                            </div>

                            <div class="space-y-2 lg:space-y-1">
                                <a wire:navigate href="#"
                                    class="text-base text-white hover:text-primary-500 footer-link block">
                                    {{ __('aboutUs') }} </a>
                                <a wire:navigate href="#"
                                    class="text-base text-white hover:text-primary-500 footer-link block">
                                    {{ __('support') }} </a>
                                <a wire:navigate href="#"
                                    class="text-base text-white hover:text-primary-500 footer-link block">
                                    {{ __('contactUs') }} </a>
                                <a href="https://eventmaniapartners.com/en/"
                                    class="text-base text-white hover:text-primary-500 footer-link block">
                                    {{ __('sell') }} {{ __('on') }} {{ config('app.name') }}</a>
                            </div>
                        </nav>
                    </div>
                    @if (!request()->get('subDomain'))
                        <div class="col-span-1 ">
                            <nav class="text-sm capitalize">
                                <div class="mb-3">
                                    <div class="w-fit">
                                        <h4 class="text-xl  mb-0.5 text-white footer-link block font-semibold">
                                            {{ __('friendsAndPartners') }}
                                        </h4>
                                    </div>
                                </div>
                                <div class="space-y-2 lg:space-y-1">
                                    <a wire:navigate href="#"
                                        class="text-base text-white hover:text-primary-500 footer-link block">
                                        vendor name
                                    </a>
                                </div>
                            </nav>
                        </div>
                    @endif
                </div>
                <div class="flex flex-col md:flex-row gap-2 md:gap-3 justify-between w-full">
                    <div class="divide-x divide-white">
                        <a wire:navigate href="#"
                            class="text-sm md:text-base  font-normal text-white hover:text-primary-500 footer-link pr-3 mr-3">
                            {{ __('purchasePolicy') }} </a>
                        <a wire:navigate href="#"
                            class="text-sm md:text-base  font-normal text-white hover:text-primary-500 footer-link pr-3 mr-3">
                            {{ __('privacyPolicy') }} </a>
                        <a wire:navigate href="#"
                            class="text-sm md:text-base  font-normal text-white hover:text-primary-500 footer-link">
                            {{ __('cookiePolicy') }} </a>
                    </div>
                    <p class="text-white text-sm md:text-base  font-normal">© {{ date('Y') }}
                        {{ config('app.name') }} -
                        {{ __('allRightsReserved') }}.</p>
                </div>
            </div>
        </section>
    </footer>
</div>
