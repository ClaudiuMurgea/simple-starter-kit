<div>
    <div style="position:sticky;top:25px;z-index:3;color:#fff;margin-left:20px;margin-top:-30px;" class="fw-bold mont">
        {{ $title }}
    </div>
    <div style="width:80%;margin:0 auto;margin-top:32px;background:rgba(255,255,255,0.8); border-radius:20px;" class="flex flex-col mx-auto">
        <div class="pt-2 w-full text-center text-xl">
            All users
        </div>
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light w-100">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr class="w-100">
                                <th class="px-6 py-4">#</th>
                                <th class="px-6 py-4">First</th>
                                <th class="px-6 py-4">Last</th>
                                <th class="px-6 py-4">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                                <td class="whitespace-nowrap px-6 py-4">Mark</td>
                                <td class="whitespace-nowrap px-6 py-4">Otto</td>
                                <td class="whitespace-nowrap px-6 py-4">@mdo</td>
                            </tr>
                                <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">2</td>
                                <td class="whitespace-nowrap px-6 py-4">Jacob</td>
                                <td class="whitespace-nowrap px-6 py-4">Thornton</td>
                                <td class="whitespace-nowrap px-6 py-4">@fat</td>
                            </tr>
                                <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">3</td>
                                <td class="whitespace-nowrap px-6 py-4">Larry</td>
                                <td class="whitespace-nowrap px-6 py-4">Wild</td>
                                <td class="whitespace-nowrap px-6 py-4">@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- <x-text-input wire:model="myField"></x-text-input> -->
    <!-- <x-primary-button wire:click="myFunc" loading="Saving">
        <span wire:loading.remove>Save</span>
        <span wire:loading wire:target="myFunc">Saving bruh</span>    
    </x-primary-button> -->
</div>
