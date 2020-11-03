<x-app-layout>
    <x-slot name="header">
        <h2 class="header-title">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">

            <?php //TODO: MOVE ALL STYLES TO CSS FILE ?>

            <div style="display: flex;flex-direction: row;">
                <div style="width: 33%;box-shadow: 0 0 10px rgba(0,0,0,0.1);">
                    <div style="display: flex;flex-direction: column;justify-content: center;align-items: center;">
                        <img style="margin: 25px 0; border-radius: 50px;" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                        <div style="margin: 5px 0;font-weight: bold;font-size: 20px;">{{ Auth::user()->name }}</div>
                        <div style="margin: 5px 0;font-size: 15px;">Service Designer</div>
                        <div style="margin: 5px 0;font-size: 10px;color: #9b9b9b;">Sydney, Australia</div>
                        <div style="margin: 5px 0;color: #00fa7c">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div style="margin: 25px 0;font-size: 14px;color: #9b9b9b;">From $150 p/hr</div>
                    </div>
                    <div style="margin: 20px;">
                        <div style="margin: 20px;">
                            <span style="font-weight: bold">Skills</span>
                            <div style="display: flex;flex-wrap: wrap">
                                <span style="font-size: 14px;flex: 1 1 90px;text-align: center;background: #dbfdeb;border-radius: 7px;margin: 10px;color: #00fa7c">Skill</span>
                                <span style="font-size: 14px;flex: 1 1 90px;text-align: center;background: #dbfdeb;border-radius: 7px;margin: 10px;color: #00fa7c">Skill</span>
                                <span style="font-size: 14px;flex: 1 1 90px;text-align: center;background: #dbfdeb;border-radius: 7px;margin: 10px;color: #00fa7c">Skill</span>
                                <span style="font-size: 14px;flex: 1 1 90px;text-align: center;background: #dbfdeb;border-radius: 7px;margin: 10px;color: #00fa7c">Skill</span>
                                <span style="font-size: 14px;flex: 1 1 90px;text-align: center;background: #dbfdeb;border-radius: 7px;margin: 10px;color: #00fa7c">Skill</span>
                                <span style="font-size: 14px;flex: 1 1 90px;text-align: center;background: #dbfdeb;border-radius: 7px;margin: 10px;color: #00fa7c">Skill</span>
                            </div>
                        </div>
                        <div style="margin: 20px;">
                            <span style="font-weight: bold">About me:</span>
                            <p style="font-size: 13px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div style="margin: 20px;">
                            <span style="font-weight: bold">Project worked on:</span>
                            <p style="font-size: 13px;">XXXX</p>
                        </div>
                        <div style="margin: 20px;">
                            <span style="font-weight: bold">Responce time</span>
                            <p style="font-size: 13px;">within 24 hours</p>
                        </div>
                    </div>
                </div>
                <div style="width: 66%;margin: 0 0 0 30px;">
                    <div>
                        <span style="font-weight: bold;font-size: 19px;">My Portfolio</span>
                        <div style="display: flex;flex-direction: row;margin: 25px 0 0 0;">
                            <div style="box-shadow: 0 0 10px rgba(0,0,0,0.1);margin: 0 20px;padding: 20px;">
                                <div style="font-weight: bold;font-size: 15px;">Marketing Manager/Digital Specialist</div>
                                <div style="margin: 15px 0 30px 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                                <a href="#" style="color: #00fa7c;">View project</a>
                            </div>
                            <div style="box-shadow: 0 0 10px rgba(0,0,0,0.1);margin: 0 20px;padding: 20px;">
                                <div style="font-weight: bold;font-size: 15px;">Marketing Manager/Digital Specialist</div>
                                <div style="margin: 15px 0 30px 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</div>
                                <a href="#" style="color: #00fa7c;">View project</a>
                            </div>
                        </div>
                    </div>
                    <div style="margin: 50px 0 0 0;">
                        <span style="font-weight: bold;font-size: 19px;">My Rewiews</span>
                        <div style="display: flex;flex-direction: row;margin: 25px 0 0 0;">
                            <div style="margin: 0 20px;padding: 20px;background: #f2f2f2;">
                                <div style="font-size: 18px;font-weight: bold;margin: 0 0 70px 0;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit"</div>
                                <div style="color: #00fa7c">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div style="color: #9b9b9b;font-size: 12px;margin: 12px 0 0 0;">Oliver Ekland, Client</div>
                            </div>
                            <div style="margin: 0 20px;padding: 20px;background: #f2f2f2;">
                                <div style="font-size: 18px;font-weight: bold;margin: 0 0 70px 0;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit"</div>
                                <div style="color: #00fa7c">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div style="color: #9b9b9b;font-size: 12px;margin: 12px 0 0 0;">Nikolina Linkoln, Client</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="width: 100%"><a style="display:block;text-align: center;padding: 12px;background: #00fa7c;border-radius: 8px;margin: 25px 0;" href="#">Edit Profile</a></div>
        </div>
    </div>

    <div class="hidden">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updateProfileInformation()))
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>
