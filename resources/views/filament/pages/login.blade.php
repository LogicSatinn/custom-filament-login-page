<div class="flex min-h-screen">
    <div class="bg-white dark:bg-gray-900 flex flex-1 flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
                <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900 dark:text-white/90">Sign in</h2>
            </div>

            <div class="mt-8">
                <div class="mt-6">
                    <x-filament-panels::form wire:submit="authenticate">
                        {{ $this->form }}

                        <x-filament-panels::form.actions
                            :actions="$this->getCachedFormActions()"
                            :alignment="$this->getFormActionsAlignment()"
                            :full-width="$this->hasFullWidthFormActions()"
                        />

                       <div class="flex flex-row gap-4">
                           {{ $this->action1 }}
                           {{ $this->action2 }}
                       </div>
                    </x-filament-panels::form>
                </div>
            </div>
        </div>
    </div>
    <div class="relative hidden w-0 flex-1 lg:block">
        <div class="absolute inset-0 h-full w-full" id="particles"></div>
    </div>

    <x-filament-actions::modals />

    <script src="{{ asset('js/app/particles-bundle.js') }}"></script>
    <script>
        (async () => {
            await loadFireflyPreset(tsParticles); // this is required only if you are not using the bundle script

            await tsParticles.load("particles", {
                preset: "firefly",
            });
        })();
    </script>
</div>
