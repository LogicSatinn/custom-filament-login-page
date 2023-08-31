<div class="flex min-h-screen">
    <div class="bg-white flex flex-1 flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
                <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">Sign in </h2>
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
        <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80" alt="">
    </div>

    <x-filament-actions::modals />
</div>
